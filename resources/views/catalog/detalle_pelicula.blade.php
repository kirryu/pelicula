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
                          
                        <h1>{{ $id}}</h1>
                          
                    

                    </div>
                </div>
            </div>
        </section>

 @stop