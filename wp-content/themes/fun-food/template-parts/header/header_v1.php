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
<div id="banner" class="banner full-screen-mode parallax"
    style="background: url(<?php echo get_header_image(); ?>) no-repeat; background-size:cover !important;">
    <div class="container pr">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="banner-static">
                <div class="banner-text">
                    <div class="banner-cell">
                        <h1><?php echo get_theme_mod('banner_title'); ?><span class="typer" id="some-id"
                                data-delay="200" data-delim=":" data-words="Friends:Family:Officemates"
                                data-colors="red"></span><span class="cursor" data-cursorDisplay="_"
                                data-owner="some-id"></span></h1>
                        <h2><?php echo get_theme_mod('small_title'); ?> </h2>
                        <p><?php echo get_theme_mod('banner_content'); ?></p>
                        <div class="book-btn">
                            <a href="<?php echo get_theme_mod('banner_btn_link'); ?>"
                                class="table-btn hvr-underline-from-center"><?php echo get_theme_mod('banner_btn_title'); ?></a>
                        </div>
                        <a href="#about">
                            <div class="mouse"></div>
                        </a>
                    </div>
                    <!-- end banner-cell -->
                </div>
                <!-- end banner-text -->
            </div>
            <!-- end banner-static -->
        </div>
        <!-- end col -->
    </div>
    <!-- end container -->
</div>