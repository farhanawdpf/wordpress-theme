<?php /* Template Name: Services */ ?>
<?php get_header() ?>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'menu_class'     => 'navbar-nav ms-auto py-0',
                'container'      => false,
                'walker'         => new WP_Bootstrap_Navwalker(),
            ));
            ?>

            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Services</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Services</a>
            </div>
        </div>
    </div>
</div>

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"><?php echo get_theme_mod('our_services_title1', 'Our Services') ?></h5>
            <h1 class="mb-0"><?php echo get_theme_mod('our_services_title2', 'Custom IT Solutions for Your Successful Business') ?></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3"><?php echo get_theme_mod('our_services_sub_title1', 'Cyber Security') ?></h4>
                    <p class="m-0"><?php echo get_theme_mod('our_services_sub_details_1', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed') ?></p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3"><?php echo get_theme_mod('our_services_sub_title2', 'Data Analytics') ?></h4>
                    <p class="m-0"><?php echo get_theme_mod('our_services_sub_details_1', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed') ?></p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3"><?php echo get_theme_mod('our_services_sub_title3', 'Web Development') ?></h4>
                    <p class="m-0"><?php echo get_theme_mod('our_services_sub_details_1', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed') ?></p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3"><?php echo get_theme_mod('our_services_sub_title4', 'Apps Development') ?></h4>
                    <p class="m-0"><?php echo get_theme_mod('our_services_sub_details_1', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed') ?></p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3"><?php echo get_theme_mod('our_services_sub_title5', 'SEO Optimization') ?></h4>
                    <p class="m-0"><?php echo get_theme_mod('our_services_sub_details_1', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed') ?></p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3"><?php echo get_theme_mod('our_services_quote_title', 'Call Us For Quote') ?></h3>
                    <p class="text-white mb-3"><?php echo get_theme_mod('our_services_quote_dettails', 'Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod') ?></p>
                    <h2 class="text-white mb-0"><?php echo get_theme_mod('our_services_quote_phone', '+880 1521330864') ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
            <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <?php
            // Clients loop starts here
            $clients = new WP_Query(
                array(
                    'post_type' => 'clients',
                    'posts_per_page' => 10,
                )
            );
            while ($clients->have_posts()) : $clients->the_post();
            ?>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url() ?>" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"><?php the_title() ?></h4>
                            <small class="text-uppercase"><?php the_excerpt() ?></small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        <?php the_content() ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            //Client loop ends here
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <?php
                // Vendors loop starts here
                $vendors = new WP_Query(
                    array(
                        'post_type' => 'custom_vendors',
                        'posts_per_page' => 10,
                    )
                );
                while ($vendors->have_posts()) : $vendors->the_post();
                ?>
                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">

                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
<?php get_footer() ?>