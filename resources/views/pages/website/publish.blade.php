<x-layouts.website-layout title="PUBLICAR ANUNCIO">
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">PUBLICAR ANUNCIO</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>PUBLICAR ANUNCIO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6 fw-light">
                <div class="col-md-12 pe-lg-9 pe-3 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row text-center mb-5">
                        <div class="col-12">
                            <h2 class="fw-bold">CREA TU ANUNCIO</h2>
                            <p>Escoger la categoría según el tipo de anuncio que deseas publicar</p>
                        </div>
                    </div>

                    <div class="row gy-4">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/publish-ad/image-1.webp')}}" class="card-img-top" alt="Publicación de caninos">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Publicación de caninos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/publish-ad/image-2.webp')}}" class="card-img-top" alt="Publicación de equinos">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Publicación de equinos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/publish-ad/image-3.webp')}}" class="card-img-top" alt="Publicación de felinos">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Publicación de felinos</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="{{asset('assets/images/animals/publish-ad/image-4.webp')}}" class="card-img-top" alt="Publicación de conejos y roedores">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Publicación de conejos y roedores</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.website-layout>
