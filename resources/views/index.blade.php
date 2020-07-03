 @extends("plantilla")
 @section("titulo")
    Bienvenido al sitio web UTPMovie
 @stop
 
 @section("contenido")
 @include("navbar1")
 <!-- Masthead-->
 <header class="masthead bg-dark text-white text-center">
            <div class=" ">
             <div id="carouselId" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                     <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselId" data-slide-to="1"></li>
                     <li data-target="#carouselId" data-slide-to="2"></li>
                 </ol>
                 <div class="carousel-inner" role="listbox">
                     <div class="carousel-item active">
                         <img class="w-100" src="img/slider1.jpg" alt="First slide">
                         <div class="carousel-caption d-none d-md-block">
                             <h3>Title</h3>
                             <p>Description</p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <img class="w-100" src="img/slider2.jpg" alt="Second slide">
                         <div class="carousel-caption d-none d-md-block">
                             <h3>Title</h3>
                             <p>Description</p>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <img class="w-100" src="img/slider3.png" alt="Third slide">
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
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="opcion1">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Estrenos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                          <div class="card">
                              <img class="card-img-top" src="img/pelicula1.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                              <img class="card-img-top" src="img/pelicula2.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>

 
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                              <img class="card-img-top" src="img/pelicula3.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="card">
                              <img class="card-img-top" src="img/pelicula4.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="card">
                              <img class="card-img-top" src="img/pelicula5.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                    <div class="card">
                              <img class="card-img-top" src="img/pelicula6.jpg" alt="">
                              <div class="card-body">
                                  <h4 class="card-title">Title</h4>
                                  <p class="card-text">Text</p>
                                  <button type="button" class="btn btn-dark btn-lg">Ver mas <span class="fa fa-arrow-alt-circle-right"></span> </button>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="opcion2">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iste saepe fugit tempora quidem eaque voluptatum? Modi commodi explicabo nulla. Nam qui quaerat blanditiis ut magni incidunt provident obcaecati assumenda.</p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae tenetur sequi, consequatur perferendis vel possimus nam, et facere recusandae praesentium voluptates. Amet aut minima aliquid iusto. Ratione mollitia illo facilis.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#"><i class="fas fa-download mr-2"></i>Mas informacion</a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="opcion3">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacto</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form action="" method="post">
                            <div class="form-group">
                              <label for="">Nombre / Empresa</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="Nombre / Empresa">
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                            <div class="form-group">
                              <label for="">Telefono</label>
                              <input type="text"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="Telefono">
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                            <div class="form-group">
                              <label for="">Correo Electronico</label>
                              <input type="email"
                                class="form-control" name="" id="" aria-describedby="helpId" placeholder="Correo Electronico">
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                            <div class="form-group">
                              <label for="">Mensaje</label>
                              <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            <button type="reset" class="btn btn-warning btn-lg">Limpiar</button>


                        </form>
                          
                    </div>
                </div>
            </div>
        </section>
@stop