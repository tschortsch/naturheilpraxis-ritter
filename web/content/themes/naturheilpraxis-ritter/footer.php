<footer class="main-footer buffer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="icon pull-left">
					<i class="fa fa-map-marker"></i>
				</div>
				<address class="text">
					<strong>Naturheilpraxis Ritter</strong><br>
					Blastrasse 123<br>
					1234 Aadorf
				</address>
			</div>
			<div class="col-md-5">
				<div class="icon pull-left">
					<i class="fa fa-user"></i>
				</div>
				<div class="text">
					Email: <a href="mailto:stefanie.ritter@naturheilpraxis-ritter.ch">stefanie.ritter@naturheilpraxis-ritter.ch</a><br>
					Tel.: 012 123 23 23
				</div>
			</div>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer_navigation',
                'container_class' => 'col-md-4',
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
