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