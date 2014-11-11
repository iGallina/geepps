<?php
/**
* @subpackage  mx_joofree11 Template
*/

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$css_urla = ''.$base_url.'/templates/'.$tpl_name.'/header/css/';
$scripts_urla = ''.$base_url.'/templates/'.$tpl_name.'/header/js/';

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$stylew	     = $this->params->get('stylew');
$styleh	     = $this->params->get('styleh');
$sliders_thumb1 	= $this->params->get('sliders_thumb1', '' );
$sliders_thumb2 	= $this->params->get('sliders_thumb2', '' );
$sliders_thumb3 	= $this->params->get('sliders_thumb3', '' );
$sliders_thumb4 	= $this->params->get('sliders_thumb4', '' );
$sliders_thumb5 	= $this->params->get('sliders_thumb5', '' );
$sliders_thumb6 	= $this->params->get('sliders_thumb6', '' );
$sliders_texts1 	= $this->params->get('sliders_texts1', '' );
$sliders_texts2 	= $this->params->get('sliders_texts2', '' );
$sliders_texts3 	= $this->params->get('sliders_texts3', '' );
$sliders_texts4 	= $this->params->get('sliders_texts4', '' );
$sliders_texts5 	= $this->params->get('sliders_texts5', '' );
$sliders_texts6 	= $this->params->get('sliders_texts6', '' );
$sliders_tex1 	= $this->params->get('sliders_tex1', '' );
$sliders_tex2 	= $this->params->get('sliders_tex2', '' );
$sliders_tex3 	= $this->params->get('sliders_tex3', '' );
$sliders_tex4 	= $this->params->get('sliders_tex4', '' );
$sliders_tex5 	= $this->params->get('sliders_tex5', '' );
$sliders_tex6 	= $this->params->get('sliders_tex6', '' );
$sliders_text1 	= $this->params->get('sliders_text1', '' );
$sliders_text2 	= $this->params->get('sliders_text2', '' );
$sliders_text3 	= $this->params->get('sliders_text3', '' );
$sliders_text4 	= $this->params->get('sliders_text4', '' );
$sliders_text5 	= $this->params->get('sliders_text5', '' );
$sliders_text6 	= $this->params->get('sliders_text6', '' );

if ($sliders_thumb1 || $sliders_thumb2 || $sliders_thumb3 || $sliders_thumb4 || $sliders_thumb5) {
// use images from template manager
} else {
// use default images
$sliders_thumb1 = $this->baseurl . '/templates/' . $this->template . '/header/header1.jpg';
$sliders_thumb2 = $this->baseurl . '/templates/' . $this->template . '/header/header2.jpg';
}

$doc->addStyleSheet($css_urla.'layerslider.css');
$doc->addScript($scripts_urla.'greensock.js');
$doc->addScript($scripts_urla.'layerslider.transitions.js');
$doc->addScript($scripts_urla.'layerslider.kreaturamedia.jquery.js');

?>

<?php if (($this->countModules('slider') && $slides == 2) || ($slides == 1)): ?>
<div id="outslide">
<section id="slider" class="container">
<div class="slider-content">	
<div class="container">
<div id="layerslider" style="width:1000px;height:440px;max-width:1280px;"> 

<?php if ($sliders_thumb1): ?>         
<div class="ls-slide" data-ls="slidedelay:5000;transition2d:all;transition3d:;"><img src="<?php echo $sliders_thumb1; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb2): ?>
<div class="ls-slide" data-ls="slidedelay:5000;transition2d:all;transition3d:;"><img src="<?php echo $sliders_thumb2; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb3): ?>
<div class="ls-slide" data-ls="slidedelay:5000;transition2d:all;transition3d:;"><img src="<?php echo $sliders_thumb3; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb4): ?>
<div class="ls-slide" data-ls="slidedelay:5000;transition2d:all;transition3d:;"><img src="<?php echo $sliders_thumb4; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb5): ?>
<div class="ls-slide" data-ls="slidedelay:5000;transition2d:all;transition3d:;"><img src="<?php echo $sliders_thumb5; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
</div>

<script>
jQuery("#layerslider").layerSlider({
pauseOnHover: true,
skin: 'v5',
hoverBottomNav: true,
skinsPath: '<?php echo $base_url; ?>/templates/mx_joofree13/header/skins/'
});
</script>
</div>
</div>     
</section>
</div>
<?php endif; ?>	
<!-- No Slides -->
<?php if ($this->countModules('slider') && $slides == 0): ?>
<div id="outslide">
<section id="slider" class="container">
<div class="slider-content">	
<jdoc:include type="modules" name="slider" style="none" />
</div>     
</section>
</div>
<?php endif; ?>		
<div class="clear"></div>       

