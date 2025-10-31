@extends('layouts.frontend')
@section('title') Contact Us | The Bookify @endsection
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
                                <img src="/frontend/images/contact-info-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>call us any time!</h3>
                                <p>551-348-1040</p></br>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="/frontend/images/contact-info-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>send us e-mail</h3>
                                <p>info@thebookify.com</p></br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-info-img">
                            <figure class="image-anime">
                                <img src="/frontend/images/contact-info-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="contact-info-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>finance office address</h3>
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
                            <img src="/frontend/images/contact-us-img.jpg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get in Touch <span>with Us</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need assistance? Reach out to us today! We're here to provide expert solutions and friendly support.</p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone no" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail address" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-5">
                                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">send message</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection