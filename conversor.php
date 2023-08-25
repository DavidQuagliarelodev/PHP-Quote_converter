<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Conversor2.0</title>
</head>

<body>
    <main>
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-8 col-lg-4 text-center">
                    <h2 class="display-6">Conversor de Moedas 2.0</h2>
                    <?php
                    include('api_bcb.php');
                    $moeda = $_GET["numero_informado"];
                    if ($moeda == null) {
                        $moeda = 0;
                    }
                    $moeda_dolar = floor($moeda / $cotacao);
                    echo "Seus R$ $moeda equivale a <strong>US$$moeda_dolar</strong> " .
                        "Cotação retirada do <strong>Banco Central do Brasil</strong> de US$" . number_format($cotacao, 2);

                    ?>
                    <a href="javascript:history.go(-1)"><input type="submit" value="Voltar" class="btn btn-dark m-2 "></a>
                </div>
            </div>
        </section>
    </main>

</body>

</html>