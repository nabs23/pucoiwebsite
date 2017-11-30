@extends('layouts.minimall')

@section('content')


<!-- MAIN -->
<main class="main-container">


    <!-- SECTION: About -->
    <section id="about" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-left">
                        <h2 class="section-title">About</h2>
                        <p class="section-subtitle text-muted">A few words about us</p>
                    </header>
                </div>
            </div><!-- Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-4 column-pv">

                    <p class="text-big text-muted text-270deg">About</p>

                    <!-- Video link -->
                    <a href="http://www.youtube.com/watch?v=uVju5--RqtY" class="iframe-popup about-video">
                        <i class="fa fa-3x fa-video-camera"></i>
                        See video
                    </a><!-- /Video link -->

                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-8">
                    <div class="row">

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Web-Design</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                            <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Photography</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                            <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Photography</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                            <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Frontend Development</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                            <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        </div><!-- /Information block -->

                    </div>
                </div><!-- /Right column -->

            </div><!-- /Section content -->


        </div>
    </section><!-- END OF SECTION: About -->


    <!-- SECTION: Features -->
    <section id="features" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-right">
                        <p class="section-subtitle text-muted">Some features</p>
                        <h2 class="section-title">Features</h2>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-8">
                    <div class="row">

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>HTML5 & CSS3</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Easy To Customize</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Google Fonts</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Information block -->

                        <!-- Information block -->
                        <div class="col-md-6 column-pv">
                            <h3>Font Awesome Icons</h3>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Information block -->

                    </div>
                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-4">
                    <p class="text-big text-muted text-90deg">Features</p>
                </div><!-- /Right column -->

            </div><!-- /Section content -->

        </div>
    </section><!-- END OF SECTION: Features -->


    <!-- SECTION: Portfolio -->
    <section id="portfolio" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-left">
                        <h2 class="section-title">Portfolio</h2>
                        <p class="section-subtitle text-muted">Our latest works</p>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-4 column-pv">

                    <p class="text-big text-muted text-270deg">Portfolio</p>

                    <!-- Portfolio filters -->
                    <ul class="portfolio-filters">
                        <li><button class="portfolio-filter-button portfolio-filter-button-active" data-filter="*">All</button></li>
                        <li><button class="portfolio-filter-button" data-filter=".photography">Photography</button></li>
                        <li><button class="portfolio-filter-button" data-filter=".web-design">Web-Design</button></li>
                        <li><button class="portfolio-filter-button" data-filter=".creative">Creative</button></li>
                    </ul><!-- /Portfolio filters -->

                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-8 column-pv">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">

                                <!-- Portfolio image -->
                                <a href="#portfolio-image-1" class="portfolio-item photography">
                                    <img src="images/portfolio-image-photo-1-thumb.jpg" alt="Portfolio Image">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-text">
                                            <h3>Title</h3>
                                            <span class="portfolio-category text-muted">@ Photography</span>
                                        </div>
                                    </div>
                                </a><!-- /Portfolio image -->

                                <!-- Portfolio image modal -->
                                <div id="portfolio-image-1" class="portfolio-modal mfp-hide">
                                    <header class="header header-left">
                                        <h3 class="section-title">Title</h3>
                                        <p class="section-subtitle text-muted">Photography</p>
                                    </header>
                                    <div class="portfolio-modal-image column-mt">
                                        <img src="images/portfolio-image-photo-1.jpg" alt="Portfolio image">
                                    </div>
                                </div><!-- /Portfolio image modal -->


                                <!-- Portfolio image -->
                                <a href="#portfolio-image-2" class="portfolio-item web-design">
                                    <img src="images/portfolio-image-web-1-thumb.jpg" alt="Portfolio Image">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-text">
                                            <h3>Title</h3>
                                            <span class="portfolio-category text-muted">@ Web-Design</span>
                                        </div>
                                    </div>
                                </a><!-- /Portfolio image -->

                                <!-- Portfolio image modal -->
                                <div id="portfolio-image-2" class="portfolio-modal mfp-hide">
                                    <header class="header header-left">
                                        <h3 class="section-title">Title</h3>
                                        <p class="section-subtitle text-muted">Web-Design</p>
                                    </header>
                                    <div class="portfolio-modal-image column-mt">
                                        <img src="images/portfolio-image-web-1.jpg" alt="Portfolio image">
                                    </div>
                                </div><!-- /Portfolio image modal -->


                                <!-- Portfolio image -->
                                <a href="#portfolio-image-3" class="portfolio-item photography">
                                    <img src="images/portfolio-image-photo-2-thumb.jpg" alt="Portfolio Image">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-text">
                                            <h3>Title</h3>
                                            <span class="portfolio-category text-muted">@ Photography</span>
                                        </div>
                                    </div>
                                </a><!-- /Portfolio image -->

                                <!-- Portfolio image modal -->
                                <div id="portfolio-image-3" class="portfolio-modal mfp-hide">
                                    <header class="header header-left">
                                        <h3 class="section-title">Title</h3>
                                        <p class="section-subtitle text-muted">Photography</p>
                                    </header>
                                    <div class="portfolio-modal-image column-mt">
                                        <img src="images/portfolio-image-photo-2.jpg" alt="Portfolio Image">
                                    </div>
                                </div><!-- /Portfolio image modal -->


                                <!-- Portfolio image -->
                                <a href="#portfolio-image-4" class="portfolio-item creative">
                                    <img src="images/portfolio-image-creative-1-thumb.jpg" alt="Portfolio Image 4">
                                    <div class="portfolio-overlay">
                                        <div class="portfolio-text">
                                            <h3>Title</h3>
                                            <span class="portfolio-category text-muted">@ Creative</span>
                                        </div>
                                    </div>
                                </a><!-- /Portfolio image -->

                                <!-- Portfolio image modal -->
                                <div id="portfolio-image-4" class="portfolio-modal mfp-hide">
                                    <header class="header header-left">
                                        <h3 class="section-title">Title</h3>
                                        <p class="section-subtitle text-muted">Creative</p>
                                    </header>
                                    <div class="portfolio-modal-image column-mt">
                                        <img src="images/portfolio-image-creative-1.jpg" alt="Portfolio Image">
                                    </div>
                                </div><!-- /Portfolio image modal -->


                            </div>
                        </div>

                    </div>
                </div><!-- /Right column -->

            </div><!-- /Section content -->

        </div>
    </section><!-- END OF SECTION: Portfolio -->


    <!-- SECTION: Testimonials -->
    <section id="testimonials" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-right">
                        <p class="section-subtitle text-muted">Our clients say</p>
                        <h2 class="section-title">Testimonials</h2>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-8">
                    <div class="row">

                        <!-- Testimonial block -->
                        <div class="col-md-6 testimonial column-pv">
                            <div class="testimonial-author">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-author-picture-1.jpg" alt="Jane Doe">
                                </div>
                                <h3>Jane Doe</h3>
                                <p class="testimonial-company text-muted">Company Name</p>
                            </div>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Testimonial block -->

                        <!-- Testimonial block -->
                        <div class="col-md-6 testimonial column-pv">
                            <div class="testimonial-author">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-author-picture-2.jpg" alt="John Doe">
                                </div>
                                <h3>John Doe</h3>
                                <p class="testimonial-company text-muted">Company Name</p>
                            </div>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Testimonial block -->

                        <!-- Testimonial block -->
                        <div class="col-md-6 testimonial column-pv">
                            <div class="testimonial-author">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-author-picture-3.jpg" alt="Joseph Doe">
                                </div>
                                <h3>Joseph Doe</h3>
                                <p class="testimonial-company text-muted">Company Name</p>
                            </div>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Testimonial block -->

                        <!-- Testimonial block -->
                        <div class="col-md-6 testimonial column-pv">
                            <div class="testimonial-author">
                                <div class="testimonial-image">
                                    <img src="images/testimonial-author-picture-4.jpg" alt="Jade Doe">
                                </div>
                                <h3>Jade Doe</h3>
                                <p class="testimonial-company text-muted">Company Name</p>
                            </div>
                            <p class="text-muted">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour.
                            </p>
                        </div><!-- /Testimonial block -->

                    </div><!-- /.row -->
                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-4">
                    <p class="text-big text-muted text-90deg">Testimonials</p>
                </div><!-- /Right column -->

            </div><!-- /Section content -->

        </div>
    </section><!-- END OF SECTION: Testimonials -->


    <!-- SECTION: Price -->
    <section id="price" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-left">
                        <h2 class="section-title">Price</h2>
                        <p class="section-subtitle text-muted">Best offers</p>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-4">
                    <p class="text-big text-muted text-270deg">Price</p>
                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-8">
                    <div class="row">

                        <!-- Offer -->
                        <div class="col-sm-6 col-xs-12 column-pv">
                            <div class="price-block">
                                <div class="row">
                                    <div class="price-popular">Popular</div>
                                    <div class="col-md-5">
                                        <div class="price-number">$19</div>
                                    </div>
                                    <div class="col-md-7">
                                        <h3>Base Plan</h3>
                                        <ul class="price-features">
                                            <li>First feature</li>
                                            <li>Second best feature</li>
                                        </ul>
                                        <button class="btn btn-colored price-btn" data-toggle="modal" data-target="#getfreetrial">Get Free Trial</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /Offer -->

                        <!-- Offer -->
                        <div class="col-sm-6 col-xs-12 column-pv">
                            <div class="price-block">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="price-number">$39</div>
                                    </div>
                                    <div class="col-md-7">
                                        <h3>Extended</h3>
                                        <ul class="price-features">
                                            <li>First feature</li>
                                            <li>Second best feature</li>
                                        </ul>
                                        <button class="btn btn-colored price-btn" data-toggle="modal" data-target="#getfreetrial">Get Free Trial</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /Offer -->

                        <!-- Get trial block -->
                        <div class="col-sm-12 column-pv">
                            <div class="row">

                                <!-- Block header -->
                                <div class="col-md-12">
                                    <h3>Get free trial</h3>
                                    <p class="text-muted">
                                        There are many variations of passages of Lorem Ipsum available
                                    </p>
                                </div><!-- /Block header -->

                                <!-- Form -->
                                <form method="post" class="form-ajax">
                                    <input type="hidden" name="form" value="Get Free Trial">
                                    <div class="col-md-5 column-mt underline">
                                        <input type="text" class="form-control" placeholder="Your name... *" required>
                                    </div>
                                    <div class="col-md-5 column-mt underline">
                                        <input type="email" class="form-control" placeholder="E-mail address... *" required>
                                    </div>
                                    <div class="col-md-2 column-mt">
                                        <button type="submit" class="btn btn-colored">Get free</button>
                                    </div>
                                </form><!-- /Form -->

                            </div>
                        </div><!-- /Get trial block -->


                    </div><!-- /.row -->
                </div><!-- /Right column -->

            </div><!-- /Section content -->

        </div>
    </section><!-- END OF SECTION: Price -->


    <!-- SECTION: Contact -->
    <section id="contact" class="section">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-md-12">
                    <header class="header header-right">
                        <p class="section-subtitle text-muted">information</p>
                        <h2 class="section-title">Contact</h2>
                    </header>
                </div>
            </div><!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">

                <!-- Left column -->
                <div class="col-md-8 column-pv">

                    <!-- Form -->
                    <form class="form-ajax">
                        <input type="hidden" name="form" value="Contact">
                        <div class="row">
                            <div class="form-group col-md-6 underline">
                                <input type="text" name="name" class="form-control" placeholder="Your Name... *" required>
                            </div>
                            <div class="form-group col-md-6 underline">
                                <input type="email" name="email" class="form-control" placeholder="E-mail address... *" required>
                            </div>
                        </div>
                        <div class="row column-mt">
                            <div class="form-group col-md-12 underline">
                                <textarea name="message" class="form-control" placeholder="Message... "></textarea>
                            </div>
                        </div>
                        <div class="row column-mt">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-colored">Send Message</button>
                            </div>
                        </div>
                    </form><!-- /Form -->

                </div><!-- /Left column -->

                <!-- Right column -->
                <div class="col-md-4 sideline column-pv">

                    <p class="text-big text-muted text-90deg">Contact</p>

                    <!-- Contact information -->
                    <ul class="contact-information">
                        <li class="contact-logo"><a href="#"><img src="images/logo.png" alt="Company Name"></a></li>
                        <li><a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="iframe-popup"><i class="fa fa-map-marker"></i>221B Baker St, Marylebone, London NW1</a></li>
                        <li><a href="mailto:clients@example.com"><i class="fa fa-envelope"></i>clients@example.com</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>+1 (555) 123-8877</a></li>
                    </ul><!-- /Contact information -->

                </div><!-- /Right column -->

            </div><!-- /Section content -->

        </div>
    </section><!-- END OF SECTION: Contact -->

    <!-- MODAL: Result Message -->
<div class="modal fade" id="result" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title">Send Message</div>
            </div>
            <div class="modal-body">
                <p class="modal-result"></p>
            </div>
        </div>
    </div>
</div>
<!-- END OF MODAL: Result Message -->


</main>
<!-- END OF MAIN -->

@endsection