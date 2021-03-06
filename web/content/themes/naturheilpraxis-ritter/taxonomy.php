<?php get_header(); ?>

<?php
if( is_tax() ) {
    global $wp_query;
    $term = $wp_query->get_queried_object();
    $title = $term->name;
}
?>

<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php esc_attr_e( $title ); ?></h1>
            </div>
        </div>
    </div>
</header>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
    ?>
    <div class="container buffer-top">
        <main class="row">
            <article <?php post_class( 'col-xs-12' ); ?>>
                <?php the_title( '<h2>', '</h2>' ) ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->
        </main><!-- .site-main -->
    </div><!-- .content-area -->

    <?php
// End the loop.
endwhile;
?>

<section class="container">
    <div class="row text-center">
        <div class="col-xs-12">
            <a href="<?php echo esc_url( home_url( '/termin-finden' ) ); ?>" class="btn btn-primary btn-lg" role="button"><?php esc_attr_e( 'Jetzt einen Termin finden', 'nhpr' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
