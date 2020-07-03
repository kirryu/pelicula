@extends("plantilla")
 @section("titulo")
    Area de Clientes - UTPMovie
 @stop

 @include("navbar2")
 @section("contenido")
     <!-- Masthead-->
         
     <section class="page-section" id="">
            <div class="container"><br>
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Titulo Seccion</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                          
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, eum soluta eveniet cupiditate in hic iste id a maiores ipsum provident molestias velit, dolores esse quibusdam suscipit! Distinctio, voluptatibus amet.
                        
                        <form action="">
                          <div class="form-group">
                            <label for="">Titulo:</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Titulo">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="form-group">
                            <label for="">Genero:</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Genero">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="form-group">
                            <label for="">Resumen</label>
                            <textarea class="form-control" name="" id="" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Precio: </label>
                            <input type="text"
                              class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Añadir</button>
                          <button type="reset" class="btn btn-light">Limpiar</button>
                        </form>  
                    

                    </div>
                </div>
            </div>
        </section>

 @stop