<footer>
        <div class="navbar-footer-class">
            <div class="navbar-inner navbar-footer navbar-dark col-md-12 d-inline-flex">
                <div class="footer-copyright text-left col-md-6 d-flex col-4 ml-3">
                    © 2020 FSD. ALL RIGHTS RESERVED
                </div>
                <div class="col-md-6 col-4 text-right mr-3">
			    <?php wp_nav_menu( array(
				    'theme_location'  => 'footer',
				    'menu'            => 'Footer Menu',
				    'container'       => 'div',
				    'container_class' => 'footer-container',
				    'container_id'    => 'footer_menu',
				    'menu_class'      => 'nav-footer',
				    'menu_id'         => 'footer_nav',
				    'items_wrap'      => '<ul id="%1$s" class="%2$s" style="list-style-type: none;display:inline-flex;">%3$s</ul>'  ) ); ?>
                </div>
            </div>
        </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>