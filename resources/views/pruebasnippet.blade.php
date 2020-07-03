<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
        <div class="row">
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Hola mundo</strong> Soy un alert.
            </div>
            <h1-6>texto a notificar<span class="badge badge-primary">New</span></h1-6>    
        </div>
   </div>
   <div class="container-fluid">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="#">Item 1</a>
            <a class="breadcrumb-item" href="#">Item 2</a>
            <span class="breadcrumb-item active"> Item activo</span>
        </nav>
        <div class="container">
                <button type="button" class="btn btn-primary">Click Me!</button>
                <br><br>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        Helado de Vainilla
                        <input type="checkbox" name=""  id="" checked autocomplete="off">
                    </label>
                    <label class="btn btn-primary">
                        Helado de Cereza
                        <input type="checkbox" name="" id="" autocomplete="off">
                    </label>
                    <label class="btn btn-primary">
                        Helado de Chocolate
                        <input type="checkbox" name="" id="" autocomplete="off">
                    </label>
                </div>
                <br>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        Control
                        <input type="radio" name="" id="" autocomplete="off" checked>
                    </label>
                    <label class="btn btn-primary">
                        Modelo
                        <input type="radio" name="" id="" autocomplete="off">
                    </label>
                    <label class="btn btn-primary">
                        Vista
                        <input type="radio" name="" id="vista" autocomplete="off">
                    </label>
                </div>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Try Me</button>
                <br>
                <div class="btn-group" role="group" aria-label="">
                        <button type="button" class="btn btn-primary">Pan Integral</button>
                        <button type="button" class="btn btn-success">Pan Blanco</button>
                        <button type="button" class="btn btn-info">Tostada</button>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="https://66.media.tumblr.com/675fff631b03d23476ef5a76a13e8400/tumblr_or0irmMiO61unkq7zo1_250.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Leonardo</h4>
                                <p class="card-text">anime: kekkai sensen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="https://larepublica.pe/resizer/KFwDZh8ibtuSoavmnxiXGwhvrAs=/500x300/top/larepublica.pe/resizer/l7IROV8QkpouTiC9CAWyTCVxuVY=/500x300/top/smart/arc-anglerfish-arc2-prod-gruporepublica.s3.amazonaws.com/public/BO4TFFVMKJEM3NGHSOHLC5KNTI.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Title</h3>
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://lh3.googleusercontent.com/proxy/P2zbxbIZlfu0qkjL_qvFQIB3kUXMYIjiY5WGLYJuJyW8ZhcmnqTYmrmnBzqubNaXpfYJCCVLfoOr92SyGWH5yD20ihYLcKrTCKCmwCXInkYboV8M7TRlSGn4q3cpFqY" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Title</h3>
                                        <p>Description</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://larepublica.pe/resizer/W7ZmgtmGz9cUfp5tS5gigKjO0fw=/500x300/top/larepublica.pe/resizer/PvH30DkEv6qUKnjdvV1zev1QMn0=/500x300/top/smart/arc-anglerfish-arc2-prod-gruporepublica.s3.amazonaws.com/public/SC2CFLPL7FE2TO5NYNFBBR6JXE.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>Title</h3>
                                        <p>Description</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
            <div class="container">
                   <p>
                       <a class="btn btn-primary" data-toggle="collapse" href="#contentId" aria-expanded="false" aria-controls="contentId">
                           Mostrar
                       </a>
                   </p>
                   <div class="collapse" id="contentId">
                         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                   </div>
            </div>
            <br>
            <div class="container">
                <div id="accordianId" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="section1HeaderId">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
                          Section 1
                        </a>
                            </h5>
                        </div>
                        <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
                            <div class="card-body">
                            Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="section2HeaderId">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
                          Section 2
                        </a>
                            </h5>
                        </div>
                        <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
                            <div class="card-body">
                            El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                                Dropdown
                            </button>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item disabled" href="#">Disabled action</a>
                        <h6 class="dropdown-header">Section header</h6>
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">After divider action</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="form-group">
                  <label for="">Introduzca su nombre</label>
                  <input type="text" name="" id="" class="form-control" placeholder="Nombre" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                  <label for="">Introduzca su apellido</label>
                  <input type="text" name="" id="" class="form-control" placeholder="Apellido" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                  <label for="">Introduzca su edad</label>
                  <input type="text" name="" id="" class="form-control" placeholder="Edad" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="jumbotron">
                    <h1 class="display-3">Jumbo heading</h1>
                    <p class="lead">Jumbo helper text</p>
                    <hr class="my-2">
                    <p>More info</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                    </p>
                </div>
            </div>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
              Launch
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            Body
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div> 
            <br>
            <div class="container">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    25%
                    </div>
                </div>
            </div>  
        </div>
        <br><br><br>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>