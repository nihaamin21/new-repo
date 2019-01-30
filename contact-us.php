<?php /* Template Name: Contact us */
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

        <section class="contact-page">
            <div class="container">
                <div class="row ">
                    <div class="col-md-9">
                        <div class="contact-form">
                            <h3>Feel Free to Contact us</h3>
                            <ul class="cform">
                                <li class="half pr-15">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" class="form-control" placeholder="Email">
                                </li>
                                <li class="half pr-15">
                                    <input type="text" class="form-control" placeholder="Contact">
                                </li>
                                <li class="half pl-15">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </li>
                                <li class="full">
                                    <textarea class="textarea-control" placeholder="Message"></textarea>
                                </li>
                                <li class="full">
                                    <input type="submit" value="Contact us" class="fsubmit">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container contact-info">
                        <div class="row map">
                            <div class="col-md-12">
                                <h3>Contact Information</h3>
                            </div>
                            <!--Contact Info Start-->
                            <div class="col-md-4">
                                <div class="c-info">
                                    <h6>Address:</h6>
                                    <p> 4700 Millenia Basvd # 143, Abcdef, FL 123456, Chandigarh </p>
                                </div>
                            </div>
                            <!--Contact Info End-->
                            <!--Contact Info Start-->
                            <div class="col-md-4">
                                <div class="c-info">
                                    <h6>Contact:</h6>
                                    <p><strong>Phone:</strong> +1 234 2345 678-9</p>
                                    <p><strong>Fax:</strong> +1 321 2345 876-7</p>
                                </div>
                            </div>
                            <!--Contact Info End-->
                            <!--Contact Info Start-->
                            <div class="col-md-4">
                                <div class="c-info">
                                    <h6>For More Information:</h6>
                                    <p><strong>Email:</strong> info@test.com</p>
                                    <p>contact@test.com</p>
                                </div>
                            </div>
                            <!--Contact Info End-->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109741.02912911311!2d76.69348873658222!3d30.73506264436677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1546673926029"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </section>

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