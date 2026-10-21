<?php
// Confirmação de inscrição no processo seletivo.
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#145a40">
    <title>Inscrição confirmada | Prefeitura de Sabará</title>
    <style>
        * { box-sizing: border-box; }
        body {
            min-height: 100vh;
            margin: 0;
            padding: 24px;
            display: grid;
            place-items: center;
            background: #f2f6f3;
            color: #26352e;
            font-family: Arial, Helvetica, sans-serif;
        }
        main {
            width: min(100%, 620px);
            padding: 44px 36px;
            text-align: center;
            background: #fff;
            border: 1px solid #e0e9e3;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(24, 69, 47, .08);
        }
        .check {
            width: 72px;
            height: 72px;
            margin: 0 auto 22px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #e8f4ec;
            color: #145a40;
            font-size: 38px;
            font-weight: bold;
        }
        .instituicao {
            margin: 0 0 12px;
            color: #145a40;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: .04em;
            text-transform: uppercase;
        }
        h1 { margin: 0 0 16px; font-size: clamp(26px, 5vw, 34px); }
        .mensagem {
            margin: 0 auto 24px;
            max-width: 480px;
            color: #56665d;
            font-size: 17px;
            line-height: 1.6;
        }
        .orientacao {
            margin: 0 0 24px;
            padding: 15px 18px;
            border-left: 4px solid #145a40;
            border-radius: 5px;
            background: #f4f8f5;
            color: #34463b;
            font-size: 15px;
            line-height: 1.55;
            text-align: left;
        }
        footer { color: #68776e; font-size: 13px; line-height: 1.5; }
        @media (max-width: 480px) { main { padding: 34px 22px; } }
    </style>
</head>
<body>
    <main>
        <div class="check" aria-hidden="true">✓</div>
        <p class="instituicao">Prefeitura Municipal de Sabará</p>
        <h1>Cadastro realizado com sucesso!</h1>
        <p class="mensagem">
            Sua inscrição no processo seletivo da Secretaria Municipal de Educação
            foi recebida.
        </p>
        <p class="orientacao">
            Acompanhe as próximas etapas, os prazos e as publicações nos canais
            oficiais da Prefeitura. 
        </p>
        <footer>Secretaria Municipal de Educação<br>Prefeitura Municipal de Sabará</footer>
        <!-- botão para voltar à página inicial -->
        <form action="index.php" method="get">
            <button type="submit">Voltar à página inicial</button>
        </form>
    </main>
</body>
</html>