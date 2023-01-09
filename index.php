<?php get_header(); ?>
<main>
        <!-- blog header -->
        <section class="blog-hero hidden">
            <img src="<?php echo get_theme_file_uri('/img/blog.png'); ?>" alt="blog-hero">
            <div class="container">     
                <div class="centered">
                    <h1>Best Car Wreckers Company In Australia</h1>
                    <p>United Car Removal is a licensed and experienced service provider in the car wreckers business. Over the years, it became successful in presenting itself as one of the best car wreckers in Sydney, Australia. And their customer-oriented service is to be credited for it.</p>
                </div>
            </div>
        </section>

        <section class="blogs hidden">
            <div class="container">

                <h2 class="blog-title">Our Blogs</h2>
                <div class="card-wraper">

                <?php 
                while(have_posts()){
                    the_post(); ?>
                
                    <div class="card">
                        <div class="image-box">
                            <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                            <div class="date">
                                <p>Posted on: <?php the_time('F j, Y'); ?></p>
                            </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="card-body">
                                <p><?php
                                    echo wp_trim_words( get_the_content(), 25, '...' );
                                ?></p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="<?php the_permalink(); ?>">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
                    
                    <!-- <div class="card">
                        <div class="image-box">
                            <a href="/single.html">
                                <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                                <div class="date">
                                    <p>Posted on: October 14th, 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="/single.html">Cash for Cars Penrith – Reliable Used Car Buyers Penrith</a></h3>
                            </div>
                            <div class="card-body">
                                <p>It is necessary to deal with knowledgeable unwanted car buyers in Penrith to sell your car and get the best Cash for Cars Penrith right away. This requires complete information on how the auto industry works, which markets to target, and how to differentiate and present the car.</p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="/single.html">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="card">
                        <div class="image-box">
                            <a href="/single.html">
                                <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                                <div class="date">
                                    <p>Posted on: October 14th, 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="/single.html">Cash for Cars Penrith – Reliable Used Car Buyers Penrith</a></h3>
                            </div>
                            <div class="card-body">
                                <p>It is necessary to deal with knowledgeable unwanted car buyers in Penrith to sell your car and get the best Cash for Cars Penrith right away. This requires complete information on how the auto industry works, which markets to target, and how to differentiate and present the car.</p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="/single.html">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="card">
                        <div class="image-box">
                            <a href="/single.html">
                                <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                                <div class="date">
                                    <p>Posted on: October 14th, 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="/single.html">Cash for Cars Penrith – Reliable Used Car Buyers Penrith</a></h3>
                            </div>
                            <div class="card-body">
                                <p>It is necessary to deal with knowledgeable unwanted car buyers in Penrith to sell your car and get the best Cash for Cars Penrith right away. This requires complete information on how the auto industry works, which markets to target, and how to differentiate and present the car.</p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="/single.html">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="image-box">
                            <a href="/single.html">
                                <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                                <div class="date">
                                    <p>Posted on: October 14th, 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="/single.html">Cash for Cars Penrith – Reliable Used Car Buyers Penrith</a></h3>
                            </div>
                            <div class="card-body">
                                <p>It is necessary to deal with knowledgeable unwanted car buyers in Penrith to sell your car and get the best Cash for Cars Penrith right away. This requires complete information on how the auto industry works, which markets to target, and how to differentiate and present the car.</p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="/single.html">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="image-box">
                            <a href="/single.html">
                                <img src="<?php echo get_theme_file_uri('/img/card-blog.png'); ?>" alt="Blog-post-image">
                                <div class="date">
                                    <p>Posted on: October 14th, 2022</p>
                                </div>
                            </a>
                        </div>
                        <div class="cd">
                            <div class="card-header">
                                <h3><a href="/single.html">Cash for Cars Penrith – Reliable Used Car Buyers Penrith</a></h3>
                            </div>
                            <div class="card-body">
                                <p>It is necessary to deal with knowledgeable unwanted car buyers in Penrith to sell your car and get the best Cash for Cars Penrith right away. This requires complete information on how the auto industry works, which markets to target, and how to differentiate and present the car.</p>
                            </div>
                            <div class="card-footer">
                                <button class="learn-more"><a href="/single.html">Learn More About Car For car Penrith</a></button>
                            </div>
                        </div>
                    </div> -->
                    
                </div>

                <div class="center">
                    <div class="pagination">
                    <?php echo paginate_links(); ?>
                        <!-- <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a> -->
                    </div>
                  </div>
            </div>
        </section>

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
<?php get_footer(); ?>