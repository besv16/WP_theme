<?php

/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();

?>

<img src="https://media.giphy.com/media/2vlC9FMLSmqGs/giphy.gif" alt="Cyberlink" width="50%">

<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops!', 'yrgo' ); ?></h1>
            </header>

            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'Looks like the page you looked for doesn\'t exist', 'yrgo' ); ?></h2>
                    <p><?php _e( 'Want to give it another try?', 'yrgo' ); ?></p>

                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->

        </div><!-- #content -->
    </div><!-- #primary -->


<?php

get_footer();

?>
