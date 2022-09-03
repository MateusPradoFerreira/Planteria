<?php
include('conection.php');

$DadosRcebidos = "select *  from plantas order by nomePessoal";
$result = mysqli_query($conexaoSQL, $DadosRcebidos);

if (!isset($_POST['excluir'])) {
} else {
    $idEX = $_POST['exID'];

    $DadosExcluidos = "delete from plantas where id = '$idEX'";
    mysqli_query($conexaoSQL, $DadosExcluidos);
    header("Refresh: 0");
}

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

<body>
    <div class="container">
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center">
            <a href="index.php">voltar</a>
        </div>

        <div class="row" style="display: flex; justify-content: center">
            <?php



            if (mysqli_num_rows($result) > 0) {
                while ($linha = mysqli_fetch_assoc($result)) {
            ?>

                    <div class="caddd" style="background-color: #e0e0e0; margin: 15px">
                        <img class="ttp" src="<?= $linha['imagem'] ?>" alt="">
                        <h6 style="margin-top: 10px; font-weight: 650;;"><?= $linha['nomePessoal'] ?></h6>
                        <i><p><?= $linha['nomeCientifico'] ?></p></i>

                        <div class="parapra">
                            <p><?= $linha['Família'] ?></p>
                        </div>
                        <div class="parapra" style="background-color:#00acc1 ;">
                            <p><?= $linha['Clima'] ?></p>
                        </div>
                        <div class="parapra" style="background-color: #00796b;">
                            <p><?= $linha['Origem'] ?></p>
                        </div>
                        <div class="parapra" style="background-color:#7b1fa2">
                            <p><?= $linha['Luminosidade'] ?></p>
                        </div> <br>

                        <div class="ff" style="display: flex; justify-content: center">
                            <form action=""><button class="ds" name="editar" type="submit">editar</button>
                                <input name="edID" style="visibility: hidden;" type="text" value="<?= $linha['id'] ?>">
                            </form>

                            <form action="" method="post"><button name="excluir" type="submit">excluir</button>
                                <input name="exID" style="visibility: hidden;" type="text" value="<?= $linha['id'] ?>">
                            </form>
                        </div>

                        <br>

                    </div>

            <?php

                }
            }
            ?>
        </div>
    </div>



    <style>
        th {
            padding: 10px;
            overflow: hidden;
            color: black;
            font-size: 11px;
            border: none;
            border-radius: 5px;
        }

        input {
            width: 0px;
            height: 0px;
            margin: 0;
            padding: 0;
        }

        tr {
            width: 100%;
            text-align: center;
        }

        .ttp {
            max-width: 300px;
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        button {
            width: 130px;
            color: white;
            border: none;
            border-radius: 5px;
            margin: 0;
            padding: 5px 30px;
            background-color: #c62828;
            margin: 0;
            font-size: 11px;
        }

        body {
            display: flex;
            justify-content: center;
        }

        .ds {
            background-color: #ffa000;
        }

        .caddd {
            width: 300px;
            text-align: center;
            border: none;
            border-radius: 10px;
        }

        .parapra {
            background-color: #fff;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            text-align: center;
            width: 310px;
            margin-left: -5px;
            background-color: #7cb342;
            padding-top: 5px;
            padding-bottom: 5px;
            height: 30px;
        }

        .parapra p {
            text-align: center;
            color: white;
            letter-spacing: 1px;
            font-weight: 650;
        }

        a {
            margin: 40px 0;
            width: 200px;
            text-decoration: none;
            color: white;
            background-color: #7cb342;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }
    </style>

</body>

</html>