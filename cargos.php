<?php
// cargos.php
// chamo cadastro_ia para preencher o formulário com os dados do candidato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
  
    // Armazena os dados em variáveis de sessão para uso posterior
    session_start();
    $_SESSION['cargo'] = $_POST['cargo'] ?? '';
    $_SESSION['zona'] = $_POST['zona'] ?? '';

    // Redireciona para o próximo passo (cadastro_ia.php) se foi selecionado primeiro cargo do do combobox de cargos
	if ($_SESSION['cargo'] === 'Professor de Educação Básica - Séries Iniciais / Finais') {
		header('Location: cadastro_ia.php');
		exit();
	}
	// redireciona para o próximo passo (cadastro_ib.php) se foi selecionado segundo cargo do do combobox de cargos
	if ($_SESSION['cargo'] === 'Especialista de Educação Básica') {	
		header('Location: cadastro_ib.php');
		exit();
	}
	// redireciona para o próximo passo (cadastro_ic.php) se foi selecionado terceiro cargo do do combobox de cargos
	if ($_SESSION['cargo'] === 'Analista de Educação Básica') {
		header('Location: cadastro_ic.php');
		exit();
	}
	
    
    exit();
}
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seleção de cargo e zona</title>
	<style>
		body { max-width: 900px; margin: 2rem auto; padding: 0 1rem; font-family: Arial, sans-serif; line-height: 1.5; }
		fieldset { margin: 1.5rem 0; padding: 1rem; border: 1px solid #bbb; border-radius: 6px; }
		legend { font-weight: bold; }
		select { display: block; width: 100%; max-width: 100%; margin-top: .5rem; padding: .5rem; }
		.aviso { font-weight: bold; }
		.lista-escolas { margin: .4rem 0 1rem 1.5rem; }
		button { padding: .65rem 1rem; cursor: pointer; }
	</style>
</head>
<body>
	<main>
		<h1>Dados da inscrição</h1>
		<form action="" method="post">
			<fieldset>
				<legend>Cargo</legend>
				<label for="cargo">Selecione o cargo pretendido:</label>
				<select id="cargo" name="cargo" required>
					<option value="">Selecione</option>
					<option value="Professor de Educação Básica - Séries Iniciais / Finais">Professor de Educação Básica - Séries Iniciais / Finais</option>
					<option value="Especialista de Educação Básica">Especialista de Educação Básica</option>
					<option value="Analista de Educação Básica">Analista de Educação Básica</option>
				</select>
				<p class="aviso">Nível de escolaridade: Nível Superior</p>
			</fieldset>

			<fieldset>
				<legend>Zona Pretendida</legend>
				<div>
					<label><input type="radio" name="zona" value="urbana" required> Urbana</label>
					<p class="lista-escolas">E.M. PADRE SEBASTIÃO TIRINO, ESCOLA ESPECIAL TITA GUIMARÃES E.M. PRES. EURICO GASPAR DUTRA, E.M. ROSALINA ALVES NOGUEIRA, E.M. AUGUSTA AZEREDO, E.M. GERALDO DOS SANTOS, E.M. JOSÉ RODRIGUES DA SILVA, E.M. PROFª MARITA DIAS, E.M. PROFª TINÁ COSTA E.M. MARIA CÉLIA DE FREITAS, E.M. EDITH DE ASSIS COSTA, E.M. PROFª ELZA SOARES, E.M. CONSTRUTOR JOAQUIM BORGES, E.M. MARIA COSTA PINTO, E.M. PROFª MARIA APARECIDA BATISTA, E.M. VER. GERALDO ALVES FEITOZA, E.M. CASTANHEIRAS, E.M. GERSON MANOEL DOS ANJOS, E.M. GERALDA DIAS DE ASSUNÇÃO, E.M ADÃO DE FÁTIMA PEREIRA, C.E.I. NANCY GODDARD BORGES, C.E.I. GENERAL CARNEIRO, C.E.I. IRMÃOS SANTOS BRAZ, C.E.I. LUIZ GOMES DE ASSIS, C.E.I. SR. ANTÔNIO LUETTE, C.E.I. ADMILSON PERDIGÃO, C.E.I. MARIO DE LIMA GUERRA, C.E.I. LAR DE MARIA, CASA DA CRIANÇA PROFESSOR SIQUEIRA, E.M. GABRIELA LEITE ARAÚJO, E.M. JULES PAULY, E.M. ANÍBAL MACHADO, E.M. VEREADOR JOSÉ LOPES, C.E.I. ANÍBAL MACHADO (REGINA DUMBÁ), C.E.I. MISSÃO DE MISERICÓRDIA, E.M. SANTOS DUMONT, E.M. BERNARDINO AUGUSTO FERREIRA, E.M. PROFª IRENE PINTO, C.E.I. DONA ARMINDA BARBOSA DE AMORIM, C.E.I. PINGO DE GENTE.</p>
				</div>
				<div>
					<label><input type="radio" name="zona" value="rural"> Rural</label>
					<p class="lista-escolas">E.M. ORDÁLIA FERREIRA CAMPOS, E.M. OROZIMBO VAZ DE A. COSTA E.M. AFONSO MARIA DA SILVA, CEI D. MARIA DAS DORES R PINTO</p>
				</div>
			</fieldset>

			,<!-- butão para chamar o proximo passo no arquivo cadastro_ia.php -->
            <button type="submit">Próximo Passo</button>
			<!-- botão para voltar a página anterior -->
			<button type="button" onclick="history.back()">Voltar</button>

		</form>
	</main>
</body>
</html>
