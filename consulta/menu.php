<?php
$consultas = [
	'professor' => 'Professor de Educação Básica',
	'especialista' => 'Especialista de Educação Básica',
	'analista' => 'Analista de Educação Básica',
];
// verifica qual tipo de consulta foi selecionado e redireciona para a página correspondente
if (isset($_GET['tipo']) && array_key_exists($_GET['tipo'], $consultas)) {
    $tipo = $_GET['tipo'];
    if ($tipo === 'professor') {
        header("Location: consulta_professor.php");
    } elseif ($tipo === 'especialista') {
        header("Location: consulta_especialista.php");
    } elseif ($tipo === 'analista') {
        header("Location: consulta_analista.php");
    }
    header("Location: consulta.php?tipo=$tipo");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consulta de dados</title>
	<style>
		body { font-family: Arial, sans-serif; margin: 0; padding: 2rem; background: #f4f6f8; color: #222; }
		main { max-width: 700px; margin: 2rem auto; padding: 2rem; background: #fff; border-radius: 8px; }
		h1 { margin-top: 0; }
		.opcoes { display: grid; gap: 1rem; padding: 0; list-style: none; }
		.opcoes a { display: block; padding: 1rem; border: 1px solid #ccd3da; border-radius: 6px; color: #145a8d; text-decoration: none; }
		.opcoes a:hover, .opcoes a:focus { background: #eef6fc; border-color: #145a8d; }
	</style>
</head>
<body>
	<main>
		<h1>Consulta de dados</h1>
		<p>Selecione a categoria que deseja consultar:</p>
		<ul class="opcoes">
			<?php foreach ($consultas as $tipo => $titulo): ?>
				<li>
					<a href="?tipo=<?= htmlspecialchars($tipo, ENT_QUOTES, 'UTF-8') ?>">
						<?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</main>
</body>
</html>
