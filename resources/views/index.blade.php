<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Austin Portifolio</title>
    <link rel="stylesheet" href="{{asset('/assets/css/estilo.css')}}">
    
</head>
<body>
  <!-- inicio header -->
  <header id="header">
    <div class="row m-0">
      <!-- m-0 tirei a barra de rolagem -->
      <div class="col-3 bgcolor-black " id="canvas">
        <!-- menu de navegacao -->
        <nav class="primary-nav navbar-expand-md">
          <div class="site-titulo text-center text-light py-5">
            <a href="" class="navbar-brand font-staat font-size-40"><span class="button">July</span> Close</a>
            <p class="descricao text-uppercase font-os">Designer de joias</p>
          </div>
          <!--  -->
          <div class="dflex flex column">
              <a href="#home" class="nav-item nav-link text-white font-os font-size-16 active">Home</a>
              <a href="#sobre" class="nav-item nav-link text-white font-os font-size-16 active">Sobre</a>
              <a href="#habilidades" class="nav-item nav-link text-white font-os font-size-16 active">Criação</a>
              <a href="#shop" class="nav-item nav-link text-white font-os font-size-16 active">Shop</a>
              <a href="#time" class="nav-item nav-link text-white font-os font-size-16 active">Equipe</a>
              <a href="#blog" class="nav-item nav-link text-white font-os font-size-16 active">Blog</a>
              <a href="#contacto" class="nav-item nav-link text-white font-os font-size-16 active">Contacto</a>
          </div>
        </nav>
      </div>
    </div>
    <!-- criar o menu hamburguer -->
    <button class="toggle-button"><span class="fas fa-bars fa-2x"></span></button>
    <div class="social">
        <span class="mr-3"><i class="fab fa-facebook-f"></i></span>
        <span class="mr-3"><i class="fab fa-twitter"></i></span>
        <span class="mr-3"><i class="fab fa-instagram"></i></span>
        <span class="mr-3"><i class="fab fa-youtube"></i></span>
    </div>
  </header>
<!-- Fim header -->
  
<!-- inicio da main o conteudo que ao lado do menu -->
<main id="site-main">
  <div class="row m-0">
    <!-- 9grid para o conteudo -->
    <div class="col-md-9 offset-md-3 px-0">
      <section class="site-banner" id="home">
        <div class="banner-area">
            <img src="{{asset('/assets/img/Banner_image.jpg')}}" class="img-fluid mk " alt="Responsive image">
          <div class="author text-center">
            <div class="author-img" >
                <img src="{{asset('/assets/img/joia-logo.png')}}" class="rounded-circle" alt="Responsive image">
            </div>
            <h1 class="text-white font-ize-40 text-uppercase py-3 font">July <span style="color:black;">Close</span></h1>
            <h5 class="text-white font-ram font-size-27"><span id="typed"></span></h5>
          </div>
        </div>
      </section>
<!-- fim section -->
<!-- sobre mim area -->

      <section class="sobre px-4 my-5" id="sobre">
        <div class="eu py-5">
          <h5 class="text-uppercase font-os font-size-16 text-muted">Informações</h5>
          <h1 class="text-uppercase font-staat font-size-34 " id="sobre-mim">Sobre Mim</h1>
        </div>
        <!-- irei criar duas colunas -->
        <div class="row m-0">
          <div >
            <img src="{{asset('/assets/img/joia.jpg')}}" alt="imagem de perfil" class="img-fluid">
          </div>
          <div >
            <h6 class="text-uppercase font-os font-size-16 text-muted">Sobre mim</h6>
            <h5 class="font-ram font-size-20 py-2">Eu Sou <span id="typed_2"></span></h5>
            <p class="font-ram text-black-50 py-2 text-muted">
                A designer de joias e educadora, Lívia Canuto inaugurou recentemente um espaço para apresentar suas criações e também promover eventos e encontros com outros artistas. A ideia é incentivar essa troca de conhecimento e experiências aproximando a arte da joalheira.

