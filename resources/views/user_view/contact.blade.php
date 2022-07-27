@extends('user_view.user_master')
@section('user')
    <!-- Header Banner -->
    <section class="banner-header banner-img banner-img-top section-padding valign bg-img bg-fixed banner-overlay" data-overlay-darkgray="1" data-background="{{ asset('user_style/img/banner/6.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left caption">
                    <h1>Contact </h1>
                    <hr class="border-1" />
                    <p>Praesent sed nisl ullamcorper _____ utah phare mavna busnini _______ the ornare ipsum. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact section-padding bg-cross">
        <div class="container">
            <div class="row mb-120">
                <div class="col-md-5 mb-60 animate-box" data-animate-effect="fadeInUp">
                    <h5>Information </h5>
                    <p class="mb-30">Praesent sed nisl ullamcorper ___ drana duru metus utah _____ mavna busnini viventa the ______ ipsum. </p>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="{{ asset('user_style/img/icons/c1.svg') }}" alt="" /></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Call us </div>
                            <div class="contact-link-text">+1 203-123-0606 </div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="{{ asset('user_style/img/icons/c2.svg') }}" alt="" /></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Send us an email </div>
                            <div class="contact-link-text">info@phoxel.com </div>
                        </div>
                    </div>
                    <div class="contact-link">
                        <div class="contact-link-icon"><img src="{{ asset('user_style/img/icons/c3.svg') }}" alt="" /></div>
                        <div class="contact-link-content">
                            <div class="contact-link-title">Visit our office </div>
                            <div class="contact-link-text">24 King St, Charleston, 29401 USA </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="form-box">
                        <h5>Get in touch </h5>
                        <form method="post" class="contact__form" action="mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent ____________.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required="" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required="" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required="" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required="" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required=""></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message" />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-20">
                    <h2 class="section-title">Frequently Asked Questions </h2>
                    <p class="section-title2">Quisque sed tellus nullam _____ the volutpat dignissim pretium. </p>
                </div>
            </div>
            <div class="row">
                <!-- Accordion -->
                <div class="col-md-8 offset-md-2 faqs-accordion mb-30">
                    <div class="accordion">
                        <div class="item">
                            <div class="title">
                                <h6>Are you open for ___ projects or commissions? </h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat ___ proident, sunt in culpa ___ officia deserunt mollit anim __ est laborum. Duis aute _____ dolor in reprehenderit in _________ velit esse cillum nulla. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Do you offer photography ____ abroad? </h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat ___ proident, sunt in culpa ___ officia deserunt mollit anim __ est laborum. Duis aute _____ dolor in reprehenderit in _________ velit esse cillum nulla. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Where are you currently _______? </h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat ___ proident, sunt in culpa ___ officia deserunt mollit anim __ est laborum. Duis aute _____ dolor in reprehenderit in _________ velit esse cillum nulla. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="title">
                                <h6>Are you open for _________/________ work? </h6>
                            </div>
                            <div class="accordion-info">
                                <p>Excepteur sint occaecat cupidatat ___ proident, sunt in culpa ___ officia deserunt mollit anim __ est laborum. Duis aute _____ dolor in reprehenderit in _________ velit esse cillum nulla. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{ asset('user_style/img/banner/2.jpg') }}" data-overlay-dark="3">
            <div class="container">
                <div class="row">
                    <!-- Work together -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h5>Need help with professional ___________? Let's work together! </h5>  <a href="contact.html" class="button-tersiyer">Contact me </a>
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item">  <span class="quote"><img src="{{ asset('user_style/img/quot.png') }}" alt="" /></span>
                                    <p class="v-border">Photographers viverra tristique duis _____ dias the nesue niva ______ ateuene artines duruna setlie _______ fermen. Quisque sed tellus ___ lorem nullam dururana tortor _____ porta. </p>
                                    <div class="info">
                                        <div class="author-img">  <img src="{{ asset('user_style/img/team/1.jpg') }}" alt="" />  </div>
                                        <div class="cont">
                                            <h6>Jason Brown </h6>  <span>Project Owner </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">  <span class="quote">
                                         <img src="img/quot.png" alt="" />
                                     </span>
                                    <p class="v-border">Photographers viverra tristique duis _____ dias the nesue niva ______ ateuene artines duruna setlie _______ fermen. Quisque sed tellus ___ lorem nullam dururana tortor _____ porta. </p>
                                    <div class="info">
                                        <div class="author-img">  <img src="{{ asset('user_style/img/team/2.jpg') }}" alt="" />  </div>
                                        <div class="cont">
                                            <h6>Emily White </h6>  <span>Project Owner </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/1.png') }}" alt="" /></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/2.png') }}" alt="" /></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/3.png') }}" alt="" /></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/4.png') }}" alt="" /></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/5.png') }}" alt="" /></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('user_style/img/clients/6.png') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
