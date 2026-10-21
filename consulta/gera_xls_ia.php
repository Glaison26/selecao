
<?php
session_start();
include_once '../conexao.php';

// sql para leitura da tabela decadastro_ia dos candidados 
$c_sql = "SELECT * FROM cadastro_ia ORDER BY nome ASC";
$result = $conection->query($c_sql);
// Aceitar csv ou texto 
header('Content-Type: text/csv; charset=utf-8');

// Nome arquivo
header('Content-Disposition: attachment; filename=selecao_ia.csv');
// Gravar no buffer
$resultado = fopen("php://output", 'w');

//mb_convert_encoding('Endereço', "ISO-8859-1", "UTF-8")

// Criar o cabeçalho do Excel - Usar a função mb_convert_encoding para converter carateres especiais'
// faço a Leitura da tabela com sql

$cabecalho = [
   'ID', 'Zona', 'e-mail', 'CPF', 'nome', 'RG',  'endereco', 'Data de Nascimento','telefone', 'Cargo', 'Pos Graduação', 'Doutorado', 'Mestrado', 'Seleção da Vaga'
];

$cabecalho = mb_convert_encoding($cabecalho, "ISO-8859-1", "UTF-8");
// Abrir o arquivo
//$arquivo = fopen('file.csv', 'w');

// Escrever o cabeçalho no arquivo
fputcsv($resultado, $cabecalho, ';');
// verifico se a query foi correto
if (!$result) {
    die("Erro ao Executar Sql!!" . $conection->connect_error);
}

// Array de dados
// insiro os registro do banco de dados na tabela 
while ($c_linha = $result->fetch_assoc()) {
    fputcsv($resultado, mb_convert_encoding($c_linha, "ISO-8859-1", "UTF-8"), ';');
}
// Fechar arquivo
fclose($resultado);
