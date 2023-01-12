<?php get_header(); ?>

<?php /*Template Name: Contact us Template */ ?>

<main>

    <section class="blog-hero hidden">
            <img src="<?php echo get_theme_file_uri('/img/blog-single.png'); ?>" alt="blog-hero">
            <div class="container">     
                <div class="centered">
                    <?php if(get_field('hero_title')): ?>
                    <h1><?php the_field('hero_title'); ?></h1>
                    <?php endif; ?>

                    <?php if(get_field('hero_description')): ?>
                    <p><?php the_field('hero_description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
    </section>

        <!-- Contact about Section -->
    <section class="about hidden">
            <div class="container">
                <div class="about-banner">
                    <div class="first-half about">
                        <?php if(get_field('under_hero_desc')): ?>
                        <p><?php the_field('under_hero_desc'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </section>

    <section class="service-removal bg-acent hidden">
        <div class="container">
            <div class="about-banner">
                <?php 
                $section_with_form = get_field('section_with_form');

                if($section_with_form) {
                    foreach($section_with_form as $swf){
                ?>
                <div class="first-half">
                    <h2><?php echo $swf['title']; ?></h2>
                    <p><?php echo $swf['desc']; ?></p>
                    <div class="ask-for-price">
                        <button class="primary-cta"><a href="#">Ask for price</a></button>
                    </div>
                </div>

                 <?php   }}; ?>
                <div class="second-half">
                <?php echo do_shortcode("[activecampaign form=17 css=1]>"); ?>
                <?php echo do_shortcode("[activecampaign form=21 css=1]>"); ?>
                </div>
            </div>
        </div>
    </section>

     <!-- Trusted Auto Wreckers -->
     <section class="auto-wreckers hidden">
        <div class="container">
       <?php 
        if($section_with_form) {
                    foreach($section_with_form as $swf){
                ?>
            <div class="auto-wreckers">
                <div class="first-half sp">
                    <p><?php echo $swf['contact_details_section']; ?></p>
                    <div class="ask-for-price">
                        <button class="primary-cta"><a href="#">Ask for price</a></button>
                    </div>
                </div>
                <div class="second-halff">
                    <div class="info">
                            <div class="address-wrap">
                                <div class="phone">
                                    <div class="iconlist">
                                        <h4><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-phone.svg'); ?>"></span><span class="icon-list-content">Phone</span></h4>
                                        <span class="icon-list-content">0487002222</span>
                                    </div>
                                </div>
            
                                <div class="email">
                                    <div class="iconlist">
                                        <h4><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/mail.svg'); ?>"></span><span class="icon-list-content">Email</span></h4>
                                        <span class="icon-list-content">info@unitedcarremoval.com.au</span>
                                    </div>
                                </div>
            
                                <div class="address">
                                    <div class="iconlist">
                                        <h4><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/address.svg'); ?>"></span><span class="icon-list-content">Address</span></h4>
                                        <span class="icon-list-content">59 Lisbon St, Fairfield East, NSW, 2165</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <?php   }}; ?>
        </div>
    </section>

    <section>
    <?php if ( is_active_sidebar( 'map_widget' ) ) : ?>
        <div class="map hidden">
            <?php dynamic_sidebar( 'map_widget' ); ?>
        </div>
    <?php endif; ?>
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