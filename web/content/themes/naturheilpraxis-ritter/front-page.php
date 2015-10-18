<?php get_header(); ?>

<?php
$blog_name = get_bloginfo( 'name' );
$blog_description = get_bloginfo( 'description' );
$form_placeholders = array(
    __( 'Wo drückt der Schuh?' ),
    __( 'Was liegt Ihnen auf dem Magen?' ),
);
$random_placeholder_index = array_rand( $form_placeholders, 1 );
$random_placeholder = $form_placeholders[$random_placeholder_index];
?>

<section class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php esc_attr_e( $blog_name ); ?></h1>
                <p class="lead slogan"><?php esc_attr_e( $blog_description ); ?></p>
                <form>
                    <div class="form-group text-center">
                        <label for="ailment" class="sr-only"><?php esc_attr_e( $random_placeholder ); ?></label>
                        <input type="text" class="form-control input-lg text-center" id="ailment" placeholder="<?php esc_attr_e( $random_placeholder ); ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
    ?>

    <section class="container buffer-top">
        <main class="row">
            <article <?php post_class( 'col-xs-12' ); ?>>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->
        </main><!-- .site-main -->
    </section><!-- .content-area -->

    <?php
// End the loop.
endwhile;
?>

<section class="container">
    <div class="row text-center">
        <div class="col-xs-12">
            <button class="btn btn-primary btn-lg" type="submit"><?php esc_attr_e( 'Jetzt einen Termin finden', 'nhpr' ); ?></button>
        </div>
    </div>
</section>

<?php get_footer(); ?>
