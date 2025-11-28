@extends('layouts.frontend')
@section('title') Contact Us | The Bookify @endsection
@section('meta_description') Get in touch with The Bookify for expert support in accounting, bookkeeping, tax services and business finance. Our team is here to assist you with fast, reliable help. @endsection
@section('content')
 <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact us</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="/frontend/images/contact-info-img-1.jpg" alt="contact-info">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="icon-phone">
                            </div>
                            <div class="contact-info-content">
                                <h3>Call us any time!</h3>
                                <p><a href="tel:+15513481040" style="color: inherit; text-decoration: none;">+1(551) 348-1040</a></p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="/frontend/images/contact-info-img-2.jpg" alt="contact-info">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="icon-mail">
                            </div>
                            <div class="contact-info-content">
                                <h3>send us e-mail</h3>
                                <p><a href="mailto:info@the-bookify.com" style="color: inherit; text-decoration: none;">info@the-bookify.com</a></p></br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="/frontend/images/contact-info-img-1.jpg" alt="contact-info">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="icon-location">
                            </div>
                            <div class="contact-info-content">
                                <h3>office address</h3>
                                <p>101 Hudson St 21st Floor Jersey City, NJ 07302</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

   
     <div class="contact-form-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-form-img">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/contact-us-img.jpg" alt="contact-us">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Raise Your <span>Query </span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need assistance? Reach out to us today! We're here to provide expert solutions and friendly support.</p>
                    </div>

                    <div class="contact-form">
                        
                    <form action="{{ route('contact-enquiry') }}" enctype="multipart/form-data" method="POST" id="contactForm" class="wow fadeInUp" data-wow-delay="0.5s" data-toggle="validator">
                     @csrf   
                    <div class="row">
                        <input type="hidden" name="enquiry_type" id="enquiry_type" value="Contact Us">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full name*">
                                <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone no*">
                                <div class="field_error" id="mobile-error" style="color:#ff0000;"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail address*">
                                <div class="field_error" id="email-error" style="color:#ff0000;"></div>
                            </div>
                            
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject*">
                                <div class="field_error" id="subject-error" style="color:#ff0000;"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                            </div>

                            <!-- reCAPTCHA Section -->
                            <div class="form-group col-md-12 mb-4 text-center">
                                <div class="d-inline-block">
                                    <div class="g-recaptcha" data-sitekey="6Lf5KxMsAAAAAPmSX6ShrBobBt-I0g2OqOa762Kf"></div>
                                   
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group col-md-12 text-center">
                                <button type="submit" class="btn-default">Send Message</button>
                            </div>
                        </div>
                    </form>

                    <!-- Google reCAPTCHA Script -->
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                    </div>
                </div>
            </div>
        </div>
     </div>


    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map-iframe">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12097.154174778707!2d-74.04308299222059!3d40.7116641065523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250a923468545%3A0x33061d7e4bf658c9!2s101%20Hudson%20St%2021st%20floor%2C%20Jersey%20City%2C%20NJ%2007302%2C%20USA!5e0!3m2!1sen!2sin!4v1762444814625!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> 


@endsection