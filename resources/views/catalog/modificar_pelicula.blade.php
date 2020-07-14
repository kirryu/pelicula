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
                          
                        <h2>Pelicula Seleccionada: {{ $id }}</h2>
                        
                        <form action="" method="post" >
                          <div class="form-group">
                            <label for="">Titulo:</label>
                            <input type="text" class="form-control" name="txt_titulo" id="" aria-describedby="helpId" placeholder="Titulo">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <div class="form-group">
                            <label for=""> Genero: </label>
                          <select name="txt_genero">
                              <option value="Drama" > Drama</option>
                              <option value="Terror"> Terror </option>
                              <option value="Accion"> Accion </option>
                              <option value="Comedia"> Comedia </option>
                              <option value="Romance"> Romance </option>
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="">Resumen</label>
                            <textarea class="form-control" name="txt_resumen" id="" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Precio: </label>
                            <input type="text"
                              class="form-control" name="txt_precio" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          <button type="reset" class="btn btn-light">Limpiar</button>
                        </form>  
                    

                    </div>
                </div>
            </div>
        </section>

 @stop