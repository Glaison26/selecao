<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de candidatura</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 24px;
            font-family: Arial, sans-serif;
            color: #243047;
            background: #f3f6fa;
        }

        main {
            max-width: 850px;
            margin: 0 auto;
        }

        h1 {
            margin: 0 0 20px;
            color: #173b67;
        }

        fieldset {
            margin: 0 0 20px;
            padding: 22px;
            border: 1px solid #d3dce8;
            border-radius: 8px;
            background: #fff;
        }

        legend {
            padding: 0 8px;
            color: #173b67;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label,
        .group-title {
            font-weight: 600;
        }

        input,
        select {
            width: 100%;
            min-height: 42px;
            padding: 9px 11px;
            border: 1px solid #aebbd0;
            border-radius: 5px;
            font: inherit;
        }

        input[type="radio"],
        input[type="checkbox"] {
            width: auto;
            min-height: auto;
            margin: 0 8px 0 0;
        }

        .choices {
            display: grid;
            gap: 11px;
            margin-top: 10px;
        }

        .choices label,
        .declaration {
            display: flex;
            align-items: flex-start;
            font-weight: 400;
            line-height: 1.45;
        }

        .choices input,
        .declaration input {
            flex: 0 0 auto;
            margin-top: 3px;
        }

        button {
            padding: 12px 22px;
            border: 0;
            border-radius: 5px;
            color: #fff;
            background: #175da8;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: #124a86;
        }

        @media (max-width: 600px) {
            body {
                padding: 14px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            fieldset {
                padding: 17px;
            }
        }
    </style>
</head>

<body>
    <main>
        <h1>Formulário de candidatura</h1>
        <form method="post" action="">
            <fieldset>
                <legend>Dados pessoais</legend>
                <div class="grid">
                    <div class="field"><label for="email">E-mail</label><input type="email" id="email" name="email" autocomplete="email" required></div>
                    <div class="field"><label for="cpf">CPF</label><input type="text" id="cpf" name="cpf" inputmode="numeric" placeholder="000.000.000-00" required></div>
                    <div class="field full"><label for="nome_completo">Nome completo</label><input type="text" id="nome_completo" name="nome_completo" autocomplete="name" required></div>
                    <div class="field"><label for="rg">RG</label><input type="text" id="rg" name="rg" required></div>
                    <div class="field"><label for="telefone">Telefone</label><input type="tel" id="telefone" name="telefone" autocomplete="tel" required></div>
                    <div class="field full"><label for="endereco">Endereço</label><input type="text" id="endereco" name="endereco" autocomplete="street-address" required></div>


                    <div class="field full">


                        <label for="cargo">Cargo</label>
                        <select id="cargo" name="cargo" required>
                            <option value="" selected disabled>Selecione um cargo</option>
                            <option>Professor de Educação Básica – Séries Iniciais</option>
                            <option>Professor de Educação Básica – Séries Finais - Matemática</option>
                            <option>Professor de Educação Básica – Séries Finais – Letras/Língua Portuguesa</option>
                            <option>Professor de Educação Básica – Séries Finais – Letras / Inglês</option>
                            <option>Professor de Educação Básica – Séries Finais - Educação Física</option>
                            <option>Professor de Educação Básica – Séries Finais – Geografia</option>
                            <option>Professor de Educação Básica – Séries Finais - História</option>
                            <option>Professor de Educação Básica – Séries Finais – Ciências Biológicas</option>
                            <option>Professor de Educação Básica – Séries Finais – Educação Religiosa</option>
                            <option>Professor de Educação Básica – Séries Finais – Artes</option>
                            <option>Professor de Educação Básica – Instrutor de Libras</option>
                            <option>Professor de Educação Básica – Tradutor / Intérprete de Libras</option>
                            <option>Especialista de Educação Básica – Pedagogo</option>
                            <option>Analista de Educação Básica – Assistente Social</option>
                            <option>Analista de Educação Básica – Contador</option>
                            <option>Analista de Educação Básica – Fonoaudiólogo</option>
                            <option>Analista de Educação Básica – Inspetor Escolar</option>
                            <option>Analista de Educação Básica - Nutricionista</option>
                            <option>Analista de Educação Básica – Psicólogo</option>
                        </select>
                    </div>
                    <div class="field"><label for="data_nascimento">Data de nascimento</label><input type="date" id="data_nascimento" name="data_nascimento" required></div>
                </div>
            </fieldset>
            <fieldset>
                <legend>Formalização especializada</legend>
                <div class="group-title">Pós-graduação</div>
                <div class="choices">
                    <label><input type="radio" name="pos_graduacao" value="nenhuma" required> Nenhuma</label>
                    <label><input type="radio" name="pos_graduacao" value="uma"> Uma</label>
                    <label><input type="radio" name="pos_graduacao" value="duas"> Duas</label>
                </div>
                <div class="group-title" style="margin-top:18px">Mestrado</div>
                <div class="choices"><label><input type="radio" name="mestrado" value="sim" required> Sim</label><label><input type="radio" name="mestrado" value="nao"> Não</label></div>
                <div class="group-title" style="margin-top:18px">Doutorado</div>
                <div class="choices"><label><input type="radio" name="doutorado" value="sim" required> Sim</label><label><input type="radio" name="doutorado" value="nao"> Não</label></div>
            </fieldset>
            <fieldset>
                <legend>Seleção da vaga para a qual se candidata</legend>
                <div class="choices">
                    <label><input type="radio" name="modalidade_vaga" value="ampla_concorrencia" required> Ampla concorrência</label>
                    <label><input type="radio" name="modalidade_vaga" value="pretos_pardos"> Vagas reservadas para candidatos autodeclarados pretos/pardos</label>
                    <label><input type="radio" name="modalidade_vaga" value="quilombolas"> Vagas reservadas para candidatos quilombolas</label>
                    <label><input type="radio" name="modalidade_vaga" value="indigenas"> Vagas reservadas para candidatos indígenas</label>
                    <label><input type="radio" name="modalidade_vaga" value="pessoa_com_deficiencia"> Vagas reservadas para pessoas com deficiência</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Experiência profissional</legend>
                <div class="choices">
                    <label><input type="radio" name="experiencia" value="0" required> 0 ponto – Sem experiência</label>
                    <label><input type="radio" name="experiencia" value="2"> 2 pontos – De 1 a 365 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="4"> 4 pontos – De 366 a 730 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="6"> 6 pontos – De 731 a 1.095 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="8"> 8 pontos – De 1.096 a 1.460 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="10"> 10 pontos – De 1.461 a 1.825 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="12"> 12 pontos – De 1.826 a 2.190 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="14"> 14 pontos – De 2.191 a 2.555 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="16"> 16 pontos – De 2.556 a 2.920 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="18"> 18 pontos – De 2.921 a 3.285 dias de experiência</label>
                    <label><input type="radio" name="experiencia" value="20"> 20 pontos – De 3.286 a 3.650 dias de experiência</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Declaração</legend>
                <label class="declaration"><input type="checkbox" name="declaracao_verdadeira" value="1" required> Declaro que as informações prestadas são verdadeiras e serão comprovadas no ato da Convocação, sob pena de eliminação.</label>
            </fieldset>
            <button type="submit">Gravar informações</button>
        </form>
    </main>
</body>

</html>