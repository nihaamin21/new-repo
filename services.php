<?php /* Template Name: Services */
get_header(); ?>


<main>
    <header class="bg-img" id="bg-size">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form> -->
            </div>
        </nav>

    </header>
    <div class="heading">SERVICES</div>
    <div class="card-group">
        <div class="card" id="card-1">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/1.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" id="card-2">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                    content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" id="card-3">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/3.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card" id="card-4">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/4.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" id="card-5">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/5.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                    content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card" id="card-6">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url'); ?>/images/6.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional
                    content. </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>

    <!-- <div class="card-footer">

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center">
                        Copyright © 2015. All rights reserved.
                    </p>
                </div>
                <div class="row">
                    <div class="social-icon">
                        <a href="http://"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://"><i class="fab fa-twitter"></i></a>
                        <a href="http://"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
</main>



<?php get_footer(); ?>