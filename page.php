
<?php get_header(); ?>
<main class="site_main" style="background-color:<?= get_theme_mod("background_body");?>;">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <h1 class="page_main_titre">
                <?php the_title();?>
            </h1>
            <section class="carte_post">
                <?php the_content();?>
            </section> 
        
        <?php endwhile;?>
        <?php endif;?>
    
</main>
<?php get_footer();?>