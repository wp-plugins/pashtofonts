<?php
/*
Plugin Name: PashtoFonts
Description: This plugin allows you to show custom Pashto Unicode text in your blog including Posts, exerts & comments. Decorated with 42 beautiful and decent Pashto fonts which automatically detects Pashto text and set the align and size of the post accordingly. 
Version: 1.0
Author: Moxet Khan
Author URI: http://moxetkhan.com/
Plugin URI: http://pashtofonts.com/
*/

//plugin activation
function PashtoFontsActivate() {
	update_option("theme_detect", "eng_theme");
	update_option("h1_info", "PokhtoRegular");	
	update_option("auto_post_PashtoFonts", "auto_post");
	update_option("auto_comment_PashtoFonts", "auto_comment");
	update_option("auto_excerpt_PashtoFonts", "auto_excerpt");
	update_option("font_info_PashtoFonts", "PokhtoRegular");	
}
register_activation_hook( __FILE__, 'PashtoFontsActivate' );


function PashtoFontsAdminPage()
{
	if(isset($_POST['submitted']))
	{
		$theme_detect = $_POST['theme_detect'];
		$font_info_PashtoFonts = $_POST['font_info_PashtoFonts'];
		$h1_info = $_POST['h1_info'];		
		$auto_post_PashtoFonts = $_POST['auto_post_PashtoFonts'];
		$auto_comment_PashtoFonts = $_POST['auto_comment_PashtoFonts'];
		$auto_excerpt_PashtoFonts = $_POST['auto_excerpt_PashtoFonts'];

		update_option("font_info_PashtoFonts", $font_info_PashtoFonts);
		update_option("h1_info", $h1_info);		
		update_option("theme_detect", $theme_detect);
		update_option("auto_post_PashtoFonts", $auto_post_PashtoFonts);
		update_option("auto_comment_PashtoFonts", $auto_comment_PashtoFonts);
		update_option("auto_excerpt_PashtoFonts", $auto_excerpt_PashtoFonts);

		echo "<div id=\"message\" class=\"updated fade\"><p>PashtoFonts options have been updated!</p></div>";
	}
	else
	{
		$font_info_PashtoFonts = get_option("font_info_PashtoFonts");
		$h1_info = get_option("h1_info");		
		$theme_detect = get_option("theme_detect");
		$auto_post_PashtoFonts = get_option("auto_post_PashtoFonts");
		$auto_comment_PashtoFonts = get_option("auto_comment_PashtoFonts");
		$auto_excerpt_PashtoFonts = get_option("auto_excerpt_PashtoFonts");
	}
    ?>
    <div class="wrap">
<a target='_blank' href='http://www.pashtofonts.com' title='PashtoFonts'><img border='0' src="<?php echo plugins_url( 'logo.png' , __FILE__ ) ?>" alt='PashtFonts' target='_blank' style='float: left;
margin-right: 15px;'></a>
	<h2>PashtoFonts - Build your web with Pashto</h2>
   This plugin allows you to show custom Pashto Unicode text in your blog including Posts, exerts & comments. Decorated with 42 beautiful and decent Pashto fonts which automatically detects Pashto text and set the align and size of the post accordingly. Did you find this plugin useful? Please support our work and write an article about this plugin in your blog with a link to our site http://www.pashtofonts.com<br/><br/>

<style>
.fd
{
background: rgb(248, 248, 248);
margin: 0px 15px 0px 0px;
padding: 10px;
border-radius: 10px;
}
</style>


<?php
include("content.php");
}
function pashtoFormattingOptions() {
    add_submenu_page('options-general.php', 'PashtoFonts - Build your web in Pashto', "PashtoFonts", 10, __FILE__, 'PashtoFontsAdminPage');
}

add_action('admin_menu', 'pashtoFormattingOptions');

$font_info_PashtoFonts = get_option("font_info_PashtoFonts").", Tahoma";
$h1_info = get_option("h1_info").",Tahoma";
$theme_detect = get_option("theme_detect");
$auto_post_PashtoFonts = get_option("auto_post_PashtoFonts");
$auto_comment_PashtoFonts = get_option("auto_comment_PashtoFonts");
$auto_excerpt_PashtoFonts = get_option("auto_excerpt_PashtoFonts");

