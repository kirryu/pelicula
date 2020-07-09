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
                          @error('user_error')
                            <div class="alert alert-success"> {{ $message }} </div>

                          @enderror
                          <form action=" {{ route('acceso') }} " method="POST" role="form"  >
                            @csrf
                            <div class="form-group">
                              <label for="">Usuario:</label>
                              <input type="text"
                                class="form-control" name="txt_usuario" id="" aria-describedby="helpId" placeholder="Usuario"
                                value=" {{ old('txt_usuario')  }} "  >
                              
                            </div>

                            <div class="form-group">
                              <label for="">Contraseña:</label>
                              <input type="password" class="form-control" name="txt_password" id="" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <button type="reset" class="btn btn-warning">Limpiar</button>

                          </form>

                    </div>
                </div>
            </div>
        </section>

 @stop
