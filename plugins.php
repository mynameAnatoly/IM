
<?php
/*
Plugin Name: Icon messanger 
Plugin URI: http://goodweb.by
Description: отображение иконок месанджеров
Version:  0.2
Author: AA
*/

if (!defined('ABSPATH')) {

    wp_die(); // don't access directly

};

/**
* 	Class my plugina
*/
class ImView
{
	
	function  register()	
	{
		// добавление в хедер стили и скрипты
		add_action( 'init',[$this,'IM_View_header']);	
		// добавление в футер кода кнопки 
		add_action ('wp_footer',[$this,'IM_View_footer']);
			// добавление в меню настройки плагина
		add_action( 'admin_menu', [$this,'register_IMView_menu_page'] );
				// регистрация полей 
		add_action( 'admin_init', [$this,'IMVIEW_setting_page_init'] );

	}

 	// Create in header css,jquery
	function IM_View_header()
	{
		wp_enqueue_style( 'style-IMVIEW', plugins_url('css/style-IMVIEW.css', __FILE__));
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'JS-IMVIEW', plugins_url('js/JS-IMVIEW.js', __FILE__),array('jquery'));
	}
	// Create buttton in footer
	function IM_View_footer()
	{
		if ( !wp_is_mobile() ) {
			echo '<div id="trigger" style="right: 70px;bottom: 70px;">';
		}
		else {
			echo '<div id="trigger" style="right: 30px;bottom: 35px;">'; 
		}
		$options= get_option('IMVIEW_setting')??"";
		$instagram = $options['IMVIEW_group_instagram']??"";
		$telegram = $options['IMVIEW_group_telegram']??"";
		$viber = $options['IMVIEW_group_viber']??"";
		$phone = $options['IMVIEW_group_phone']??"";
		$enable= $options['IMVIEW_group_enable']??"";
		if ((!$instagram and !$telegram and !$viber and !$phone) or (!$enable)  ) {return;}
		include('circleimg.php');		
	}

			// добавление в меню настройки плагина
	function register_IMView_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
		add_menu_page( 
			esc_html__('IMVIEW','ImViewplugin'),
			esc_html__('IMVIEW','ImViewplugin'), 
			'manage_options', 
			'IMVIEW-options', 
			array($this,'IMVIEW_setting_page'), 
			'dashicons-welcome-widgets-menus',
			90 );
	}
	
	function IMVIEW_setting_page(){
		settings_errors();
		?>
		<form action="options.php" method="POST">
			<?php 
			settings_fields('IMVIEW_group');
			do_settings_sections('IMVIEW-options');
			submit_button(); 
			?>
			
		</form> 
		<?php 

	}

	function IMVIEW_setting_page_init (){
		register_setting( 'IMVIEW_group', 'IMVIEW_setting');
		add_settings_section( 'IMVIEW_group_section', "" , [$this,'IMVIEW_group_section_html'], 'IMVIEW-options' );
		add_settings_field( 'IMVIEW_group_enable', esc_html__('Plugin enable','ImViewplugin') , [$this,'IMVIEW_group_enable_html'], 'IMVIEW-options','IMVIEW_group_section' );
		add_settings_field( 'IMVIEW_group_instagram', esc_html__('Link instagram','ImViewplugin'), [$this,'IMVIEW_group_instagram_html'], 'IMVIEW-options','IMVIEW_group_section' );
		add_settings_field( 'IMVIEW_group_telegram',  esc_html__('Link telegram','ImViewplugin') , [$this,'IMVIEW_group_telegram_html'], 'IMVIEW-options','IMVIEW_group_section' );
		add_settings_field( 'IMVIEW_group_phone',  esc_html__('Link phone','ImViewplugin'), [$this,'IMVIEW_group_phone_html'], 'IMVIEW-options','IMVIEW_group_section' );
		add_settings_field( 'IMVIEW_group_viber',   esc_html__('Link viber','ImViewplugin') , [$this,'IMVIEW_group_viber_html'], 'IMVIEW-options','IMVIEW_group_section' );
		
	}

	function IMVIEW_group_section_html	()
	{
		
	}  



	function IMVIEW_group_instagram_html	()
	{
		$options= get_option('IMVIEW_setting'); 
		?>
		<input type="text" name="IMVIEW_setting[IMVIEW_group_instagram]" value="<?php echo isset($options['IMVIEW_group_instagram']) ? $options['IMVIEW_group_instagram'] : "";?>">
		<?php
	}


	function IMVIEW_group_telegram_html	()
	{
		$options= get_option('IMVIEW_setting'); 
		?>
		<input type="text" name="IMVIEW_setting[IMVIEW_group_telegram]" value="<?php echo isset($options['IMVIEW_group_telegram']) ? $options['IMVIEW_group_telegram'] : "";?>">
		<?php
	}
	function IMVIEW_group_phone_html	()
	{
		$options= get_option('IMVIEW_setting'); 
		?>
		<input type="text" name="IMVIEW_setting[IMVIEW_group_phone]" value="<?php echo isset($options['IMVIEW_group_phone']) ? $options['IMVIEW_group_phone'] : "";?>">
		<?php
	}
	function IMVIEW_group_viber_html	()
	{
		$options= get_option('IMVIEW_setting'); 
		?>
		<input type="text" name="IMVIEW_setting[IMVIEW_group_viber]" value="<?php echo isset($options['IMVIEW_group_viber']) ? $options['IMVIEW_group_viber'] : "";?>">
		<?php
	}
	function IMVIEW_group_enable_html	()
	{	$options= get_option('IMVIEW_setting'); 
	?>
	<input type="checkbox" name="IMVIEW_setting[IMVIEW_group_enable]" <?php echo isset($options['IMVIEW_group_enable']) ? 'checked="checked"' : "";?>>
	<?php
}


}

$imview = new ImView();
$imview -> register();










