Para dar o start nesse projeto, Lívia convidou a artista plástica Adrianna eu, com quem se identifica com a poética, delicadeza e expressão. A quatro mãos, elas farão ( ) Verdadeiro ou ( ) Falso, um coração humano feito com peças que remetem a joalheria e que será instalado na vitrine do espaço. O objetivo da dupla é impactar o espectador e fazê-lo discutir sobre valores e verdades questionáveis – no amor, na arte e na vida.

O lançamento será no dia 03 de maio a partir das 17h. Nesse Encontro, Adrianna também falará sobre seu trabalho e o processo criativo, em um bate papo gostoso e descontraído com Lívia.
            </p>

            <div class="d-flex flex-row flex-wrap justify-content-between py-4">
                <div class="d-flex flex-column">
                   
                    <p class="font-ram"><i class="fad fa-blog"></i><b>Website: </b><span class="text-black-50">www.Juligloss.com</span></p>
                    <p class="font-ram"><i class="fas fa-phone-square-alt button"></i> <b>Phone: </b><span class="text-black-50">+55119999999999</span></p>
                </div>
                <div class="d-flex flex-column">
                    
                    <p class="font-ram"><i class="far fa-envelope button" ></i> <b>E-Mail: </b><span class="text-black-50">JulyClose@gmail.com</span></p>
                    <p class="font-ram"><i class=" button fab fa-instagram " ></i> <b>Instagram: </b><span class="text-black-50">@julyClose</span></p>
                </div>
            </div>
            {{-- os bagulho fica no meio ta ligado --}}
           <div class="d-flex justify-content-center">
            <button class="btn btn-dark text-uppercase mr-3 button" ><i class="fab fa-linkedin"> </i> Linkedin</button>
            <button class="btn btn-dark text-uppercase mr-3" id="button"><a href="/images/myw3schoolsimage.jpg')}}" download>
              <span class="text-white"><i class="fas fa-download"></i> Baixar CV</span>
            </a>

            </button>
           </div>
          </div>
        </div>
      </section>
<!-- meus skills -->

      <section class="skill px-4 py-5 bg-light" id="habilidades">
        <div class="habilidade py-3">
            <h5 class="text-uppercase font-os font-size-16 text-muted">Rotina</h5>
            <h1 class="text-uppercase font-staat font-size-34">Processo de criação</h1>
        </div>
        <div class="row">
          <div class="col-sm-6 pl-4">
              <p class="font-ram font-size-16 text-black-50">
                 A quem se pergunta afinal de contas se um coração é de ouro ou qual o seu valor?

Mas que importância teria isso?

Que coração poderia ser verdadeiramente vendido?

Seria arte?
              </p>
              <p class="font-ram font-size-16 text-black-50">
                 A quem se pergunta afinal de contas se um coração é de ouro ou qual o seu valor?



