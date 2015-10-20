<?php
$blog_email = get_bloginfo( 'admin_email' );
$address = get_theme_mod( 'address' );
$phone = get_theme_mod( 'phone' );
?>
<footer class="main-footer buffer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="icon pull-left">
					<i class="fa fa-map-marker"></i>
				</div>
				<address class="text">
                    <?php echo wpautop( $address ); ?>
				</address>
			</div>
			<div class="col-md-5 col-sm-6">
				<div class="icon pull-left">
					<i class="fa fa-user"></i>
				</div>
				<div class="text">
                    <?php printf( __( 'Email: <a href="mailto:%1$s">%1$s</a>', 'nhpr' ), esc_attr( $blog_email ) ); ?><br>
					<?php printf( __( 'Telefon: %1$s', 'nhpr' ), esc_attr( $phone ) ); ?>
				</div>
			</div>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer_navigation',
                'container_class' => 'col-md-4 col-xs-12',
                'menu_class'     => 'list-unstyled footer-navigation',
            ) );
            ?>
		</div>
		<div class="row text-center">
			<div class="col-xs-12">
				<small>&copy; <?php the_time('Y'); ?> <i class="fa fa-code"></i> with <i class="fa fa-heart"></i> by <a href="http://juerghunziker.ch">Jürg Hunziker</a></small>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
