<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>
$(function(){
$('form').submit(function(e){
e.preventDefault();
$.ajax({
type: "POST",
url: get_template_directory_uri().'function.php',
data: $(this).serialize(),
success: function(result){
alert ('Получилось!');
$(.close).click();
}
error: function () {
alert ('Ошибка..');
}
});
});
});
</script>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>

	</div><!-- .sidebar -->

	<div id="content" class="site-content">
            

<!-- Ссылки на вызов модальных окон-->
 <a href="#win1" class="button button-green">Open Window1</a>
 <a href="#win2" class="button button-red">Открыть окно 2</a>
 <a href="#win3" class="button button-blue">Видео в окне 3</a>
 <a href="#win4" class="button button-orange">Фото в окне 4</a>
<!-- Вызов окна через миниатюру изображения -->
<a href="#win5"><img title="" src="img/realism_lrg.jpg" width="150" height="150" alt="" /></a>
<!-- Модальное окно №1 -->
   <a href="#x" class="overlay" id="win1"></a>
   <div class="popup">
    <form> 
	<fieldset>
<legend>Leave your request for event</legend>
Your name <br>
<input type="text" name="Yourname" placeholder="Give me your soul">
<input type="text" name="event" placeholder="The name of the event?">
<input type="date" name="time" placeholder="What time?">
<input type="text" name="place" placeholder="Where?" height="200px">
<input type="submit" name="verify" value="Send">
</fieldset>
</form>
    <a class="close"title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №2 -->
    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
     Здесь вы можете разместить любое содержание, текст с картинками или видео! 
    <a class="close" title="Закрыть" href="#close"></a>
    </div>
<!-- Модальное окно №3 -->
        <a href="#x" class="overlay" id="win3"></a>
        <div class="popup">
<h2>Заголовок</h2>
      Здесь вставляете видео своё или с любого стороннего ресурса, YouTube, Vimeo и т.д.(iframe, embed)...
        <a class="close" title="Закрыть" href="page.html" onclick="return false"></a><!-- Выключение видео при закрытии окна -->
        </div>
<!-- Модальное окно №4 -->
<a href="#x" class="overlay" id="win4"></a>
        <div class="popup">
<img class="is-image" src="ваша-картинка.jpg" alt="" />
        <a class="close" title="Закрыть" href="#close"></a>
        </div>
<!-- Модальное окно №5 -->
        <a href="#x" class="overlay" id="win5"></a>
        <div class="popup">
<img class="is-image" src="ваша-картинка.jpg" alt="" />
<a class="close" title="Закрыть" href="#close"></a>
        </div>

 



