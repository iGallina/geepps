<?php
/**
* @subpackage  mx_joofree13 Template
*/

defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$scripts_url = ''.$base_url.'/templates/'.$tpl_name.'/scripts/';

//parameters
$footer_menu = '<jdoc:include type="modules" name="footer-menu" style="" />';
$footer_menu_on = $this->countModules('footer-menu');;
$footer_info = $this->params->get('footer_info');


//display footer element if only one element of footer is in use
if(!$footer_menu_on && $footer_info !=''){
$footer_element = $footer_info;
}
elseif($footer_menu_on && $footer_info ==''){
$footer_element = $footer_menu;
}

?>
<footer id="footer">
<div class="container"> 
<div class="clear separator"></div>
<div class="grid_12"><div class="block"><?php echo $footer_info; ?>
<br>
Designed by <a href="http://www.mixwebtemplates.com/" title="Visit mixwebtemplates.com!" target="blank">mixwebtemplates.com</a>
</div></div>
<div class="grid_12"><div class="block"><?php echo $footer_menu; ?></div></div>		

<div class="clear"></div>
</div>	
</footer>

<?php if($float==1) {
$doc->addScript($scripts_url.'sticky.js');	
} ?>