<?php get_header(); ?>

<div class="site-content-contain">
    <div id="content" class="site-content">
        <header class="page-header banner">
                <h2 class="page-title"><?php wp_title('', true, ''); ?></h2>
            </header>
        <div class="wrap">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                <?php
                if( have_posts() ):
                    while(have_posts()): the_post(); 
                    get_template_part( 'template-parts/post/content' );
                    endwhile;
                endif;
                ?>
                </main>
            </div>
            <div id="secondary" class="sidebar">
            <?php   if(is_active_sidebar('sidebar')): ?>
            <div class="widget-area">
            <?php   dynamic_sidebar('sidebar'); ?>
            </div>
            <?php   endif;  ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();