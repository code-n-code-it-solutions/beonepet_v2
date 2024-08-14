<x-layouts.website-layout title="FAQs">
    <style>
        .breadcrumb-area {
            position: relative;
            padding: 100px 0;
            color: #ffffff;
            text-align: center;
        }

        .breadcrumb-wrapper {
            z-index: 2;
            position: relative;
        }

        .breadcrumb-title {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .breadcrumb-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .breadcrumb-list li {
            font-size: 1rem;
        }

        .breadcrumb-list li a {
            color: #ffffff;
            text-decoration: none;
        }

        .hero-image {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .hero-image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 15px;
        }

    </style>

    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright" style="background-image: url('{{asset('assets/images/faqs/faq-hero-bg.webp')}}'); background-size: cover; background-position: center; height: 379px">
        <div class="container">
            <div class="row">
                    <div class="d-flex justify-content-start align-items-center py-5">
                        <h2 class="breadcrumb-title text-white text-start" style="font-size: 3rem">
                            DUDAS Y <br> PREGUNTAS
                        </h2>
                    </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Faq Section Start -->
    <div class="section section-margin">
        <!-- Accordion area -->
        <div class="accordion_area">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-md-12 mb-8">
                        <!-- Accordion Start -->
                        <div id="accordionExample" class="accordion">
                            @foreach($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{$loop->index}}">
                                        <button class="accordion-button {{$loop->first ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$loop->index}}" aria-expanded="{{$loop->first ? 'true' : 'false'}}" aria-controls="collapse-{{$loop->index}}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{$loop->index}}" class="accordion-collapse collapse {{$loop->first ? 'show' : ''}}" aria-labelledby="heading-{{$loop->index}}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {!! $faq['answer'] !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Accordion End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Accordion area end -->
    </div>

    <!-- Faq Section End -->
</x-layouts.website-layout>
