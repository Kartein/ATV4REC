<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2'; ?>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Área</title>

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
                <h1>Cadastro de Area</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/area/salvarArea.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-12">
                    <label class="form-label" for="idnome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="idnome" required>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
    </div>
    <div>
        <p>
            
        </p>
    </div>
    <div class="row g-0 bg-body-secondary position-relative">
        <div class="col-md-6 mb-md-0 p-md-4">
            <img src="../../arquivos/imagens/ICT.png" class="w-100" alt="IF">
        </div>
    <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">INICIAÇÃO CIENTÍFICA E TECNOLÓGICA</h5>
            <p>
                Edital nº 028/2023
            </p>
            <p>
                Este Edital dispõe sobre o processo seletivo de projetos de pesquisa e a 
                indicação de estudantes para participação no Programa Institucional de 
                Iniciação Científica e Tecnológica (Pitec) do Instituto Federal de Educação, 
                Ciência e Tecnologia de Mato Grosso do Sul (IFMS) e em Programas Institucionais 
                de Bolsas do Conselho Nacional de Desenvolvimento Científico e Tecnológico, 
                de agosto de 2023 a julho de 2024.
            </p>
            <p>
                <a class="btn btn-primary" href="/projetoWeb2/index.php">Home</a>
                <a href="https://selecao.ifms.edu.br/perfil/outras/iniciacao-cientifica-e-tecnologica-edital-no-028-2023" class="btn btn-primary">Central de Seleção</a>
            </p>
    </div>
</div>
</body>

</html>