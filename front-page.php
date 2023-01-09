<?php get_header(); ?>
<main>
        <section class="home-hero">
            <div class="container">
                <div class="hero-banner">
                    <div class="banner-content">
                        <?php if(get_field('hero_section_title')): ?>
                            <h1><?php the_field('hero_section_title'); ?></h1>
                        <?php endif; ?>

                        <div class="iconlist">
                            <?php if( have_rows('home_page_icon_list') ): ?>
                                <?php while( have_rows('home_page_icon_list') ): the_row(); ?>

                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content"><?php the_sub_field('icon_list'); ?></span></p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="banner cta">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                            <button class="secondary-cta"><a href="#">How it works</a></button>

                        </div>

                        <div class="we-buy">

                        <?php if(get_field('we_buys')): ?>
                            <h3><?php the_field('we_buys'); ?></h3>
                        <?php endif; ?>

                        <div class="brands">
                            <?php 
                            $car_brands_logos=get_field('car_brands_logos');
                            
                            if($car_brands_logos){
                                foreach($car_brands_logos as $car_brand_logo){
                            ?>
                                <div class="brands-img"><img src="<?php echo $car_brand_logo['car_brand_logo']['url'];?>" alt="<?php echo $car_brand_logo['car_brand_logo']['alt'];?>"></div>
                                <?php } }; ?>
                            </div>
                        </div>
                    </div>
                    <div class="banner-image">
                        <img class="w3-animate-fading" src="<?php echo get_theme_file_uri('/img/hero-banner.png'); ?>" alt="banner image">
                    </div>
                </div>
            </div>
        </section>

        <section class="about hidden">
            <div class="container">
                <div class="about-banner">
                    <div class="first-half">
                    <?php if(get_field('about_title')): ?>
                        <h2><?php the_field('about_title'); ?></h2>
                        <?php endif; ?>

                        <?php if(get_field('about_desc')): ?>
                            <p><?php echo the_field('about_desc'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="second-half">
                    <?php echo do_shortcode('[activecampaign form=21 css=1]');?>
                    
                    </div>
                </div>
            </div>
        </section>

        <?php 
            $main_content=get_field('main_content');
                if($main_content){
                    foreach($main_content as $main){
        ?>
        <section class="service-removal  <?php echo $main['row_type'];?> hidden">
            <div class="container">                   
                <div class="col_wrapper about-banner">
                    <div class=" col-1 first-half">
                        <h2><?php echo $main['section_title'];?></h2>
                        <p><?php echo $main['section_description'];?></p>

                        <div class="ask-for-price">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                    
                    <div class=" col-2 second-half">
                        <img src="<?php echo $main['section_image']['url'];?>" alt="<?php echo $main['section_image']['alt'];?>">
                    </div>
                </div>
               
            </div>
        </section>
        <?php } } ;?>
        <!-- FAQs -->
        <section class="faqs hidden">
            <div class="container">
                <div class="faq">
                    <div class="first-half">
                        <h2>Frequently Asked Questions (FAQs)</h2>
                    </div>
                    <div class="second-half">
                        <div class="col">
                            <div class="tabs">
                                <?php $faqs = get_field('faqs'); 
                                $var = [];
                                if($faqs){
                                    foreach($faqs as $key => $faq){
                                ?>                           
                                <div class="tab">
                                    <input type="checkbox" id="<?php echo $faq['faqs_num']; ?>">
                                    <label class="tab-label" for="<?php echo $faq['faqs_num']; ?>"><?php echo $faq['faqs_qns']; ?></label>
                                    <div class="tab-content">
                                    <p><?php echo $faq['faqs_ans']; ?></p>
                                    </div>
                                </div>
                                <?php } } ;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="home-services hidden">
            <div class="container">
                <h2>Our Services</h2>
                <div class="service-wraper">

                <?php 
                $service_card=get_field('service_card');
                
                if($service_card){
                    foreach($service_card as $service){
                ?>
                    <div class="service-card">
                        <div class="icon-box">
                            <img src="<?php echo $service['service_icon']['url'];?>" alt="<?php echo $service['service_icon']['alt'];?>">
                        </div>
                        <div class="card-header">
                           <h3><?php echo $service['service_title'];?></h3>
                        </div>
                        <div class="card-body">
                            <p><?php echo $service['service_desc'];?></p>
                        </div>
                    </div>
                    <?php } } ;?>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial hidden">
            <div class="container">
                <h2>Testimonial</h2>
                <div class="testimonial-wraper">

                    <?php 
                        $testimonials = get_field('testimonial');
                            if($testimonials){
                                foreach($testimonials as $testimonial){      
                    ?>
                    <div class="testimonial-card">
                        <div class="icon-box">
                            <img src="<?php echo $testimonial['testimonail_icon']['url'];?>" alt="<?php echo $testimonial['testimonail_icon']['alt'];?>">
                        </div>
                        <div class="card-body">
                            <p><?php echo $testimonial['client_testimonial']; ?></p>
                        </div>
                        <h3><?php echo $testimonial['client_name']; ?></h3>
                    </div>
                    <?php } }; ?>
                </div>
            </div>
        </section>

        <!-- map with form -->
        <section class="map-with-form hidden">
            <div class="container">
                <div class="map-with-form-wrapper">
                    <div class="form">
                        <img src="<?php echo get_theme_file_uri('/img/Group 9.svg'); ?>" alt="contact">
                    </div>
                    <div class="home-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6625.446073318453!2d150.976824!3d-33.871028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bd7555e1c351%3A0x9a7016ede6be9af5!2zNTkgTGlzYm9uIFN0LCBGYWlyZmllbGQgRWFzdCBOU1cgMjE2NSwg4KSF4KS34KWN4KSf4KWN4KSw4KWH4KSy4KS_4KSv4KS-!5e0!3m2!1sne!2snp!4v1670821916589!5m2!1sne!2snp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pre footer -->
        <section class="pre-footer hidden">
            <div class="container">
                <div class="pre-footer-wraper">
                    <?php if(get_field('pre_footer')): ?>
                    <div class="pre-footer-message">
                        <p><?php the_field('pre_footer') ; ?></p>
                    </div>
                    <?php endif; ?>
                    <div class="pre-footer-cta">
                        <div class="ask-for-price">
                            <button class="white-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>