<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./menu.php") ?>

    <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Desenvolvimento Web 2</h1>
            <h4>
                Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
                jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
                aplicações completas.
            </h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="https://www.ifms.edu.br"><img src="./arquivos/imagens/marcaifms.png" class="card-img-top" alt="IF"></a>
                    <div class="card-body">
                        <h5 class="card-title">Estudante IFMS</h5>
                        <p class="card-text">
                            O principal diferencial do ensino no IFMS é que a instituição foi criada para desenvolver 
                            de forma especializada a educação profissional e tecnológica, integrando-se os diferentes 
                            níveis às dimensões do trabalho, da ciência e da tecnologia.
                        </p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="IF">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="IF">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt="IF">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="https://ead.ifms.edu.br/"><img src="./arquivos/imagens/moodle1.webp" class="card-img-top" alt="MOODLE"></a>   
                    <div class="card-body">
                        <h5 class="card-title">Moodle</h5>
                        <p class="card-text">
                            Para acessar o nosso Ambiente Virtual de Ensino e Aprendizagem 
                            você pode utilizar o navegador de internet de sua preferência. 
                        </p>
                        <p>
                            Para entrar efetivamente no curso insira o número do seu CPF no campo Identificação 
                            de usuário e sua senha no campo Senha e clique no botão Acessar
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-header px-3 py-3 pb-md-4 mx-auto text-center"></div>
</body>

</html>