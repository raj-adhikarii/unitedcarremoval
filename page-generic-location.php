<?php get_header(); ?>

<?php /*Template Name: Generic Location Template*/ ?>

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

        <!-- Main contant -->
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

        <section class="sydney-removal hidden">
            <div class="container">
                <div class="removal-banner">
                    <div class="first-half">
                        <img src="<?php echo get_theme_file_uri('/img/eremoval-sydney.png'); ?>" alt="removal sydney">
                    </div>
                    <div class="second-half">
                        <h2>Car Removals Campbelltown – Cash for Cars Campbelltown Pay Top Cash</h2>
                        <p class="mb-2">United Car Removal guarantees top dollar cash for your damaged cars, which is made possible through a two-stage valuation process. The process of selling your vehicle is cleverly designed to take into account details, such as junk car model, age, mileage, and condition, and is verified on-site. No matter the condition of your car, you can expect a healthy lump of cash in your wallet when you call United Car Removal.</p>

                        <p class="mb-2">Campbelltown is a suburb and major center in the metropolitan area of Sydney, New South Wales, Australia. Being a central location that is considered the administrative seat of the local government. We have focused a lot on serving the businesses, government departments, and residents of Campbelltown. Our Campbelltown car yard is a place where our Campbelltown recyclers perform their dismantling and recycling works.</p>

                        <p class="mb-2">All of our <a href="#">scrap car removal services</a> are provided in the suburb round the clock. Yes, you heard that right! United Car Removals provides cash for cars Campbelltown, tow services and used car removal services in Campbelltown, no matter what time of the day it may be. When you call us at <a href="#">0487002222</a>, you can be sure that your scrap, junk, or old vehicle will be sold by the end of the day. Or even earlier, if you so desire.</p>

                        <div class="ask-for-price">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Trusted Auto Wreckers -->
        <section class="auto-wreckers hidden">
            <div class="container">
                <div class="auto-wreckers">
                    <div class="first-half">
                        <h2>Sell my Car Campbelltown – Cash for Cars Campbelltown</h2>
                        <p class="mb-2">United Car Removal offers top dollar Cash for Cars Campbelltown service, round the clock. But, along with that Car Towing Campbelltown also use industry-grade equipment that is capable of towing any and all kinds of unwanted vehicles.</p>

                        <p class="mb-2">This means that we don’t care what kind of vehicle you want to sell. Whether it’s a sedan or utility vehicle, a truck or a van. Campbelltown wreckers will take care of everything for you, no matter what make, size or condition is.</p>

                        <p class="mb-2">This includes, but is not limited to:</p>
                

                        <div class="iconlist flex-grid">
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Jeeps</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Vans</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Sedans</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Utes</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Trucks</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">SUVs</span></p>
                            <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Cars</span></p>
                        </div>

                        <p class="mb-2">Call us today at our phone no: <a href="#">0487002222</a> or write us an email at <a href="#">info@unitedcarremoval.com.au</a>. Send us details of your vehicle and we will get back to you with some hard cash offers. Again, Campbelltown Wreckers are open 24 hours a day, 7 days a week so you don’t need to look at the clock before making that call! We look forward to serving you in Campbelltown.</p>

                        <div class="ask-for-price">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                    <div class="second-half">
                        <img src="<?php echo get_theme_file_uri('/img/wreckers.png'); ?>" alt="removal service">
                    </div>
                </div>
            </div>
        </section>

        <!-- Instant cash for car -->
        <section class="instant-cash hidden">
            <div class="container">
                <div class="cash-instant">
                    <div class="first-half">
                        <img src="<?php echo get_theme_file_uri('/img/instant.png'); ?>" alt="removal sydney">
                    </div>
                    <div class="second-half">
                        <h2>Auto Wreckers Campbelltown – We buy Second-hand Cars Campbelltown</h2>
                        <p class="mb-2">Our Cash for Cars Campbelltown pays you anywhere in Sydney. United Car Removal pays cash for all kinds of car models: Toyota, Hyundai, Holden, Volkswagen, Honda, Mitsubishi, Mazda, Mercedes, Ford, etc. Call us to <a href="#">remove your used</a>, unwanted, or abandoned cars, trucks, and Campbelltown used cars and get top cash in return.</p>

                        <p class="mb-2">United Car Removal is a licensed and experienced service provider in the buy <a href="#">auto Campbelltown company</a> and wrecker in Sydney, having served the region for over a decade. Thanks to an experienced staff and honest business models, we are able to attract clients everywhere in Sydney, with a long list of esteemed clients contacting us from Campbelltown.</p>

                        <div class="ask-for-price">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How does UCR work -->
        <section class="auto-wreckers hidden">
            <div class="container">
                <div class="auto-wreckers">
                    <div class="first-half">
                        <h2>We accept any make/model car in any condition and offer you top dollar in exchange!</h2>
                        <p class="mb-2">United Car Removal offers top dollar Cash for Cars Campbelltown and unwanted Car removal service round the clock. But, along with that we also use industry-grade equipment that is capable of towing any and all kinds of unwanted vehicles.</p>

                        <p class="mb-2">This means that we don’t care what kind of vehicle you want to sell. It’s a sedan or utility vehicle. A truck or a van. United Car Removal will take care of everything for you, no matter what make, size or condition is.
                            This includes, but is not limited to:</p>

                            <div class="iconlist flex-grid">
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Jeeps</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Vans</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Sedans</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Utes</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Trucks</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">SUVs</span></p>
                                <p><span class="icon-list"><img src="<?php echo get_theme_file_uri('/img/icon-list.svg'); ?>"></span><span class="icon-list-content">Cars</span></p>
                            </div>
    

                        <div class="ask-for-price">
                            <button class="primary-cta"><a href="#">Ask for price</a></button>
                        </div>
                    </div>
                    <div class="second-half">
                        <img src="<?php echo get_theme_file_uri('/img/wreckers.png'); ?>" alt="removal service">
                    </div>
                </div>
            </div>
        </section>

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