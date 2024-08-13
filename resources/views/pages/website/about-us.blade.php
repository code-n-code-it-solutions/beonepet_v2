<x-layouts.website-layout title="About Us">
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Nosotros</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Nosotros</li>
                        </ul><button class="btn bsb-btn-xl btn-primary btn-lg my-5">VER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-6 pe-lg-9 pe-3 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <!-- About Thumb Start -->
                    <div class="about-thumb">
                        <img class="fit-image" src="{{asset('assets/images/animals/about-us/horse-meadow.jpg.webp')}}"
                             alt="About Image">
                    </div>
                    <!-- About Thumb End -->
                </div>
                <div class="col-md-6 align-self-center mb-6" data-aos="fade-up" data-aos-duration="1500">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <h2 class="title">BE ONE PET</h2>
                        <p>
                            Be One® Pets es una plataforma que conecta a usuarios que buscan perros, gatos, conejos,
                            roedores y caballos, con criadores, refugios y personas que buscan dar en venta,
                            reproducción o adopción. Del mismo modo, la plataforma a través de su servicio de “Perdidos
                            y encontrados”, busca facilitar el reencuentro de mascotas perdidas con sus dueños, lo que
                            tiene un impacto emocional profundo, tanto para las familias como para las mascotas. La
                            alegría y alivio que experimentan ambas partes al reencontrarse es inmenso. Por último, la
                            plataforma también ofrece artículos informativos relacionados al cuidado, alimentación,
                            adiestramiento y estética en busca del bienestar animal.
                        </p>
                        <a href="{{route('contact-us')}}" class="btn btn-primary btn-hover-dark">Contacto</a>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <div class="section bg-bright section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <h4>Nuestra Misión</h4>
                        <p class="text-center">
                            Crear una comunidad alrededor de las mascotas a través de nuestra plataforma, centrándose en
                            promover prácticas éticas, responsables y actuales en pro del bienestar animal.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center">
                        <h4>Nuestra Visión</h4>
                        <p class="text-center">
                            Ser la plataforma líder en de animales en Costa Rica, reconocida por su enfoque en el
                            bienestar animal y la transparencia y seguridad en las transacciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6">
                <div class="col-md-4">
                    <div class="d-flex justify-content-center align-items-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('assets/images/animals/about-us/dog-1.webp')}}" class="img-fluid fit-image rounded" alt="Dog with glasses">
                    </div>
                    <div class="d-flex justify-content-center align-items-center mb-6" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('assets/images/animals/about-us/cat-1.webp')}}" class="img-fluid fit-image rounded" alt="Cat">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 mb-6 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1000">
                    <img src="{{asset('assets/images/animals/about-us/cat-center.webp')}}" class="img-fluid fit-image rounded" alt="Dog and Cat">
                </div>
                <div class="col-md-4">
                    <div class="mb-6 d-flex justify-content-center align-items-center " data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('assets/images/animals/about-us/dog-2.webp')}}" class="img-fluid fit-image rounded" alt="Another Cat">
                    </div>
                    <div class="mb-6 d-flex justify-content-center align-items-center " data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{asset('assets/images/animals/about-us/horse.webp')}}" class="img-fluid fit-image rounded" alt="Horse">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-6">
                    <h2 class="fw-bold mb-4">Valores</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">01.</h3>
                            <h4 class="fw-normal">Bienestar animal</h4>
                            <p>Priorizamos la salud y el bienestar de los animales en todas nuestras actividades.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">02.</h3>
                            <h4 class="fw-normal">Responsabilidad social</h4>
                            <p>Promovemos la adopción y la tenencia responsable de animales.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">03.</h3>
                            <h4 class="fw-normal">Transparencia</h4>
                            <p>Brindamos información clara y veraz a nuestros usuarios</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">04.</h3>
                            <h4 class="fw-normal">Confianza</h4>
                            <p>Construimos relaciones de confianza con nuestros usuarios, colaboradores, patrocinadores y comunidad en general.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-6">
                    <img src="{{asset('assets/images/animals/about-us/horse-2.jpeg')}}" class="img-fluid rounded" alt="Horse">
                </div>
            </div>
        </div>
    </div>


    <div class="section section-margin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-6">
                    <img src="{{asset('assets/images/animals/about-us/rabbit-1.jpeg')}}" class="img-fluid rounded" alt="Animal">
                </div>
                <div class="col-lg-6 col-md-12 mb-6">
                    <h2 class="fw-bold mb-4">VENTAJAS COMPETITIVAS</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">01.</h3>
                            <h4 class="fw-normal">Diferenciación</h4>
                            <p>Única plataforma digital en Costa Rica, dedicada 100% al nicho de mercado de los animales.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">02.</h3>
                            <h4 class="fw-normal">Enfoque en el bienestar animal</h4>
                            <p>Contamos con un equipo apasionado en el cuidado animal que supervisa la plataforma y ofrece contenido educativo.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">03.</h4>
                                <h4 class="fw-normal">Fácil e intuitiva de usar</h4>
                                <p>La plataforma es fácil de usar y navegar, tanto para usuarios que buscan animales, como para aquellos que buscan vender, dar en adopción, o recuperar a su mascota perdida.</p>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h3 class="h5 fw-bold">04.</h3>
                            <h4 class="fw-normal">Seguridad y confianza</h4>
                            <p>Implementamos medidas de seguridad para proteger la información de nuestros usuarios y garantizar transacciones confiables.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.website-layout>
