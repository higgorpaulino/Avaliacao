<!DOCTYPE html>
<html lang="pt-BR">    
    <head>
    <title>PneuCar Centro Automotivo - HOME</title>
    <meta charset="utf-8">
    <meta name="author" content="Higgor S Paulino">
        <meta name="description" content="Home do site PneuCar Centro Automotivo.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header class="row bg-primary bg-gradient justify-content-center">
            <img src="images/logocborda.png" width="180" height="180" alt="Logo PneuCar">
            <nav class="navbar navbar-expand-sm col-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <img src="images/menuIcon.png" width="30" height="30" alt="Ícone de menu">
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-light" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="sobre.html">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="servicos.html">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="produtos.html">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="contato.html">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="images/grandepromocao.png" class="img-promocao" alt="Grande promoção!">
                    <img src="images/promocaopneu.png" class="img-fluid" alt="Promoção de pneu: Pneu 165/70R13 Goodyear Edge Touring por R$ 389,00">
                </div>

                <h2><i><br/>|Últimas notícias</i></h2>
                <br/>
                <div class="row justify-content-center"> 
                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="images/instagram1.png" alt="Imagem de um carro sendo alinhado na máquina 3D">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Alinhamento 3D</h5>
                                <p>O alinhamento 3D é um equipamento que utiliza câmeras e <a href="https://www.instagram.com/p/Cb0goeLtTmK/" target="_blank">[leia mais]</a></p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/instagram2.png" alt="Imagem de uma saveiro com a suspensão elevada e um calço de nylon no canto inferior esquerdo">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Calço para erguer suspensão</h5>
                                <p>Pensando em erguer sua pickup? Vem para a PneuCar! <a href="https://www.instagram.com/p/CbxHb_QtDYH/" target="_blank">[leia mais]</a></p>
                            </div>
                        </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/instagram3.png" alt="Mecânico realizando verificação em uma suspensão de automóvel com a legenda: Serviço de verificação do sistema de segurança">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Verficando sua segurança</h5>
                                <p>Você pode confiar na PneuCar para diagnosticar e reparar problemas com os sistemas de segurança <a href="https://www.instagram.com/p/Cbu0mFnNZ_y/" target="_blank">[leia mais]</a></p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Próximo</span>
                        </a>
                    </div>                    
                </div>
            </div>
        </div>

        <footer class="row bg-primary bg-gradient">
            <div class="col-12">
                <p>Copyright© 2022 - PneuCar Centro Automotivo - Todos os direitos reservados</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <noscript>Atualize seu navegador</noscript>
    </body>
</html>