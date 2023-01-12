<?php get_header(); ?>

<?php /*Template Name: Generic Policy Template */ ?>

<main>
<!-- https://www.advancedcustomfields.com/resources/working-with-nested-repeaters/ -->
<?php 
            $policy=get_field('policy');
                if($policy){
                    foreach($policy as $pl){
        ?>
        <section class="service-removal  <?php echo $pl['row_type'];?> hidden">
            <div class="container">                   
                <div class="col_wrapper about-banner">
                    <div class=" col-1">
                        <h2><?php echo $pl['title'];?></h2>
                        <p><?php echo $pl['content'];?></p>
                       
                    </div>
                </div>
               
            </div>
        </section>
        <?php } } ;?>
</main>

<?php get_footer(); ?>