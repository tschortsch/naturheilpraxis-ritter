<?php get_header(); ?>

<?php
$blog_name = get_bloginfo( 'name' );
$blog_description = get_bloginfo( 'description' );
?>

<section class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php esc_attr_e( $blog_name ); ?></h1>
                <p class="lead slogan"><?php esc_attr_e( $blog_description ); ?></p>
            </div>
            <div class="col-md-offset-2 col-md-8">
                <form>
                    <div class="form-group text-center">
                        <div class="input-group input-group-lg">
                            <label for="ailment" class="sr-only"><?php esc_attr_e( 'Beschwerde', 'nhpr' ); ?></label>
                            <select class="form-control input-lg" id="ailment">
                                <option value=""><?php esc_attr_e( 'Beschwerde', 'nhpr' ); ?></option>
                                <option value="kopfschmerzen">Kopfschmerzen</option>
                                <option value="veraduungsprobleme">Verdauungsprobleme</option>
                            </select>
                        </div>
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
        <?php the_content(); ?>
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
