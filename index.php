<?php
include('conection.php');

$DadosRcebidos = "select *  from plantas order by nomePessoal";
$result_query = mysqli_query($conexaoSQL, $DadosRcebidos);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="aa">

    <section class="bb">
        <div class="row">
            <div class="col-2">
                <img class="logo" src="imagens/design-de-logotipo-moderno-para-plantas-de-jardim_269830-837.webp" alt="">
            </div>
            <div class="col-6">
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="catalogo.php">CATÁLOGO</a></li>
                        <li><a href="editar.php">EDITAR</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="bb">
        <div class="row">
            <div class="col-6"><br><br>
                <h1>Gardening.</h1>
                <h3>um incrivel repositório de prantas</h3>
                <p>A melhor atividade de registro de plantas <br> que a senhora vai ve nessa internet</p>
                <a href="registro.php"><button class="bnn">CADASTAR</button></a><br><br><br>

                <div class="row">
                    <div class="col-3">
                        <h3 class="jj">35+</h3>
                        <p class="dec">Plantas Registradas</p>
                    </div>
                    <div class="col-3">
                        <h3 class="jj">700+</h3>
                        <p class="dec">Usuarios</p>
                    </div>
                    <div class="col-3">
                        <h3 class="jj">23+</h3>
                        <p class="dec">Regiões</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img class="pranta" style="margin-top: -60px;" src="imagens/planta.png" alt="">
            </div>
        </div>
    </section>

    <div class="tracejado"></div>

    <section class="ann">

        <div class="text-ann"><br><br></br>
            <h3>.. GARDENING ..</h3><br>
            <p>Este site é só pra mostra as plantas da prosora Andréia... </p>
            <p>mais nada, por isso estou colacando estes textos por pura decoração... atoa</p>
            <p>é so pra dize que tem alguma coisa aqui.</p><br><br>
            <a href="registro.php"><button class="bnn-def-ann"> Cadastre uma Planta <3</button></a>
        </div>

    </section>

    <div class="tracejado"></div>

    <section class="catalogo">
        <div class="row">
            <div class="col-12"><br><br>
                <h2>ALGUNS EXEMPlARES</h2><br>
            </div>
        </div>

        <div class="row" id="cardBOX">
            <?php

            if (mysqli_num_rows($result_query) > 0) {


                while ($linha = mysqli_fetch_assoc($result_query)) {
            ?>
                    <div class="cardsPB">
                        <img src="<?= $linha['imagem'] ?>" alt=""><br><br>
                        <h5><?= $linha['nomePessoal'] ?></h5>
                        <i>
                            <p style="margin-top: 5px; font-size: 11px"><?= $linha['nomeCientifico'] ?></p>
                        </i>
                    </div>
            <?php

                }
            }
            ?>
        </div>

    </section>

    <section class="bbbb">
        <a href="catalogo.php"><button class="bnn-def-ann-dd">CONFIRA O CATALOGO COMPLETO</button></a>
    </section>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>