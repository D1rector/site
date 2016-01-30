alert (window.location);
jQuery(document).ready(function(){
alert ('получилось!!!');
jQuery('h1').css('color', 'red');
jQuery('#ajax-form1').on('submit', function(){
jQuery.ajax(){
type: "POST",
url: 'http://test.local/wordpress/wp-content/themes/twentyfifteen/function.php',
data: jQuery(this).serialize,
success: function(){
alert ('получилось!!!');}
}
})});
