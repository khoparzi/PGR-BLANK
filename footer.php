
		<!-- Begin Footer -->
		<footer class="footer" role="contentinfo">
			<div class="lc">
				<div class="g-4up">
					<div class="gi">
						<h1>About PGR Studio</h1>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta harum beatae repellendus expedita ducimus tempora explicabo, ab, incidunt tempore quas reprehenderit atque iste quibusdam quisquam. Repellat delectus ullam, eos excepturi!</p>

						<div class="vcard">
							<div class="org">Birmingham City University</div>
							<div class="adr">
								<div class="street-address">Curzon Street</div>
								<span class="locality">Birmingham, UK</span>,
								<span class="postal-code">101010</span>,
								<abbr class="region" title="WM">West Midlands</abbr>
								<div class="country-name">UK</div>
							</div>
							<div class="tel">+1.888.123.4567</div>
						</div>
						<a href="<?php echo get_option('home'); ?>/"><img src="/pgr-studio-patternlab/public/images/logo.png" class="logo" alt="<?php bloginfo('name'); ?>"/></a>
					</div>

					<?php dynamic_sidebar( 'footerbar-center' ); ?>

					<div class="gi">
					<?php dynamic_sidebar( 'footerbar-right' ); ?>
					</div>
				</div>
				<p class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>. All rights reserved.</p>
			</div>
		</footer>
		<!-- End Footer -->

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
