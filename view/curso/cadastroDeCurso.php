<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/projetoWeb2'; ?>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Curso</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/curso/salvarCurso.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-9">
                    <label class="form-label" for="idnome">Nome do Curso</label>
                    <input class="form-control" type="text" name="nome" id="idnome" required>
                </div>
                <div class="col col-md-3">
                    <label class="form-label" for="idnota">Nota do Curso</label>
                    <input class="form-control" type="number" name="nota" id="idnota" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col col-md-6">
                    <label class="form-label" for="idarea">Área</label>
                    <?php
            try{
                $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2", "root", "");
            }catch(PDOException $e){
                die('aconteceu um erro: ' . $e->getMessage());
            }

            try{
                $sql = "select * from area";
                $resultado = $conexao->query($sql);
                if($resultado->rowCount() > 0){
                    ?>
                    
                    <select class="form-control" name="area" id="idArea">

                    <?php
                    while($linha = $resultado->fetch()){
                       echo "<option value=\"". $linha['idArea'] ."\">". $linha['nomeArera'] ."</option>";
                    }
                    ?>
                    </select>
                    <?php
                }
            }catch(PDOException $e){
                die('aconteceu um erro: ' . $e->getMessage());
            }
            ?>
                </div>
                <div class="col col-md-6">
                    <label class="form-label" for="idcampus">Campus</label>
                    <?php
                        try{
                            $sql = "select * from campus";
                            $resultado = $conexao->query($sql);
                            if($resultado->rowCount() > 0){
                                ?>
                                
                                <select class="form-control" name="campus" id="idCampus">
            
                                <?php
                                while($linha = $resultado->fetch()){
                                   echo "<option value=\"". $linha['idCampus'] ."\">". $linha['nomeCampus'] ."</option>";
                                }
                                ?>
                                </select>
                                <?php
                            }
                        }catch(PDOException $e){
                            die('aconteceu um erro: ' . $e->getMessage());
                        }
                    ?>
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
            <img src="../../arquivos/imagens/CTSP.png" class="w-100" alt="Logotipo do edital de Curso Técnico Subsequentes e Proeja">
        </div>
    <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">Curso Técnico Subsequentes e Proeja</h5>
            <p>
                Edital 070/2022 - Subsequente 2023 Semestre 1 e 2
            </p>
            <p>
                Processo seletivo para o 1° e 2º semestres do ano letivo de 2023 dos 
                Cursos de Educação Profissional Técnica de Nível Médio Subsequente -Presencial
            </p>
            <p>
                <a class="btn btn-primary" href="/projetoWeb2/index.php">Home</a>
                <a href="https://selecao.ifms.edu.br/perfil/estudantes/edital-070-2022-subsequente-2023-semestre-1-e-2" class="btn btn-primary">Central de Seleção</a>
            </p>
    </div>
</div>
</body>

</html>