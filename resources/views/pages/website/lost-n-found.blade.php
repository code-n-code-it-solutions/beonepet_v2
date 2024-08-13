<x-layouts.website-layout title="Lost And Found">
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Perdidos Y Encontrados</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Perdidos Y Encontrados</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


    <div class="section section-margin">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">ENCUENTRA TU MASCOT@!!!</h2>
                    <p>
                        Las siguientes mascotas están perdidas, si las has visto, contacta directamente al anunciante
                        para darle información que le ayude a reunirse con su mascota.
                    </p>
                    <a href="#plans" class="btn bsb-btn-xl btn-primary btn-lg rounded-pill">CREAR ANUNCIO</a>
                </div>
            </div>

            <!-- Plan Cards Row Start -->
            <div class="row">
                <div class="row gy-5 gy-lg-0 gx-xl-5">
                    <div class="row gy-4">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/lost-n-found/image-1.webp')}}" class="card-img-top rounded" alt="Maltida">
                                <div class="badge bg-primary text-dark position-absolute top-0 start-0 m-2">URGENTE</div>
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="color: #AE633F">Maltida</h5>
                                    <p class="card-text" style="color: #AE633F">Ubicación: Santa Ana, Pozos<br>Vista última vez: 14-07-2024</p>
                                    <a href="#" class="btn btn-primary rounded-pill" style="background-color: #AE633F">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/lost-n-found/image-2.webp')}}" class="card-img-top rounded" alt="Luisito">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="color: #AE633F">Luisito</h5>
                                    <p class="card-text" style="color: #AE633F">Ubicación: Taras, Cartago<br>Vista última vez: 14-07-2024</p>
                                    <a href="#" class="btn btn-primary rounded-pill" style="background-color: #AE633F">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/lost-n-found/image-3.webp')}}" class="card-img-top rounded" alt="Oso">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="color: #AE633F">Oso</h5>
                                    <p class="card-text" style="color: #AE633F">Ubicación: Cipreses, Curridabat<br>Vista última vez: 14-07-2024</p>
                                    <a href="#" class="btn btn-primary rounded-pill" style="background-color: #AE633F">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/lost-n-found/image-4.webp')}}" class="card-img-top rounded" alt="Ramón">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="color: #AE633F">Ramón</h5>
                                    <p class="card-text" style="color: #AE633F">Ubicación: San Blas, Moravia<br>Vista última vez: 14-07-2024</p>
                                    <a href="#" class="btn btn-primary rounded-pill" style="background-color: #AE633F">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn bsb-btn-xl btn-primary btn-lg my-5">VER MÁS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin" id="plans">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="fw-bold">PLANES DE EMERGENCIA</h2>
                </div>
            </div>

            <!-- Plan Cards Row Start -->
            <div class="row">
                <div class="row gy-5 gy-lg-0 gx-xl-5">
                    <div class="col-12 col-lg-4 mb-5">
                        <div class="card border border-primary shadow-sm">
                            <img src="{{asset('assets/images/animals/plans/premium-sos-ad.webp')}}"
                                 class="card-img-top" alt="Plan Image">
                            <div class="position-absolute start-50 px-3 py-2 translate-middle badge text-white"
                                 style="background-color: #7D3800;top: 30%">
                                MÁXIMA EXPOSICIÓN
                            </div>
                            <img
                                class="position-absolute"
                                width="110"
                                height="110"
                                src="{{asset('assets/images/SIRENA.webp')}}"
                                style="right: -50px; top: 20px; z-index: 9999"
                                alt=""
                            >
                            <div class="card-body p-4 p-xxl-5">
                                <h2 class="h4 mb-2" style="color: #7D3800 !important">PLAN S.O.S - PREMIUM</h2>
                                <h4 class="display-3 fw-bold text-primary mb-0" style="color: #7D3800 !important">
                                    ₡ 27.500
                                </h4>
                                <p class="text-secondary mb-4" style="color: #7D3800 !important">
                                    Publicidad inmediata paga en redes sociales con target según ubicación, con botón de
                                    mensajes WhatsApp. Incluye todos los datos del dueño.
                                </p>
                                <ul class="list-group list-group-flush mb-4">
                                    <li>
                                        <svg width="30" height="30" viewBox="0 0 512 512" style="color:currentColor"
                                             xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                                            <rect width="512" height="512" x="0" y="0" rx="30" fill="transparent"
                                                  stroke="transparent" stroke-width="0" stroke-opacity="100%"
                                                  paint-order="stroke"></rect>
                                            <svg width="256px" height="256px" viewBox="0 0 1024 1024"
                                                 fill="currentColor" x="128" y="128" role="img"
                                                 style="display:inline-block;vertical-align:middle"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor">
                                                    <path fill="currentColor"
                                                          d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z"/>
                                                </g>
                                            </svg>
                                        </svg>
                                        <span>Publicación de alta prioridad.</span>
                                    </li>
                                    <li>
                                        <svg width="30" height="30" viewBox="0 0 512 512" style="color:currentColor"
                                             xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                                            <rect width="512" height="512" x="0" y="0" rx="30" fill="transparent"
                                                  stroke="transparent" stroke-width="0" stroke-opacity="100%"
                                                  paint-order="stroke"></rect>
                                            <svg width="256px" height="256px" viewBox="0 0 1024 1024"
                                                 fill="currentColor" x="128" y="128" role="img"
                                                 style="display:inline-block;vertical-align:middle"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor">
                                                    <path fill="currentColor"
                                                          d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z"/>
                                                </g>
                                            </svg>
                                        </svg>
                                        <span>Incluye: 1 Post + 1 Reel + 1 Story + Highlights</span>
                                    </li>
                                </ul>
                                <button class="btn bsb-btn-xl btn-primary rounded-pill"
                                        style="background-color: #E01C1C !important">AYUDA!!!</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-5">
                        <div class="card border border-primary shadow-sm">
                            <img src="{{asset('assets/images/animals/plans/essential-sos-ad.webp')}}"
                                 class="card-img-top" alt="Plan Image">
                            <div class="position-absolute start-50 px-3 py-2 translate-middle badge text-white"
                                 style="background-color: #7D3800;top: 33%">
                                OPCIÓN BÁSICA
                            </div>
                            <div class="card-body p-4 p-xxl-5">
                                <h2 class="h4 mb-2" style="color: #7D3800 !important">PLAN S.O.S - ESENCIAL</h2>
                                <h4 class="display-3 fw-bold text-primary mb-0" style="color: #7D3800 !important">
                                    ₡ 5.500
                                </h4>
                                <p class="text-secondary mb-4" style="color: #7D3800 !important">
                                    Alcance en nuestras redes sociales en menos de 24 horas después de publicado el
                                    anuncio
                                </p>
                                <ul class="list-group list-group-flush mb-4">
                                    <li>
                                        <svg width="30" height="30" viewBox="0 0 512 512" style="color:currentColor"
                                             xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                                            <rect width="512" height="512" x="0" y="0" rx="30" fill="transparent"
                                                  stroke="transparent" stroke-width="0" stroke-opacity="100%"
                                                  paint-order="stroke"></rect>
                                            <svg width="256px" height="256px" viewBox="0 0 1024 1024"
                                                 fill="currentColor" x="128" y="128" role="img"
                                                 style="display:inline-block;vertical-align:middle"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor">
                                                    <path fill="currentColor"
                                                          d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z"/>
                                                </g>
                                            </svg>
                                        </svg>
                                        <span>Duración de 15 días naturales</span>
                                    </li>
                                    <li>
                                        <svg width="30" height="30" viewBox="0 0 512 512" style="color:currentColor"
                                             xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                                            <rect width="512" height="512" x="0" y="0" rx="30" fill="transparent"
                                                  stroke="transparent" stroke-width="0" stroke-opacity="100%"
                                                  paint-order="stroke"></rect>
                                            <svg width="256px" height="256px" viewBox="0 0 1024 1024"
                                                 fill="currentColor" x="128" y="128" role="img"
                                                 style="display:inline-block;vertical-align:middle"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor">
                                                    <path fill="currentColor"
                                                          d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z"/>
                                                </g>
                                            </svg>
                                        </svg>
                                        <span>Posicionamiento en carrusel.</span>
                                    </li>
                                </ul>
                                <button class="btn bsb-btn-xl btn-primary rounded-pill"
                                        style="background-color: #E01C1C !important">AYUDA!!!</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-5">
                        <div class="card border border-primary shadow-sm">
                            <img src="{{asset('assets/images/animals/plans/free-sos-ad.webp')}}"
                                 class="card-img-top" alt="Plan Image">
                            <div class="position-absolute start-50 px-3 py-2 translate-middle badge text-white"
                                 style="background-color: #7D3800;top: 36%">
                                GRATIS
                            </div>
                            <div class="card-body p-4 p-xxl-5">
                                <h2 class="h4 mb-2" style="color: #7D3800 !important">PLAN S.O.S - GRATUITO</h2>
                                <h4 class="display-3 fw-bold text-primary mb-0" style="color: #7D3800 !important">
                                    ₡ 0
                                </h4>
                                <p class="text-secondary mb-4" style="color: #7D3800 !important">
                                    Un gran servicio para nuestra comunidad amantes de los animales.
                                </p>
                                <ul class="list-group list-group-flush mb-4">
                                    <li>
                                        <svg width="30" height="30" viewBox="0 0 512 512" style="color:currentColor"
                                             xmlns="http://www.w3.org/2000/svg" class="h-full w-full">
                                            <rect width="512" height="512" x="0" y="0" rx="30" fill="transparent"
                                                  stroke="transparent" stroke-width="0" stroke-opacity="100%"
                                                  paint-order="stroke"></rect>
                                            <svg width="256px" height="256px" viewBox="0 0 1024 1024"
                                                 fill="currentColor" x="128" y="128" role="img"
                                                 style="display:inline-block;vertical-align:middle"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g fill="currentColor">
                                                    <path fill="currentColor"
                                                          d="M512 0C229.232 0 0 229.232 0 512c0 282.784 229.232 512 512 512c282.784 0 512-229.216 512-512C1024 229.232 794.784 0 512 0zm0 961.008c-247.024 0-448-201.984-448-449.01c0-247.024 200.976-448 448-448s448 200.977 448 448s-200.976 449.01-448 449.01zm204.336-636.352L415.935 626.944l-135.28-135.28c-12.496-12.496-32.752-12.496-45.264 0c-12.496 12.496-12.496 32.752 0 45.248l158.384 158.4c12.496 12.48 32.752 12.48 45.264 0c1.44-1.44 2.673-3.009 3.793-4.64l318.784-320.753c12.48-12.496 12.48-32.752 0-45.263c-12.512-12.496-32.768-12.496-45.28 0z"/>
                                                </g>
                                            </svg>
                                        </svg>
                                        <span>Duración de 7 días naturales</span>
                                    </li>
                                </ul>
                                <button class="btn bsb-btn-xl btn-primary rounded-pill"
                                        style="background-color: #E01C1C !important">AYUDA!!!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.website-layout>