define('PashtoFonts_FONT',$font_info_PashtoFonts);
define('PashtoFonts_h1',$h1_info);
error_reporting(0);


function check_pashto($text) {
	$fword = substr(str_replace(" ","",strip_tags($text)), 0, 2);
if($fword=='ټ' || $fword=='څ' || $fword=='ځ' || $fword=='ډ' || $fword=='ړ' || $fword=='ژ' || $fword=='ږ' || $fword=='ښ' || $fword=='ګ' || $fword=='ڼ' || $fword=='ي' || $fword=='ې' || $fword=='ۍ' || $fword=='ئ' || $fword=='ا' || $fword=='آ' || $fword=='ب' || $fword=='پ' || $fword=='ت' || $fword=='ٹ' || $fword=='ث' || $fword=='ج' || $fword=='چ' || $fword=='ح' || $fword=='خ' || $fword=='د' || $fword=='ڈ' || $fword=='ذ' || $fword=='ر' || $fword=='ز' || $fword=='ژ' || $fword=='س' || $fword=='ش' || $fword=='ص' || $fword=='ض' || $fword=='ط' || $fword=='ظ' || $fword=='ع' || $fword=='غ' || $fword=='ف' || $fword=='ق' || $fword=='ک' || $fword=='گ' || $fword=='ل' || $fword=='م' || $fword=='ن' || $fword=='و' || $fword=='ہ' || $fword=='ی' || $fword=='ے'){
			return true;
		}
		else
		{
			return false;
		}
	}
	



function check_english($text) {
	$fword = substr(str_replace(" ","",strip_tags($text)), 0, 2);
	$fword=ord($fword);
	if($fword>64 && $fword<91 || $fword>96 && $fword<123){
		return true;
	}
	else {
		return false;
	}
}

//pashto Formatting
function pashtoFormattingPost($text){
if (check_pashto($text)) {
$text=str_replace('<p>','<p style="text-align: right; font-family:'.PashtoFonts_FONT.';line-height: 31px; direction: rtl;">',$text);
	}
	return $text;
}

function pashtoFormattingComment($text){
	if (check_pashto($text)) {
		$text=str_replace($text,'<div style="text-align: right; font-family: '.PashtoFonts_FONT.'; font-size: 18px; line-height: 31px; direction: rtl;">'.$text.'</div>',$text);

	}
	return $text;
}

function pashtoFormattingExcerpt($text){
	if (check_pashto($text)) {
		$text=str_replace('<p>','<p style="text-align: right; font-family: '.PashtoFonts_FONT.'; font-size: 19px; line-height: 31px; direction: rtl;">',$text);
	}
	return $text;
}
 

//pashto Code Formatting Auto	
function pashtoFormattingStartAuto($text_value = array()){
	$text=get_the_content();
	if (check_pashto($text)) {
		if(!$text_value['font_size']){
			$text_value['font_size'] = '19';
		}
		if(!$text_value['line_height']){
			$text_value['line_height'] = '31';
		}
		if(!$text_value['text_align']){
			$text_value['text_align'] = 'right';
		}
		if($text_value['text_color']){
			$text_color = ' color: '.$text_value['text_color'].';';
		}
		echo '<div style="font-family: '.PashtoFonts_FONT.'; font-size: '.$text_value['font_size'].'px; line-height: '.$text_value['line_height'].'px; text-align: '.$text_value['text_align'].'; direction: rtl;'.$text_color.'">' ;
	}
	return '';
}


function pashtoFormattingEndAuto(){
	$text=get_the_content();
	if (check_pashto($text)) {
		echo '</div>' ;
	}
	return '';
}

