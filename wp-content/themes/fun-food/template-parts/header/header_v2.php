<div id="site-header">
    <header id="header" class="header-block-top">
        <div class="container">
            <div class="row">
                <div class="main-menu">
                    <!-- navbar -->
                    <nav class="navbar navbar-default" id="mainNav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand js-scroll-trigger logo-header" href="<?php echo home_url(); ?>">
                                    <?php	
											$custom_logo_id = get_theme_mod( 'custom_logo' );
											$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
											if ( has_custom_logo() ) {
													echo '<img  src="' . esc_url( $logo[0]). '" alt="logo">';
											} else {
													echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
											}
										?>
                                </a>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <?php
											wp_nav_menu(
												array(
													
													'name'        => 'primary-menu',
													'theme_location' => 'primary-menu',
													'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
												)
											);
             						?>
                        </div>
                        <!-- end nav-collapse -->
                    </nav>
                    <!-- end navbar -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </header>
    <!-- end header -->
</div>