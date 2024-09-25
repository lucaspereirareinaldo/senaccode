<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use PDO;
use PDOException;

class ControllerLogin extends Base
{
    public function insert($request, $response)
    {
        // Captura os dados da requisição
        $data = $request->getParsedBody(); // No caso de JSON, usar getBody()->getContents()
        $usuario = $data['usuario'] ?? '';
        $email = $data['email'] ?? '';
        $senha = $data['senha'] ?? '';

        // Validação básica
        if (empty($usuario) || empty($email) || empty($senha)) {
            return $response->withJson(['status' => false, 'msg' => 'Todos os campos são obrigatórios.'], 400);
        }

        // Conexão com o banco de dados
        try {
            // Substitua pelos valores corretos de host, banco de dados, usuário e senha
            $pdo = new PDO('pgsql:host=localhost;dbname=bancousuario', 'senaccurso', 'senaccurso2');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepara a consulta de inserção
            $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha)");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', password_hash($senha, PASSWORD_DEFAULT)); // Armazena a senha de forma segura

            // Executa a consulta
            if ($stmt->execute()) {
                return $response->withJson(['status' => true, 'msg' => 'Cadastro realizado com sucesso.'], 201);
            } else {
                return $response->withJson(['status' => false, 'msg' => 'Erro ao cadastrar.'], 500);
            }
        } catch (PDOException $e) {
            return $response->withJson(['status' => false, 'msg' => 'Erro ao conectar ao banco de dados: ' . $e->getMessage()], 500);
        }
    }
}
