<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuste de Vagas no IC</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/subjects.css">
    <link rel="stylesheet" href="assets/css/tentativa.css">
</head>
<body>
    <img src="assets/src/logo-ic.png"  width="150" height="150" id="logo_ic">
    <nav class="nav">
        <div>
            <p id="ajustes_name">AJUSTES IC</p>
        </div>
    </nav>
    <br>
    <br>
    <button class="btn_add_disc" type="button" onclick="location.href='../admins/add_discipline.html'">
        <img src="assets/src/plus.png" width="50" height="50">
        <p>Adicionar disciplina</p>
    </button>
    <button class="btn_add_disc" type="" onclick="location.href='../index.html'">
        <p>Lançar oferta de ajuste</p>
    </button>
    <button class="btn_add_disc" type="button" onclick="location.href='../admins/disciplines.html'">
        <p>Encerrar oferta e gerar PDF das solicitações de ajuste</p>
    <button class="btn_add_disc" type="button" onclick="location.href='../index.html'">
        <p>Sair</p>
    </button>
    <br>
    <br>
    <fieldset>
        <p style="color:green"><strong>Status do sistema (SAPAV): Em oferta</strong></p>
    </fieldset>

    <!--DIV das disciplinas-->
    <section class="main_section">
        <strong>DISCIPLINAS OFERTADAS</strong>
        <div class="barra">
            <div class="text_disc">Disciplinas</div>
            <div class="right_camp">
                <div class="n_vagas">Código</div>
                <div class="n_vagas">Horário</div>
                <div class="n_vagas">Vagas</div>
                <div class="btn_add_mat">Excluir matéria</div>
            </div>
        </div>

        <div class="barra_disc">
            <div class="text_disc">Programação 3</div>
            <div class="right_camp">
                <div class="n_vagas">COMP150</div>
                <div class="n_vagas">15:20-17:00</div>
                <div class="n_vagas">50</div>
                <div class="btn_add_mat">
                    <button type="submit" onclick="location.href='confirm.html'"><img src="assets/src/minus_red.png" width="30" height="30"></button>
                </div>
            </div>
        </div>

        <div class="barra_disc">
            <div class="text_disc">Computação, Sociedade e Ética</div>
            <div class="right_camp">
                <div class="n_vagas">COMP150</div>
                <div class="n_vagas">9:20-11:00</div>
                <div class="n_vagas">50</div>
                <div class="btn_add_mat">
                    <button type="submit" onclick="location.href='confirm.html'"><img src="assets/src/minus_red.png" width="30" height="30"></button>
                </div>
            </div>
        </div>
    <!-- <button id="btn"> <p id="text_confirmar">Confirmar</p id="text_confirmar"></button> -->
    </section>     
  
</body>
</html>
