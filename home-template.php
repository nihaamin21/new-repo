<?php
/**
 * Template Name: Home Template
 *
 * A custom page template for Full Width Page.
 */

get_header(); ?>
        <section id="features" class="features top-section">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                        <h2>Features</h2>
                        <div class="devider"><i class="far fa-heart"></i></div>
                    </div>
                    <div class="services">
                        <!-- service item -->
                        <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fab fa-github"></i>
                                </div>

                                <div class="service-desc">
                                    <h3>Branding</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->

                        <!-- service item -->
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>

                                <div class="service-desc">
                                    <h3>Development</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->

                        <!-- service item -->
                        <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>

                                <div class="service-desc">
                                    <h3>Consulting</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
                                </div>
                            </div>
                        </div>
                        <!-- end service item -->
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>