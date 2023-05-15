<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2'; ?>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Campus</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Campus</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/campus/salvarCampus.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-8">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome" required>
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idcep">CEP</label>
                    <input class="form-control" type="number" name="cep" id="idcep" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-md-4">
                    <label class="form-label" for="idrua">Rua</label>
                    <input class="form-control" type="text" name="rua" id="idrua" required>
                </div>
                <div class="col col-md-4">
                    <label class="form-label" for="idbairro">Bairro</label>
                    <input class="form-control" type="text" name="bairro" id="idbairro" required>
                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idcidade">Cidade</label>
                    <input class="form-control" type="text" name="cidade" id="idcidade" required>
                </div>
                <div class="col col-md-1">
                    <label class="form-label" for="iduf">UF</label>
                    <input class="form-control" type="text" name="uf" id="iduf" required>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar" required>
        </form>
    </div>
    <div>
        <p>

        </p>
    </div>
    <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="../../arquivos/imagens/ENC.png" class="w-100" alt="Logotipo do edital Elas na Ciência">
        </div>
    <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">Elas na Ciência IFMS</h5>
            <p>
                Edital Nº 029/2023 - Propi/MS
            </p>
            <p>
                Este Edital dispõe sobre a seleção de propostas para a participação de meninas e mulheres, 
                estudantes do Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul (IFMS), 
                em pesquisas científicas.
            </p>
            <p>
                <a class="btn btn-primary" href="/projetoWeb2/index.php">Home</a>
                <a href="https://selecao.ifms.edu.br/perfil/outras/edital-no-029-2023-propi-ms" class="btn btn-primary">Central de Seleção</a>
            </p>
    </div>
</div>
</div>
</body>

</html>