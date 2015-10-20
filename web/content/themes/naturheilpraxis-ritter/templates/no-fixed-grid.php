<?php
/**
 * Template Name: No fixed grid
 */
?>
<?php get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
    ?>
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>
        </div>
    </header>

    <section class="container buffer-top">
        <?php the_content(); ?>
    </section><!-- .content-area -->

    <?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>
