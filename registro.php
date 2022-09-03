<?php
include('conection.php');

$nr = "select * from plantas";
$result_nr = mysqli_query($conexaoSQL, $nr);

if (!isset($_POST['cadastar'])) {
} else {
    $nomeP = $_POST['nmP'];
    $nomeC = $_POST['nmC'];
    $imagem = $_POST['imagem'];
    $familia = $_POST['familia'];
    $Clima = $_POST['Clima'];
    $Origem = $_POST['origem'];
    $Lux = $_POST['Luz'];
    $desc = $_POST['desc'];


    $DadosEnviados = "INSERT INTO plantas (nomePessoal, nomeCientifico, imagem, Família ,Clima ,Origem , Luminosidade, Descr) 
    VALUES ('$nomeP', '$nomeC', '$imagem', '$familia', '$Clima', '$Origem', '$Lux', '$desc')";
    mysqli_query($conexaoSQL, $DadosEnviados);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-image: url(https://img.freepik.com/vetores-gratis/fundo-de-folhas-verdes-tropicais_52683-37117.jpg?w=2000);">

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-2" style="padding-right: 0;">
                <section class="bbbb">
                    <a href="index.php"><button style="background-color: #fafafa; border: none; color:#689f38; margin-top: 585px;font-size: 12px; height: 50px; width: 100%; font-weight: 700; letter-spacing: 2px; border-radius: 10px 0px 0px 10px"><b>VOLTAR</b></button></a>
                </section>
            </div>
            <div class="col-6" style="background-color: #fafafa; height: 695px; padding:60px">
                <h2 style=" font-weight: 700; text-align: center; letter-spacing: 2px; margin-top:10px">CADASTRAR PLANTA</h2>
                <div style="display: flex; justify-content:center">
                    <p style="font-size: 12px; text-align: right">Esta será a planta de número</p>
                    <p style="font-size: 12px; text-align: left; color: #689f38; margin-left: 5px;">#<?php if (mysqli_num_rows($result_nr) < 10) {
                                                                                                            echo '0' . mysqli_num_rows($result_nr) + 1;
                                                                                                        } else {
                                                                                                            echo mysqli_num_rows($result_nr) + 1;
                                                                                                        } ?></p>
                </div>

                <form action="" method="POST">
                    <div class="row" style="padding: 0px 50px;">
                        <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-top: 10px">Nome pessoal</p>
                        <input style="font-size: 10px; height: 30px; width: 100%; border: 1px solid #bdbdbd; border-radius:10px; padding-left: 15px;" type="text" placeholder="Nome Pessoal" name="nmP" maxlength="45" required>
                    </div>
                    <div class="row" style="padding: 0px 50px;">
                        <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-top: 10px">Nome Cientifico</p>
                        <input style="font-size: 10px; height: 30px; width: 100%; border: 1px solid #bdbdbd; border-radius:10px; padding-left: 15px;" type="text" placeholder="Nome Cientidico" name="nmC" maxlength="45" required>
                    </div>
                    <div class="row" style="padding: 0px 50px;">
                        <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-top: 10px">Link da Imagem</p>
                        <input style="font-size: 10px; height: 30px; width: 100%; border: 1px solid #bdbdbd; border-radius:10px; padding-left: 15px;" type="text" placeholder="Link da Imagem" name="imagem" maxlength="500" required>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class=" row" style="padding: 0px 50px;">
                                <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-top: 10px">Familia</p>
                                <input style="font-size: 10px; height: 30px; width: 100%; border: 1px solid #bdbdbd; border-radius:10px; padding-left: 15px" type="text" placeholder="familia" name="familia" maxlength="45" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-left:-30px; margin-top: 10px">Clima</p>
                            <select name="Clima" id="" style="font-size: 10px; height: 30px; width: 100%; border: 1px solid #bdbdbd; padding:5px; padding-left: 15px; border-radius:10px; margin-left:-35px">
                                <option value="">Indeterminada</option>
                                <option value="">Equatorial</option>
                                <option value="">Tropical</option>
                                <option value="">Subtropical</option>
                                <option value="">Desértico</option>
                                <option value="">Temperado</option>
                                <option value="">Mediterrâneo</option>
                                <option value="">Semi-Árido</option>
                                <option value="">Continental-Árido</option>
                                <option value="">Fio da Montanha</option>
                                <option value="">Polar</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 55px">
                        <div class="col-6">
                            <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-left:-30px; margin-top: 10px">Local Predominante</p>
                            <select name="origem" id="" style="font-size: 10px; height: 30px; width: 102.7%; border: 1px solid #bdbdbd; padding:5px; padding-left: 15px; border-radius:10px; margin-left:-35px">
                                <option value="">Indeterminada</option>
                                <option value="">América do Norte</option>
                                <option value="">América do Sul</option>
                                <option value="">América Central</option>
                                <option value="">Caribe</option>
                                <option value="">Ásia Central</option>
                                <option value="">Ásia do Sul</option>
                                <option value="">Nordeste da Ásia</option>
                                <option value="">Sudeste Asiático</option>
                                <option value="">Austrália</option>
                                <option value="">Oceania</option>
                                <option value="">Europa do Norte</option>
                                <option value="">Europa do Sul</option>
                                <option value="">Europa Oriental</option>
                                <option value="">Europa Ocidental</option>
                                <option value="">Oriente Médio</option>
                                <option value="">Norte da África</option>
                                <option value="">África Austral</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-left:-25px; margin-top: 10px">Luminozidade</p>
                            <select name="Luz" id="" style="font-size: 10px; height: 30px; width: 97%; border: 1px solid #bdbdbd; padding:5px; padding-left: 15px; border-radius:10px; margin-left:-30px">
                                <option value="">Sol Pleno</option>
                                <option value="">Sol Forte</option>
                                <option value="">Noturna</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" style="padding: 0px 50px;">
                        <p style="font-size: 11px; font-weight: 650; letter-spacing: 1px; margin: 5px; margin-top: 10px">Descrição</p>
                        <textarea style="font-size: 10px; width: 100%; border: 1px solid #bdbdbd; border-radius:10px; padding: 15px; resize: none" name="desc" rows="4" cols="40" maxlength="500"> </textarea>
                    </div>

                    <div class="row" style="padding: 0px 50px;">
                        <button type="submit" name='cadastar' style="width: 100%; font-size: 11px; letter-spacing: 2px;background-color: #689f38; color: #fff; height: 30px;; margin-top: 15px; border: none; border-radius:10px"><b>CADASTAR</b></button>
                    </div>

                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>