Seria arte?
              </p>
          </div>
          <div class="col-sm-6 bars">
              <div class="bar-1 mb-4">
                  <div class="d-flex flex-row justify-content-between">
                      <p class="font-ram font-size-16 button">Analise e preparação</p>
                      <span class="font-ram font-size-16 button">80%</span>
                  </div>
                  <div class="progress" style="height: 3px;">
                      <div class="progress-bar bgcolor-black" role="progressbar" style="width:80%"></div>
                  </div>
              </div>
              <div class="bar-1 mb-4">
                  <div class="d-flex flex-row justify-content-between">
                      <p class="font-ram font-size-16 button">Criação</p>
                      <span class="font-ram font-size-16 button">100%</span>
                  </div>
                  <div class="progress" style="height: 3px;">
                      <div class="progress-bar bgcolor-black" role="progressbar" style="width:100%"></div>
                  </div>
              </div>
              <div class="bar-1 mb-4">
                  <div class="d-flex flex-row justify-content-between">
                      <p class="font-ram font-size-16 button">Analise e finalização</p>
                      <span class="font-ram font-size-16 button">35%</span>
                  </div>
                  <div class="progress" style="height: 3px;">
                      <div class="progress-bar bgcolor-black" role="progressbar" style="width:35%"></div>
                  </div>
              </div>
          </div>
        </div>
      </section>

      <!-- work -->
      <section class="work py-5 px-4" id="shop">
        <div class="py-3">
            <h5 class="text-uppercase font-os font-size-16 text-muted">Shop</h5>
            <h1 class="text-uppercase font-staat font-size-34">Compre a sua Joia</h1>
        </div>
        <div class="row">
            <div class="col-sm-4 pb-4">
                <img src="{{asset('/assets/img/ed/01.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
            </div>
            <div class="col-sm-4 pb-4">
                <img src="{{asset('/assets/img/ed/02.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
            </div>
            <div class="col-sm-4 pb-4">
                <img src="{{asset('/assets/img/ed/03.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
            </div>
            <div class="col-sm-4 pb-4">
                <img src="{{asset('/assets/img/ed/04.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
            </div>
            <div class="col-sm-4 pb-4">
                <img src="{{asset('/assets/img/ed/05.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
            </div>
            <div class="col-sm-4 pb-4">
                <img src="{{url('/assets/img/ed/06.jpg')}}" alt="work1" class="img-fluid">
                <h5 class="text-center">Comprar</h5>
                
            </div>
        </div>
    </section>
