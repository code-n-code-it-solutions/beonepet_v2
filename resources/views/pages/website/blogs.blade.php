<x-layouts.website-layout title="EL BLOG">
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">EL BLOG</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>EL BLOG</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row mb-n6 fw-light">
                <div class="col-md-12 pe-lg-9 pe-3 mb-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row text-center mb-5">
                        <div class="col-12">
                            <h2 class="fw-bold">All Blogs</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4" data-aos="fade-up" data-aos-duration="1000">
                @foreach($blogs as $blog)
                    <div class="col-12 col-md-4">
                        <div class="card bg-dark text-white">
                            <a href="{{ route('blog-detail', $blog['slug']) }}">
                                <img src="{{ asset('assets/images/animals/blogs/' . $blog['image']) }}" class="card-img"
                                     alt="Image 1">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                    <h5 class="card-title text-white">{{ $blog['title'] }}</h5>
                                    <p class="card-text">
                                        {{ $blog['author'] }} <span
                                            class="text-muted">{{ $blog['published_at']->format('M d') }}
                                            • {{ $blog['read_time'] }} min</span>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="bi bi-eye"></i> {{ $blog['views'] }}
                                            <i class="bi bi-chat"></i> {{ $blog['comments_count'] }}
                                        </div>
                                        <i class="bi bi-heart"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Start -->
            <div class="row">
                <div class="col-12 mt-10">
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link active" href="#/">1</a></li>
                            <li class="page-item"><a class="page-link" href="#/">2</a></li>
                            <li class="page-item"><a class="page-link" href="#/">3</a></li>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="#/" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Pagination End -->
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
