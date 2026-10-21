<?php 
// Recebe o tipo de consulta selecionado no menu.php e redireciona para a página correspondente
if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
    if ($tipo === 'professor') {
        header("Location: consulta_professor.php");
    } elseif ($tipo === 'especialista') {
        header("Location: consulta_especialista.php");
    } elseif ($tipo === 'analista') {
        header("Location: consulta_analista.php");
    }
    exit();
}
?>