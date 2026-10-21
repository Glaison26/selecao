<?php

session_start();
include 'conexao.php';
include 'lib_gop.php';
$cargo = $_SESSION['cargo'];
$zona = $_SESSION['zona'];
// rotina em php para gravar os dados do candidato no banco de dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // receber dados do formulário dos arquivos cargos.php e cadastro_ia.php
    $nome = $_POST['nome_completo'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $rg = $_POST['rg'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    
    $pos_graduacao = $_POST['pos_graduacao'] ?? '';
    $experiencia = $_POST['experiencia'] ?? '';
    $selecao = $_POST['modalidade_vaga'] ?? '';
    $mestrado = $_POST['mestrado'] ?? '';
    $doutorado = $_POST['doutorado'] ?? '';
    // verifico se cpf digitádo é valido. Se não for valido, exibo mensagem de erro e interrompo a execução do script
    if (!validaCPF($cpf)) {
        echo "<p style='color: red;'>CPF inválido. Por favor, insira um CPF válido.</p>";
        exit();
    }
    // verifico se já existe na tabela do cadastro mais de um registro do mesmo cpf 
    $sql = "SELECT * FROM cadastro_ia WHERE cpf = ?";
    $stmt = $conection->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 1) {
        echo "<p style='color: red;'>CPF já cadastrado duas vezes. Por favor, insira um CPF diferente.</p>";
        exit();
    }
    // rotina para gravação dos dados no banco de dados
    $sql = "INSERT INTO cadastro_ia (nome, cpf, rg, data_nasc, email, telefone, endereco, cargo, zona, pos_graduacao, experiencia, selecao_vaga, mestrado, doutorado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conection->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $nome, $cpf, $rg, $data_nascimento, $email, $telefone, $endereco, $cargo, $zona, $pos_graduacao, $experiencia, $selecao, $mestrado, $doutorado);
    if ($stmt->execute()) {
        // chamo página com mensagem e sucesso e link para voltar a página inicial
        header('Location: sucesso.php');
    } else {
        echo "<p style='color: red;'>Erro ao gravar candidatura: " . $stmt->error . "</p>";
    }
}
