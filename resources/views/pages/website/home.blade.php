<x-layouts.website-layout title="Home">

    <style>
        .fit-image {
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            position: relative;
            background-color: #f7f7f7;
        }

        .fit-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .btn-secondary {
            color: #fff !important;
            background-color: #7D3800 !important;
            border-color: #7D3800;
        }

        .btn-secondary:hover {
            color: #fff !important;
            background-color: #f6ab49;
            border-color: #f6ab49;
        }

        .hero {
            position: relative;
            height: 70vh;
        }

        .hero img {
            width: 100%;
            height: 70vh;
            object-fit: cover;
            object-position: center;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .hero-logo img {
            width: 100%; /* Default for small screens */
            max-width: 300px; /* Adjust as needed for large screens */
            height: auto;
        }

        .hero-text {
            font-size: 1.5rem; /* Default for small screens */
        }

        /* Media Queries for larger screens */
        @media (min-width: 768px) {
            .hero-logo img {
                max-width: 500px; /* Adjust as needed for medium screens */
            }

            .hero-text {
                font-size: 2rem; /* Adjust as needed for medium screens */
            }
        }

        @media (min-width: 1200px) {
            .hero-logo img {
                max-width: 681px; /* Original size for large screens */
            }

            .hero-text {
                font-size: 2rem; /* Original size for large screens */
            }
        }
    </style>

    <!-- Hero Section Start -->
    <div class="hero mb-5 " style="z-index: -1">
        <img src="{{asset('assets/images/animals/homepage/slider-1.webp')}}" alt="Hero Image"/>
        <div class="hero-content">
            <a href="{{url('/')}}" class="hero-logo">
                <img src="{{asset('assets/images/logo/beonepet-logo-gold.svg')}}" alt="Site Logo"/>
            </a>
            <p class="hero-text">
                ¡Conectando con tu compañer@ de vida! Comunidad Amante de los Animales
            </p>
            <div class="d-flex justify-content-center align-items-center gap-3">
                <a href="{{route('publish-ad')}}" class="btn btn-secondary rounded-pill">
                    CREA TU ANUNCIO
                </a>
                <a href="{{route('lost-n-found')}}" class="btn btn-primary rounded-pill">
                    MASCOTA PERDIDA
                </a>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Product Section Start -->
    <div class="section section-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title text-center">
                        <h2 class="title">PERROS</h2>
                        <h4 class="sub-title">Conecta con tu compañer@ de vida</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-n8">
                <div class="swiper-container productSwiper">
                    <div class="swiper-wrapper">
                        @foreach($images as $category => $image)
                            @php($i=0)
                            @if($category=='dogs')
                                @foreach($image as $animal)
                                    @if($i<=7)
                                        <div class="swiper-slide">
                                            <!-- Product Start -->
                                            <div class="product-wrapper mb-8" data-aos="fade-up" data-aos-duration="1100">
                                                <div class="product">
                                                    <!-- Thumb Start  -->
                                                    <div class="thumb fit-image">
                                                        <a href="{{route('animal-detail', $animal['slug'])}}" class="image">
                                                            <img class="img-fluid border" src="{{ asset('assets/images/animals/'.$animal['filename']) }}" alt="{{$animal['name']}}"/>
                                                        </a>
                                                    </div>
                                                    <span class="badges" style="background-color: rgb(125, 56, 0) !important;border-radius: 20px;">
                                                        <span class="text-white" style="font-size: 16px">Actividad: Venta</span>
                                                    </span>
                                                    <!-- Thumb End  -->

                                                    <!-- Content Start  -->
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <a href="{{route('animal-detail', $animal['slug'])}}">{{$animal['name']}}</a>
                                                        </h5>
                                                        <h5 class="fs-6">Raza: {{$animal['breed']}}</h5>
                                                        <span class="price">
                                                            <span class="new" style="color: #da9900 !important;">₡70,000.00</span>
                                                        </span>
                                                    </div>
                                                    <!-- Content End  -->
                                                </div>
                                            </div>
                                            <!-- Product End -->
                                        </div>
                                    @endif
                                    @php($i++)
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Swiper Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <button class="btn btn-primary rounded-pill">VER TODO</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <div class="section section-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title text-center">
                        <h2 class="title">EQUINOS</h2>
                        <h4 class="sub-title">Conecta con tu compañer@ de vida</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-n8">
                <div class="swiper-container productSwiper">
                    <div class="swiper-wrapper">
                        @foreach($images as $category => $image)
                            @php($i=0)
                            @if($category=='horses')
                                @foreach($image as $animal)
                                    @if($i<=7)
                                        <div class="swiper-slide">
                                            <!-- Product Start -->
                                            <div class="product-wrapper mb-8" data-aos="fade-up" data-aos-duration="1100">
                                                <div class="product">
                                                    <!-- Thumb Start  -->
                                                    <div class="thumb fit-image">
                                                        <a href="{{route('animal-detail', $animal['slug'])}}" class="image">
                                                            <img class="img-fluid rounded border" src="{{ asset('assets/images/animals/'.$animal['filename']) }}" alt="{{$animal['name']}}"/>
                                                        </a>
                                                    </div>
                                                    <!-- Thumb End  -->

                                                    <!-- Content Start  -->
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <a href="{{route('animal-detail', $animal['slug'])}}">{{$animal['name']}}</a>
                                                        </h5>
                                                        <h5 class="fs-6">Raza: {{$animal['breed']}}</h5>
                                                        <span class="price">
                                                            <span class="new" style="color: #da9900 !important;">₡70,000.00</span>
                                                        </span>
                                                    </div>
                                                    <!-- Content End  -->
                                                </div>
                                            </div>
                                            <!-- Product End -->
                                        </div>
                                    @endif
                                    @php($i++)
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Swiper Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <button class="btn btn-primary rounded-pill">VER TODO</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title text-center">
                        <h2 class="title">FELINOS</h2>
                        <h4 class="sub-title">Conecta con tu compañer@ de vida</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-n8">
                <div class="swiper-container productSwiper">
                    <div class="swiper-wrapper">
                        @foreach($images as $category => $image)
                            @php($i=0)
                            @if($category=='cats')
                                @foreach($image as $animal)
                                    @if($i<=7)
                                        <div class="swiper-slide">
                                            <!-- Product Start -->
                                            <div class="product-wrapper mb-8" data-aos="fade-up" data-aos-duration="1100">
                                                <div class="product">
                                                    <!-- Thumb Start  -->
                                                    <div class="thumb fit-image">
                                                        <a href="{{route('animal-detail', $animal['slug'])}}" class="image">
                                                            <img class="img-fluid rounded border" src="{{ asset('assets/images/animals/'.$animal['filename']) }}" alt="{{$animal['name']}}"/>
                                                        </a>
                                                    </div>
                                                    <!-- Thumb End  -->

                                                    <!-- Content Start  -->
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <a href="{{route('animal-detail', $animal['slug'])}}">{{$animal['name']}}</a>
                                                        </h5>
                                                        <h5 class="fs-6">Raza: {{$animal['breed']}}</h5>
                                                        <span class="price">
                                                            <span class="new" style="color: #da9900 !important;">₡70,000.00</span>
                                                        </span>
                                                    </div>
                                                    <!-- Content End  -->
                                                </div>
                                            </div>
                                            <!-- Product End -->
                                        </div>
                                    @endif
                                    @php($i++)
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Swiper Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <button class="btn btn-primary rounded-pill">VER TODO</button>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title text-center">
                        <h2 class="title">CONEJOS Y ROEDORES</h2>
                        <h4 class="sub-title">Conecta con tu compañer@ de vida</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-n8">
                <div class="swiper-container productSwiper">
                    <div class="swiper-wrapper">
                        @foreach($images as $category => $image)
                            @php($i=0)
                            @if($category=='rabbits')
                                @foreach($image as $animal)
                                    @if($i<=7)
                                        <div class="swiper-slide">
                                            <!-- Product Start -->
                                            <div class="product-wrapper mb-8" data-aos="fade-up" data-aos-duration="1100">
                                                <div class="product">
                                                    <!-- Thumb Start  -->
                                                    <div class="thumb fit-image">
                                                        <a href="{{route('animal-detail', $animal['slug'])}}" class="image">
                                                            <img class="img-fluid rounded border" src="{{ asset('assets/images/animals/'.$animal['filename']) }}" alt="{{$animal['name']}}"/>
                                                        </a>
                                                    </div>
                                                    <!-- Thumb End  -->

                                                    <!-- Content Start  -->
                                                    <div class="content">
                                                        <h5 class="title">
                                                            <a href="{{route('animal-detail', $animal['slug'])}}">{{$animal['name']}}</a>
                                                        </h5>
                                                        <h5 class="fs-6">Raza: {{$animal['breed']}}</h5>
                                                        <span class="price">
                                                            <span class="new" style="color: #da9900 !important;">₡70,000.00</span>
                                                        </span>
                                                    </div>
                                                    <!-- Content End  -->
                                                </div>
                                            </div>
                                            <!-- Product End -->
                                        </div>
                                    @endif
                                    @php($i++)
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Swiper Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="d-flex justify-content-center my-5">
                    <button class="btn btn-primary rounded-pill">VER TODO</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section Start -->
    <div class="section section-margin" style="padding: 2rem 0;">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-12 col-md-4">
                    <div class="card bg-dark text-white" style="border-radius: 20px">
                        <a href="{{ route('blog-detail', 'blog-1-slug') }}">
                            <img src="{{ asset('assets/images/animals/blogs/blog-1.jpeg') }}" class="card-img" alt="Image 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-white">El procedimiento correcto para bañar a tu perro en casa: ¡Consejos útiles para un baño seguro y feliz!</h5>
                                <p class="card-text">
                                    Carolina Castro <span class="text-muted">May 6 • 2 min</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-eye"></i> 2
                                        <i class="bi bi-chat"></i> 0
                                    </div>
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card bg-dark text-white">
                        <a href="{{ route('blog-detail', 'blog-2-slug') }}">
                            <img src="{{ asset('assets/images/animals/blogs/blog-2.jpeg') }}" class="card-img" alt="Image 2">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-white">Los beneficios de tener contacto con los animales desde la infancia</h5>
                                <p class="card-text">
                                    Carolina Castro <span class="text-muted">May 6 • 3 min</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-eye"></i> 1
                                        <i class="bi bi-chat"></i> 0
                                    </div>
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card bg-dark text-white">
                        <a href="{{ route('blog-detail', 'blog-3-slug') }}">
                            <img src="{{ asset('assets/images/animals/blogs/blog-2.jpeg') }}" class="card-img" alt="Image 3">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-white">Otro título de blog</h5>
                                <p class="card-text">
                                    Carolina Castro <span class="text-muted">May 6 • 3 min</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-eye"></i> 1
                                        <i class="bi bi-chat"></i> 0
                                    </div>
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('blogs')}}" class="btn btn-primary rounded-pill btn-lg">VER TODO</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .fit-image {
            object-fit: cover;
            width: 100%;
            height: auto;
        }
        .card {
            border: none;
        }
        .card-img {
            filter: brightness(60%);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .card-text {
            margin-bottom: 0.5rem;
        }
    </style>
</x-layouts.website-layout>