//pashto Tag Formatting
	function pashtoFormattingTextTag( $atts, $content = null ) {
		if(!$atts['size']){
			$atts['size'] = '19';
		}
		if(!$atts['align']){
			$atts['align'] = 'right';
		}
		return '<div style="text-align: '.$atts['align'].'; font-family: '.PashtoFonts_FONT.'; font-size: '.$atts['size'].'px; line-height: 31px; direction: rtl;">' . $content . '</div>';
	}
	
	function pashtoFormattingWordTag( $atts, $content = null ) {
		if(!$atts['size']){
			$atts['size'] = '17';
		}
		return '<font style="font: '.$atts['size'].'px '.PashtoFonts_FONT.';direction:rtl;">' . $content . '</font>';
	}

//English Formatting
function EnglishFormattingPost($text){
		if (check_english($text)) {
			$text=str_replace('<p>','<p style="text-align: left; font-family: '.PashtoFonts_FONT.'; font-size: 13px; line-height: 20px; direction: ltr;">',$text);
		}
		return $text;
	}
	
	function EnglishFormattingComment($text){
		if (check_english($text)) {
			$text=str_replace($text,'<div style="text-align: left; font-family: '.PashtoFonts_FONT.'; font-size: 13px; line-height: 20px; direction: ltr;">'.$text.'</div>',$text);
		}
		return $text;
	}
	
	function EnglishFormattingExcerpt($text){
		if (check_english($text)) {
			$text=str_replace('<p>','<p style="text-align: left; font-family: '.PashtoFonts_FONT.'; font-size: 13px; line-height: 20px; direction: ltr;">',$text);
		}
		return $text;
	}

//English Tag Formatting
	function EnglishFormattingTextTag( $atts, $content = null ) {
		if(!$atts['size']){
			$atts['size'] = '13px';
		}
		if(!$atts['align']){
			$atts['align'] = 'left';
		}
		return '<div style="text-align: '.$atts['align'].'; font-family: '.PashtoFonts_FONT.'; font-size: '.$atts['size'].'; line-height: 20px; direction: ltr;">' . $content . '</div>';
	}
	
	function EnglishFormattingWordTag( $atts, $content = null ) {
		if(!$atts['size']){
			$atts['size'] = '16px';
		}
		return '<font style="font: '.$atts['size'].' '.PashtoFonts_FONT.';">' . $content . '</font>';
	}
$title = the_title();
function theheader($title)
{
if (check_pashto($title)) 
{
return "<h1 style='text-align: right; font-family:".PashtoFonts_h1.";direction: rtl;font-weight:normal;'>".$title."</h1>";
}
else
{
	return $title;
}
}

if($theme_detect=="eng_theme"){
	if($auto_post_PashtoFonts){
		add_filter( 'the_content', 'pashtoFormattingPost' );
		if(!is_admin())
		{
		add_filter( 'the_title', 'theheader' );
		}
		
		
	}

	if($auto_comment_PashtoFonts){
		add_filter( 'comment_text', 'pashtoFormattingComment' );
	}

	if($auto_excerpt_PashtoFonts){
		add_filter( 'the_excerpt', 'pashtoFormattingExcerpt' );
	}
}
else if($theme_detect=="pashto_theme"){
	if($auto_post_PashtoFonts){
		add_filter( 'the_content', 'EnglishFormattingPost' );
	}

	if($auto_comment_PashtoFonts){
		add_filter( 'comment_text', 'EnglishFormattingComment' );
	}

	if($auto_excerpt_PashtoFonts){
		add_filter( 'the_excerpt', 'EnglishFormattingExcerpt' );
	}
}
function hd()
{
	echo '<meta name="pashto-Plugin" content="pashto Formatter - Shamil" />';
	echo '<meta name="pashto-Plugin-URL" content="www.PashtoFonts.com" />';
	echo '<link rel="stylesheet" href="http://pashtofonts.com/api/pashto.css" />';
}
add_action( 'pashto_start', 'pashtoFormattingStartAuto' );
add_action( 'pashto_end', 'pashtoFormattingEndAuto' );
add_shortcode( 'english_text', 'EnglishFormattingTextTag' );
add_shortcode( 'english', 'EnglishFormattingWordTag' );
add_action('wp_head', 'hd' );
add_shortcode( 'pukhto_lek', 'pashtoFormattingTextTag' );
add_shortcode( 'pukhto', 'pashtoFormattingWordTag' );
?>