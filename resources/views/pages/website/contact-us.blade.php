<x-layouts.website-layout title="Contact Us">
    <!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Contacto</h2>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Get in Touch</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <form action="https://htmlmail.hasthemes.com/rezaul/amber.php" id="contact-form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Your Name *" name="name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="email" placeholder="Email *" name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                <input class="input-item" type="text" placeholder="Subject *" name="subject">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-8">
                                                <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-hover-dark">Send Message</button>
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">CONTÁCTANOS</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>
                            Amamos a nuestros clientes. No dude en contactarnos en cualquier momento. Estamos disponibles por correo electrónico, chat o teléfono.
                        </p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="tel:50661690888">+506 6169-0888</a></li>
                                <li><i class="fa fa-whatsapp"></i> <a href="wa.me/+50661690888">+506 6169-0888</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@beonepet.com">info@beonepet.com </a></li>
                            </ul>
                        </address>

                        <div class="working-time">
                            <h6 class="title">Working Hours</h6>
                            <p style="margin: 0">Lunes a viernes. 8:00 am a 7:00 pm</p>
                            <p>Sábado a domingo. 8:00 am a 4:00 p.m</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->
</x-layouts.website-layout>
