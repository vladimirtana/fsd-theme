<footer>
        <div class="navbar-inner navbar-footer navbar-dark d-flex">
            <div class="footer-copyright text-left col-3">
                © 2020 FSD. ALL RIGHTS RESERVED
            </div>
            <div class="text-right col-9">
				<?php wp_nav_menu( array(
					'theme_location'  => 'footer',
					'menu'            => 'Footer Menu',
					'container'       => 'div',
					'container_class' => 'footer-container',
					'container_id'    => 'footer_menu',
					'menu_class'      => 'nav-footer',
					'menu_id'         => 'footer_nav',
					'items_wrap'      => '<ul id="%1$s" class="%2$s" style="list-style-type: none;">%3$s</ul>'  ) ); ?>
            </div>
        </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>