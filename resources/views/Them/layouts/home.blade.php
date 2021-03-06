@extends('Them.layouts.master')


@push('head')

@endpush

@section('content')
    <!-- import content layouts and modules -->
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- import content layouts and modules -->
                <!-- start adding page content -->
                <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">welcome logistics</p>
                        <h1 class="heading-title style-3"> freight company with logistics
                            <br> difference.
                            <span class="has-text-primary">innovation</span>
                        </h1>
                        <br>
                        <br>
                        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./pages/about.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/blog/1.png') }}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="./pages/about.html">our expert staff</a>
                                        </h2>
                                    </div>
                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <p>The main component of a healthy for self esteem is that it needs be
                                            nurturing. It should provide warmth..</p>
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="entry-footer">
                                        <a href="./pages/about.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./pages/about.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/blog/2.png') }}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="./pages/about.html">logistic services</a>
                                        </h2>
                                    </div>
                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <p>The main component of a healthy for self esteem is that it needs be
                                            nurturing. It should provide warmth..</p>
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="entry-footer">
                                        <a href="./pages/about.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./pages/about.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/blog/3.png') }}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="./pages/about.html">ground shipping</a>
                                        </h2>
                                    </div>
                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <p>The main component of a healthy for self esteem is that it needs be
                                            nurturing. It should provide warmth..</p>
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="entry-footer">
                                        <a href="./pages/about.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
                <section id="tracking" class="section tracking-section is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">tracking</p>
                        <h1 class="heading-title style-3">track your shipment</h1>
                        <div class="columns is-mobile is-centered">
                            <div class="column is-10" data-aos="fade-up">
                                <div class="subscribe-form style-1">
                                    <form>
                                        <div class="field has-addons has-addons-centered is-grouped">
                                            <div class="control">
                                                <input class="input" type="text"
                                                    placeholder="Type your tracking number">
                                            </div>
                                            <div class="control">
                                                <a href="#" class="button">
                                                    <span>Track it</span>
                                                    <span class="icon is-small">
                                                        <i class="icon-target"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p class="help"> separate multiple tracking numbers with a space or
                                    comma.
                                    <a href="#">Advanced Tracking</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="services" class="section services-section has-background-primary-light is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-multiline is-4">
                            <div class="column is-5-desktop is-12-tablet">
                                <p class="heading-title-top">logistics services</p>
                                <h1 class="heading-title style-3 has-text-left">our special services</h1>
                            </div>
                            <div class="column is-7-desktop is-12-tablet">
                                <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
                            </div>
                        </div>
                        <br>
                        <div class="columns is-variable is-4 is-multiline boxes-style-2">
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/4.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">land transport</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/3.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">ocean freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/1.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">warehousing</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/3.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">ocean freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/4.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">land transport</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/icons/2.png') }}"> </a>
                                    <h3>
                                        <a href="./pages/services.html">air freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section watch-video is-clearfix">
                    <div class="container">
                        <br>
                        <br>
                        <div class="columns is-variable is-8 is-multiline">
                            <div class="column is-6-desktop is-12-tablet has-text-centered" data-aos="fade-up">
                                <div class="works-latest">
                                    <div class="works-latest-item">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/global/introduction.png') }}">
                                        <div class="works-latest-item-icon style-2">
                                            <a href="https://www.youtube.com/watch?v=jc4y2Xqerj0"
                                                class="mfp-lightbox mfp-iframe">
                                                <span class="icon ripple-effect">
                                                    <i class="ion-ios-play"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- .works-latest-icon -->
                                    </div>
                                    <!-- .works-latest-item -->
                                </div>
                            </div>
                            <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                                <br>
                                <h1 class="heading-title style-3 has-text-left"> local pickup with logistics
                                    <br> services of any
                                    <span class="has-text-primary">cargo.</span>
                                </h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus
                                    ultrices eleifend gravi, nulla nunc varius lectus, nec rutrum justo nibh eu
                                    lectus metus ultrices.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus
                                    ultrices eleifend gravi.</p>
                                <br>
                                <div class="level">
                                    <div class="level-left">
                                        <h4>Mohamed Saad
                                            <br>
                                            <span>CEO & Founder</span>
                                        </h4>
                                    </div>
                                    <div class="level-right">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template"
                                            src="{{ asset('assets/images/global/mark.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
                <section class="hero fun-facts is-clearfix">
                    <div class="hero-body">
                        <h2 class="display-none">funfacts</h2>
                        <nav class="level counterup style-5">
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">340</p>
                                    <p class="heading">years of experience</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">120</p>
                                    <p class="heading">branches over world</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">230</p>
                                    <p class="heading">tonnes transported</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">110</p>
                                    <p class="heading">countries covered</p>
                                </div>
                            </div>
                        </nav>
                    </div>
                </section>
                <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">tracking</p>
                        <h1 class="heading-title style-3">how we work</h1>
                        <br>
                        <br>
                        <div class="steps" data-aos="fade-right">
                            <div class="step-item" data-step-id="0">
                                <div class="step-marker"> 1 </div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item active" data-step-id="1">
                                <div class="step-marker">2</div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item" data-step-id="2">
                                <div class="step-marker">3</div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item" data-step-id="3">
                                <div class="step-marker"> 4 </div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="news" class="section news-section is-clearfix">
                    <div class="container">
                        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                            <div class="column is-4" data-aos="fade">
                                <div class="blog-post-heading">
                                    <p class="heading-title-top">latest news</p>
                                    <h1 class="heading-title style-3 has-text-left"> Lorem ipsum is
                                        <span class="has-text-primary">simply</span>
                                    </h1>
                                    <p>Lorem ipsum dolor sit amet is, consectetur adipiscing. Nulla accumsan, metus
                                        ultrices ele gravi, nulla nunc varius.</p>
                                    <a href="./blog/index.html" class="button">Our blog
                                        <span class="icon">
                                            <i class="ion-ios-arrow-round-forward"></i>
                                        </span>
                                    </a>
                                </div>
                                <!-- .blog-post -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./blog/single.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/blog/4.png') }}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span>APRIL 5, 2018</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="./blog/single.html">Self Motivation How To Keep Land
                                                Transport</a>
                                        </h2>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="./blog/single.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./blog/single.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/blog/5.png') }}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span>APRIL 5, 2018</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="./blog/single.html">Self Motivation How To Keep Land
                                                Transport</a>
                                        </h2>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="./blog/single.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                        </div>
                    </div>
                </section>
                <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">testimonial</p>
                        <h1 class="heading-title style-3">clients feedback</h1>
                        <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/1.png') }}">
                                <h3>mohamed ahmed
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/2.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/3.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/1.png') }}">
                                <h3>mohamed ahmed
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/2.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/3.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/1.png') }}">
                                <h3>mohamed ahmed
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/2.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                            <div class="testimonials-item">
                                <p>Any time we start something new it is exciting and we are very motivated and
                                    committed. As time goes by</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/testimonials/3.png') }}">
                                <h3>olivia allison
                                    <br>
                                    <span>CEO & stylist</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-2 is-multiline">
                            <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                                <h1 class="heading-title style-3 has-text-left"> request a
                                    <span class="has-text-primary">quote</span>
                                </h1>
                                <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
                                <!-- successful form message -->
                                <div class="overhang-message-content is-hidden success">
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> Thank You! Your message was sent successfully.
                                </div>
                                <!-- error form message -->
                                <div class="overhang-message-content is-hidden error">
                                    <span class="icon">
                                        <i class="ion-md-notifications"></i>
                                    </span> Oops! Something went wrong, we couldn't send your message.
                                </div>
                                <!-- ajax contact form -->
                                <form accept-charset="UTF-8" class="ajax-contact-form"
                                    action="https://usebasin.com/f/3587049dbc33.json" method="POST">
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="name"
                                                        placeholder="Name" required>
                                                </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="email" name="email"
                                                        placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <!-- .field -->
                                        </div>
                                        <!-- .field-body -->
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="subject"
                                                        placeholder="Subject" required="">
                                                </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <div class="select">
                                                        <select>
                                                            <option>Air Freight</option>
                                                            <option>Land Transport</option>
                                                            <option>Ocean Freight</option>
                                                            <option>Warehousing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- .field -->
                                            </div>
                                            <!-- .field-body -->
                                        </div>
                                    </div>
                                    <div class="field ">
                                        <div class="control is-expanded">
                                            <textarea class="textarea" name="textarea" placeholder="Message"
                                                required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="field ">
                                        <div class="control">
                                            <button class="button" type="submit">request a quote</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="column is-6-desktop is-12-tablet" data-aos="fade-up" data-aos-delay="600">
                                <br>
                                <br>
                                <br>
                                <br>
                                <img alt="Joo - Niche Multi-Purpose HTML Template"
                                    src="{{ asset('assets/images/global/man.png') }}">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
    <div id="footer-top-wrap" class="is-clearfix">
        <div id="footer-top" class="site-footer-top">
            <div id="footer-top-inner" class="site-footer-top-inner ">
                <section class="hero clients-section is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-4 is-multiline">
                            <div class="column is-2-desktop is-12-tablet">
                                <h1 class="heading-title style-3 has-text-left">our partners</h1>
                            </div>
                            <div class="column is-10-desktop is-12-tablet">
                                <nav class="clients-list level  owl-carousel no-dots carousel-items-5">
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/7.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/8.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/9.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/7.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/8.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/9.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/7.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/8.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/9.png') }}"> </a>
                                    </div>
                                    <div class="client-item has-text-centered level-item">
                                        <a href="#" target="_blank">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template"
                                                src="{{ asset('assets/images/clients/7.png') }}"> </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #footer-top-inner -->
        </div>
        <!-- #footer-top -->
    </div>

@endsection

@push('js')

@endpush
