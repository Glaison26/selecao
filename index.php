<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Processo Seletivo | Educação de Sabará</title>
	<style>
		:root { --azul: #123b5d; --azul-claro: #1d5d88; --dourado: #f0b64b; --texto: #183044; }
		* { box-sizing: border-box; }
		body { margin: 0; min-height: 100vh; font-family: Arial, Helvetica, sans-serif; color: var(--texto); background: #f2f6f8; }
		header { padding: 17px 24px; background: var(--azul); color: #fff; }
		.cabecalho, main, footer { width: min(1080px, calc(100% - 40px)); margin: 0 auto; }
		.cabecalho { display: flex; align-items: center; gap: 13px; }
		.brasao { display: grid; place-items: center; width: 43px; height: 43px; border: 2px solid #fff; border-radius: 50%; color: var(--dourado); font-size: 22px; font-weight: 700; }
		.cabecalho strong { display: block; font-size: 15px; letter-spacing: .04em; }
		.cabecalho span { display: block; margin-top: 4px; color: #d7e5ee; font-size: 12px; }
		main { padding: 58px 0 46px; }
		.destaque { padding: clamp(32px, 7vw, 70px); border-radius: 18px; background: linear-gradient(120deg, var(--azul), var(--azul-claro)); color: #fff; box-shadow: 0 18px 45px #123b5d29; }
		.categoria { margin: 0 0 15px; color: #f7ca73; font-size: 12px; font-weight: 700; letter-spacing: .13em; text-transform: uppercase; }
		h1 { max-width: 680px; margin: 0; font-size: clamp(32px, 5vw, 52px); line-height: 1.12; }
		.introducao { max-width: 620px; margin: 20px 0 29px; color: #e1edf4; font-size: 17px; line-height: 1.65; }
		.botao { display: inline-flex; min-height: 52px; align-items: center; justify-content: center; gap: 10px; padding: 0 23px; border-radius: 8px; background: var(--dourado); color: #183044; font-size: 16px; font-weight: 700; text-decoration: none; transition: background .18s ease, transform .18s ease; }
		.botao:hover { background: #ffd071; transform: translateY(-1px); }
		.botao:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
		.informacoes { display: grid; grid-template-columns: 1.1fr .9fr; gap: 24px; margin-top: 25px; }
		.cartao { padding: 27px 29px; border: 1px solid #e3eaee; border-radius: 13px; background: #fff; }
		.cartao.aviso { border-left: 4px solid var(--dourado); }
		h2 { margin: 0 0 12px; color: var(--azul); font-size: 19px; }
		.cartao p { margin: 0; color: #5d7180; font-size: 15px; line-height: 1.65; }
		footer { padding: 0 0 25px; color: #5d7180; font-size: 12px; text-align: center; }
		@media (max-width: 680px) { main { padding-top: 30px; } .informacoes { grid-template-columns: 1fr; gap: 14px; } .destaque { border-radius: 13px; } .botao { width: 100%; } }
	</style>
</head>
<body>
	<header>
		<div class="cabecalho">
			<div class="brasao" aria-hidden="true">S</div>
			<div><strong>PREFEITURA MUNICIPAL DE SABARÁ</strong><span>Secretaria Municipal de Educação</span></div>
		</div>
	</header>
	<main>
		<section class="destaque" aria-labelledby="titulo">
			<p class="categoria">Secretaria Municipal de Educação</p>
			<h1 id="titulo">Processo Seletivo</h1>
			<p class="introducao">Bem-vindo(a) à página de inscrição do processo seletivo da Secretaria Municipal de Educação da Prefeitura Municipal de Sabará.</p>
			<a class="botao" href="cadastro.php">Iniciar cadastro <span aria-hidden="true">→</span></a>
		</section>
		<section class="informacoes" aria-label="Informações sobre o processo seletivo">
			<article class="cartao">
				<h2>Inscreva-se</h2>
				<p>Clique em “Iniciar cadastro” para acessar o formulário de inscrição. Preencha os dados solicitados com atenção.</p>
			</article>
			<article class="cartao aviso">
				<h2>Antes de começar</h2>
				<p>Consulte o edital para verificar requisitos, prazos e orientações. As informações oficiais do processo devem ser consideradas para sua inscrição.</p>
			</article>
		</section>
	</main>
	<footer>Prefeitura Municipal de Sabará · Secretaria Municipal de Educação</footer>
</body>
</html>
