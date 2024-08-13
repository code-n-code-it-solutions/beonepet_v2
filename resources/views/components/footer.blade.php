<!-- Footer Section Start -->
<footer class="section footer-section">
    <!-- Footer Top Start -->
    <div class="footer-top bg-bright section-padding">
        <div class="container">
            <div class="row mb-n8">
                <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1000">
                    <div class="single-footer-widget">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/images/logo/beonepet-logo.svg')}}" class="mb-3" width="160" alt="Site Logo"/>
                        </a>
                        <p class="desc-content">
                            Única plataforma digital en Costa Rica, dedicada 100% al nicho de mercado de los animales.
                        </p>
                        <!-- Soclial Link Start -->
                        <div class="widget-social justify-content-start mb-n2">
                            <a title="Instagram" href="https://www.instagram.com/beonepets" target="_blank">
                                <i class="icon-social-instagram"></i>
                            </a>
                            <a title="Linkedin" href="https://www.facebook.com/beonepets/" target="_blank">
                                <i class="icon-social-facebook"></i>
                            </a>
                            <a title="Skype" href="https://www.youtube.com/@BeOnePets" target="_blank">
                                <i class="icon-social-youtube"></i>
                            </a>
                            <a title="Dribble" href="https://www.tiktok.com/@beone.pets" target="_blank">
                                <img src="{{asset('assets/fonts/custom-icon/tiktok-thin.svg')}}"
                                     class="icon-social-tiktok" style="height: 15px;width: 15px;" alt="tiktok icon"/>
                            </a>
                        </div>
                        <!-- Social Link End -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1200">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">Useful Links</h2>
                        <ul class="widget-list">
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{route('planes')}}">Planes</a></li>
                            <li><a href="{{route('about-us')}}">Nosotros</a></li>
                            <li><a href="{{route('privacy-policy')}}">Política de privacidad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1400">
                    <div class="single-footer-widget aos-init aos-animate">
                        <h2 class="widget-title">Help</h2>
                        <ul class="widget-list">
                            <li><a href="{{route('contact-us')}}">Help & Contact Us</a></li>
                            <li><a href="{{route('faqs')}}">FAQ</a></li>
                            <li><a href="{{route('terms-and-conditions')}}">Términos y condiciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-8" data-aos="fade-up" data-aos-duration="1600">
                    <div class="single-footer-widget">
                        <h2 class="widget-title">QUÉDATE CONECTAD@</h2>
                        <div class="widget-body">
                            <p class="desc-content mb-4">
                                Subscríbite al boletín para recibir las mejores noticias
                            </p>
                            <!-- Newsletter Form Start -->
                            <div class="newsletter-form-wrap pt-1">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" id="mc-email" class="form-control email-box"
                                           placeholder="abc@xyz.com" name="EMAIL">
                                    <button id="mc-submit" class="newsletter-btn" type="submit">
                                        Unirme
                                    </button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                            <!-- Newsletter Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->
</footer>
<!-- Footer Section End -->
