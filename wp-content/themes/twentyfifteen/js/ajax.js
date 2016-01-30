alert (window.location);
$(document).ready(function(){
$('h1').css('color', 'red');
$('#ajax-form1').on('submit', function(){
$.ajax(){
type: "POST",
url: 'http://test.local/wordpress/wp-content/themes/twentyfifteen/function.php',
data: $(this).serialize,
success: function(){
alert ('получилось!!!');}
}
})});