<!-- #work -->
       <!-- colegas -->
       <section class="reference bg-light py-5 px-4" id="time" >
          <div class="refer py-3">
              <h5 class="text-uppercase font-os font-size-16 text-muted ">Meus Colegas</h5>
              <h1 class="text-uppercase font-staat font-size-34"><span style='font-size:30px;'>&#128571;</span>Colegas</h1>
          </div>
          <div class="row mb-5">
              <div class="col-sm-4 my-3">
                  <img src="{{asset('/assets/img/colegas/alaercio.jpg')}}" alt="refer1" class="img-fluid">
              </div>
              <div class="col-sm-4 my-3">
                  <img src="{{asset('/assets/img/colegas/ana.jpg')}}" alt="refer1" class="img-fluid">
              </div>
              <div class="col-sm-4 my-3">
                  <img src="{{asset('/assets/img/colegas/pp.jpg')}}" alt="refer1" class="img-fluid">
              </div>
          </div>
      </section>
 

  <!-- blog -->
          <section class="news py-5 px-4 bg-light" id="blog">
              <div class="py-3">
                  <h5 class="text-uppercase font-os font-size-16 text-muted">Saiba Mais</h5>
                  <h1 class="text-uppercase font-staat font-size-34">Nosso Blog</h1>
              </div>
              <div class="row">
                  <div class="col-sm-4 my-3">
                      <div class="card border-0">
                          <img src="{{asset('/assets/img/blog/01.jpg')}}" alt="news1" class="card-img-top">
                          <div class="card-body">
                              <p class="font-ram font-size-16 text-black-50">em <b class="text-uppercase text-dark">Criação</b></p>
                              <h5 class="card-title font-ram">O que faz uma designer de joias </h5>
                              <p class="cart-text text-black-50">
                                  Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. 
                        Morbi justo erat, posuere vel libero non, bibendum convallis enim.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 my-3">
                      <div class="card border-0">
                          <img src="{{asset('/assets/img/blog/02.jpg')}}" alt="news1" class="card-img-top">
                          <div class="card-body">
                              <p class="font-ram font-size-16 text-black-50">em <b class="text-uppercase text-dark">Coleção</b></p>
                              <h5 class="card-title font-ram">Joias vendidas a Rainha Isabel</h5>
                              <p class="cart-text text-black-50">
                                  Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. 
                        Morbi justo erat, posuere vel libero non, bibendum convallis enim.
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4 my-3">
                      <div class="card border-0">
                          <img src="{{asset('/assets/img/blog/03.jpg')}}" alt="news1" class="card-img-top">
                          <div class="card-body">
                              <p class="font-ram font-size-16 text-black-50">em <b class="text-uppercase text-dark">Luxurius</b></p>
                              <h5 class="card-title font-ram">Sinta o Brilho em si</h5>
                              <p class="cart-text text-black-50">
                                  Fusce suscipit, ante a hendrerit ullamcorper, risus nisl cursus purus, sit amet viverra ante nulla vel justo. 
                        Morbi justo erat, posuere vel libero non, bibendum convallis enim.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
  <!-- #news -->

  <footer id="footer" class="pt-5 px-3">
      <div id="contacto">
          <div class="py-3 px-2">
              <h5 class="text-uppercase font-os font-size-16 text-muted">Onde Moro</h5>
                  <h1 class="text-uppercase font-staat font-size-34">Contacte-me</h1>
          </div>
          <div class="row py-5">
              <div class="col-sm-6">
                  <h6 class="text-uppercase font-ram font-size-16 text-dark">July company Inc.</h6>
                  <p class="font-ram w-50 font-size-16 text-black-50">Fusce suscipit, ante a hendrerit thelery ullamcorper, risus nisl cursus purus the viverra ante nulla vel justo</p>
                  <p class="font-ram font-size-16 text-black-50 pt-3">celular: +55 650-444-1234</p>
                  <p class="font-ram font-size-16 text-black-50">FAX: +55 999999-6666666</p>
                  <p class="font-ram font-size-16 text-black-50">EMAIL: JulyClose@gmail.com</p>
                  <p class="font-ram font-size-16 text-black-50">Endereço: Avenida paulista, Sp-Brasil.</p>
              </div>
              <div class="col-sm-6 py-4 px-4">
                  <h6 class="text-uppercase font-ram font-size-16">Deixe a sua proposta</h6>
                  <form action="" class="py-3">
                      <div class="row">
                          <div class="col">
                              <input type="text" class="form-control" placeholder="Nome">
                          </div>

                          

                          <div class="col">
                              <input type="email" class="form-control" placeholder="E-mail">
                          </div>
                      </div>
                      <textarea name="" id="" rows="1" class="form-control my-2" placeholder="Celular"></textarea>
                      <textarea name="" id="" cols="30" rows="3" class="form-control my-4" placeholder="Mensagem"></textarea>
                      <button type="submit" class="btn btn-dark "id="button">OK Foi!</button>
                  </form>
              </div>
          </div>

          
          <div class="row bg-light py-3">
              <div class="col-sm-4 my-5 text-center">
                  <h6 class="font-ram font-size-16 text-black-50">&copy;2020 July Todos os Direitos Reservados</h6>
              </div>
              <div class="col-sm-4 my-4 text-center">
                  <div class="footer-title">
                      <a href="#" class="navbar-brand font-staat font-size-40 text-dark"><span class="button">July</span> Close</a>
                      <p class="description font-os font-size-16 text-black-50 text-uppercase"><span id="typed_3"></span></p>
                  </div>
              </div>
              <div class="col-sm-4 my-5 text-center">
                  <span class="mr-3"><i href="" class="fab fa-facebook-f facebook "></i></span>
                  <span class="mr-3"><i class="fab fa-twitter twitter"></i></span>
                  <span class="mr-3"><i class="fab fa-instagram instagram "></i></span>
                  <span class="mr-3"><i class="fab fa-youtube youtube"></i></span>
              </div>
          </div>
      </div>
  </footer>

<!-- fim sobre mim -->
    </div>
  </div>
</main>
    
   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>

<script src="{{url('assets/js/typed.min.js')}}"></script>

<script src="{{url('assets/js/index.js')}}"></script>
<script src="./sidebar.js"></script>
   
</body>
</html>