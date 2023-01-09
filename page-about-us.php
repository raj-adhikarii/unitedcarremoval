<?php get_header(); ?>
<?php /* Template Name: About us Template */ ?>
<main>
<section class="about-hero hidden">
    <div class="container">
        <div class="hero-about">
            <div class="banner-content">
            <?php 
            if(get_field('hero_section_title')): ?>
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
                <img src="<?php echo get_theme_file_uri('/img/Group 25.png'); ?>" alt="banner image">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about hidden">
    <div class="container">
        <div class="about-banner">
            <div class="first-half about">

            <?php 
                if(get_field('about_title')): ?>
                    <h2><?php the_field('about_title'); ?></h2>
            <?php endif; ?>

            <?php if(get_field('about_desc')): ?>
                <p><?php echo the_field('about_desc'); ?></p>
            <?php endif; ?>
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

<!-- Pre footer -->
<section class="pre-footer hidden">
    <div class="container">
        <div class="pre-footer-wraper">
            <div class="pre-footer-message">
                <p>Call us now at <strong>0487002222</strong> or turn on your laptop and send us an email at <strong>info@unitedcarremoval.com.au</strong>. After that getting your cars removed and earning cash is just a matter of minutes.</p>
            </div>
            <div class="pre-footer-cta">
                <div class="ask-for-price">
                    <button class="white-cta"><a href="#">Ask for price</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
</main>


<?php get_footer();