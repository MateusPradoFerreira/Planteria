<?php
include('conection.php');

if (!isset($_GET['busca'])) {

    $DadosRcebidos = "select *  from plantas order by nomePessoal";
} else {
    $pesquisa = $_GET['busca'];
    $DadosRcebidos = "select * from plantas where nomePessoal like '%$pesquisa%' or nomeCientifico like '%$pesquisa%' order by nomePessoal";
}

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
    <div class="tracejado"></div>
    <section class="catalogo">
        <div class="row">
            <div class="col-12">
                <h2>CATALAGO COMPLETO</h2><br><br>
            </div>
        </div>

        <form action="">
            <div class="pesquisa">
                <div class="barra">
                    <input value="<?php if (!isset($_GET['busca'])) {
                                    } else {
                                        echo $pesquisa;
                                    }
                                    ?>" name="busca" type="text" placeholder="Buscar Pranta">
                    <button type="submit"><img src="imagens/lupa2.png" alt=""></button>
                </div>
            </div>
        </form>

        <div class="row" id="cardBOX" style="background-color: <?php if (mysqli_num_rows($result_query) == 0) {
                                                                    echo '#26323800';
                                                                } else {
                                                                    echo '#eeeeee';
                                                                } ?> ; border: none; border-radius: 20px">
            <?php

            if (mysqli_num_rows($result_query) > 0) {

                while ($linha = mysqli_fetch_assoc($result_query)) {
            ?>
                    <article class="ccaa">
                        <div class="flip">
                            <div class="front-face">
                                <div class="cards">
                                    <img src="<?= $linha['imagem'] ?>" alt=""><br><br>
                                    <h5 style="margin-bottom: 10px; color: #689f38;">#<?php if ($linha['id'] < 10) {
                                                                        echo '0' . $linha['id'];
                                                                    } else {
                                                                        echo $linha['id'];
                                                                    }
                                                                    ?></h5>
                                    <h5><?= $linha['nomePessoal'] ?></h5>
                                    <i>
                                        <p style="margin-top: 10px; font-size: 11px"><?= $linha['nomeCientifico'] ?></p>
                                    </i>
                                    <br><br><br>
                                </div>
                            </div>
                            <div class="back-face">
                                <div class="cardss">
                                    <br>
                                    <h4 style="text-align: center; color: #689f38;">#<?php if ($linha['id'] < 10) {
                                                                                            echo '0' . $linha['id'];
                                                                                        } else {
                                                                                            echo $linha['id'];
                                                                                        }
                                                                                        ?></h4>
                                    <h4 style="text-align: center; margin: 0;"><?= $linha['nomePessoal'] ?></h4>
                                    <h6 style="text-align: center; margin: 0; margin-top:5px"><i><?= $linha['nomeCientifico'] ?></i></h6>
                                    <p style=" font-size: 11px; text-align: center">Família - <?= $linha['Família'] ?></p>

                                    <p style="font-size: 10px; text-align:center; padding: 0px 30px; height:140px"><?= $linha['Descr'] ?></p>
                                    </p>

                                    <div style="display: flex; width: 100%; background-color: #43a047; justify-content: center; height: 120px">
                                        <div style="width: 33%;">
                                            <div style=" display:flex; justify-content: center; align-items: center; background-color: white; width: 40px; height: 40px; border: none; border-radius:20px; padding-left: 2px;  margin-left: 20px; margin-top:15px">
                                                <p style="margin: 0; padding: 0; font-size:20px;">&#127793</p>
                                            </div>
                                            <p style="text-align: center; font-size:10px; padding: 0; margin: 0; color: white; margin-top: 10px; margin-bottom: 10px;"><?= $linha['Clima'] ?></p>
                                        </div>
                                        <div style="width: 34%; background-color: #009688;">
                                            <div style=" display:flex; justify-content: center; align-items: center; background-color: white; width: 40px; height: 40px; border: none; border-radius:20px; padding-left: 2px; margin-left: 23px; margin-top:15px">
                                                <p style="margin: 0; padding: 0; font-size:20px;">&#127759</p>
                                            </div>
                                            <p style="text-align: center; font-size:10px; padding: 0; margin: 0; color: white; margin-top: 10px; margin-bottom: 10px;"><?= $linha['Origem'] ?></p>
                                        </div>
                                        <div style="width: 33%; margin-left: 0; background-color: <?php if ($linha['Luminosidade'] == 'Noturna') {
                                                                                                        echo '#4a148c';
                                                                                                    } elseif ($linha['Luminosidade'] == 'Sol Forte') {
                                                                                                        echo '#fbc02d';
                                                                                                    } else {
                                                                                                        echo '#fb8c00';
                                                                                                    }
                                                                                                    ?>">
                                            <div style=" display:flex; justify-content: center; align-items: center; background-color: white; width: 40px; height: 40px; border: none; border-radius:20px; padding-left: 2px;  margin-left: 20px; margin-top:15px">
                                                <p style="margin: 0; padding: 0; font-size:20px;"><?php if ($linha['Luminosidade'] == 'Noturna') {
                                                                                                        echo '&#127770';
                                                                                                    } else {
                                                                                                        echo '&#127774';
                                                                                                    }
                                                                                                    ?></p>
                                            </div>
                                            <p style="text-align: center; font-size:10px; padding: 0; margin: 0; color: white; margin-top: 10px; margin-bottom: 10px;"><?= $linha['Luminosidade'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </article>

                <?php
                }
            } else {
                ?>

                <div style="background-color: #c62828; color: white; font-weight: 600; letter-spacing: 3px; padding: 15px 70px; border: none; border-radius: 10px;">
                    <h4 style="letter-spacing: 3px; margin: 0;">Nenhuma planta encontrada!!</h4>
                </div>

            <?php
            }
            ?>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>