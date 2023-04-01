<?php
//about theme info
add_action( 'admin_menu', 'scuba_diving_sport_gettingstarted' );
function scuba_diving_sport_gettingstarted() {
	add_theme_page( esc_html__('Scuba Diving Sport', 'scuba-diving-sport'), esc_html__('Scuba Diving Sport', 'scuba-diving-sport'), 'edit_theme_options', 'scuba_diving_sport_about', 'scuba_diving_sport_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function scuba_diving_sport_admin_theme_style() {
	wp_enqueue_style('scuba-diving-sport-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('scuba-diving-sport-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'scuba_diving_sport_admin_theme_style');

//guidline for about theme
function scuba_diving_sport_mostrar_guide() {
	//custom function about theme customizer
	$scuba_diving_sport_return = add_query_arg( array()) ;
	$scuba_diving_sport_theme = wp_get_theme( 'scuba-diving-sport' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Scuba Diving Sport', 'scuba-diving-sport' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'scuba-diving-sport' ); ?>: <?php echo esc_html($scuba_diving_sport_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="scuba_diving_sport_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'scuba-diving-sport' ); ?></button>
				<button class="tablinks" onclick="scuba_diving_sport_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'scuba-diving-sport' ); ?></button>
				<button class="tablinks" onclick="scuba_diving_sport_open_tab(event, 'getting_started')"><?php esc_html_e( 'Getting Started', 'scuba-diving-sport' ); ?></button>
			</div>


			<div id="setup_customizer" class="tabcontent open">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'scuba-diving-sport'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'scuba-diving-sport'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'scuba-diving-sport'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'scuba-diving-sport'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'scuba-diving-sport'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( SCUBA_DIVING_SPORT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'scuba-diving-sport'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'scuba-diving-sport'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'scuba-diving-sport'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( SCUBA_DIVING_SPORT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'scuba-diving-sport'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'scuba-diving-sport' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','scuba-diving-sport'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','scuba-diving-sport'); ?></a>
									</div>
								</div>

								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','scuba-diving-sport'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','scuba-diving-sport'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<textarea name="banner" cols="60" rows="20">
						<?php echo file_get_contents( SCUBA_DIVING_SPORT_CHANGELOG_THEME_URL ); ?>
					</textarea>
				</div>
			</div>

			<div id="getting_started" class="tabcontent">
				<div class="tab-outer-box">
					<h2><?php esc_html_e( 'Welcome to Elemento Theme!', 'scuba-diving-sport' ); ?></h2>
					<p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '1. Install Kirki Customizer Framework ', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '2. Install WPElemento Importer', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '3. Activate Kirki Customizer Framework ', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '4. Activate WPElemento Importer ', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to the Dashboard', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Click on the start now button', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Click install plugins', 'scuba-diving-sport' ); ?></p>
					<p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'scuba-diving-sport' ); ?></p>
				</div>
			</div>

		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'scuba-diving-sport'); ?></h2>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
			<h3><?php esc_html_e('Scuba Diving Sport', 'scuba-diving-sport'); ?></h3>
			<div class="iner-sidebar-pro-btn">
				<span class="premium-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'scuba-diving-sport'); ?></a>
				</span>
				<span class="demo-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'scuba-diving-sport'); ?></a>
				</span>
				<span class="doc-btn"><a href="<?php echo esc_url( SCUBA_DIVING_SPORT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Doc', 'scuba-diving-sport'); ?></a>
				</span>
			</div>

			<div class="premium-features">
				<h3><?php esc_html_e('premium Features', 'scuba-diving-sport'); ?></h3>
				<ul>
					<li><?php esc_html_e( 'Multilingual', 'scuba-diving-sport' ); ?></li>
					<li><?php esc_html_e( 'Drag and drop features', 'scuba-diving-sport' ); ?></li>
					<li><?php esc_html_e( 'Zero Coding Required', 'scuba-diving-sport' ); ?></li>
					<li><?php esc_html_e( 'Mobile Friendly Layout', 'scuba-diving-sport' ); ?></li>
					<li><?php esc_html_e( 'Responsive Layout', 'scuba-diving-sport' ); ?></li>
					<li><?php esc_html_e( 'Unique Designs', 'scuba-diving-sport' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<?php } ?>
