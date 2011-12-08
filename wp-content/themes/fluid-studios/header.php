<!DOCTYPE html>

<html id="studios" class="no-js" <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php if(is_home() && (!$paged || $paged == 1) || is_single() || is_page()) { ?>
<meta name="googlebot" content="index,archive,follow,noodp" />
<meta name="robots" content="all,index,follow" />
<meta name="msnbot" content="all,index,follow" />
<?php } else { ?>
<meta name="googlebot" content="noindex,noarchive,follow,noodp" />
<meta name="robots" content="noindex,follow" />
<meta name="msnbot" content="noindex,follow" />
<?php } ?>

<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/fss/css/fss-reset-global.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/fss/css/fss-layout.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/fss/css/fss-text.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/fss/fss-theme-bw-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/fss/fss-theme-wb-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/fss/fss-theme-by-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/fss/fss-theme-yb-uio.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/fss/fss-text-uio.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/css/fl-theme-hc/hc.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/css/fl-theme-hci/hci.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/css/fl-theme-by/by.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/css/fl-theme-yb/yb.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/UIOptions.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/css/FatPanelUIOptions.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

<!-- <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion/MyInfusion.js"></script> -->

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/core/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/js/jquery.ui.mouse.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/js/jquery.ui.slider.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/ui/js/jquery.ui.tabs.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/jquery/plugins/ariaTabs/js/ui.ariaTabs.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/json/js/json2.js"></script>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/FluidDocument.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/jquery.keyboard-a11y.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/Fluid.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/FluidRequests.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/FluidDOMUtilities.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/DataBinding.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/core/js/FluidIoC.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/lib/fastXmlPull/js/fastXmlPull.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/renderer/js/fluidParser.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/renderer/js/fluidRenderer.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/framework/renderer/js/RendererUtilities.js"></script>

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/tabs/js/Tabs.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/URLUtilities.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/Store.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/UIOptions.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/UIEnhancer.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/FatPanelUIOptions.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/js/SlidingPanel.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/tableOfContents/js/TableOfContents.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

<title><?php if (function_exists('is_tag') && is_tag()) { single_tag_title("Tag Archive for &quot;"); echo'&quot; &mdash; '; } elseif (is_archive()) { wp_title(''); echo ' Archive &mdash; '; } elseif (is_search()) { echo 'Search for &quot;'.esc_html($s).'&quot; &mdash; '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' &mdash; '; } elseif (is_404()) { echo '404 Error &mdash; Page not found &mdash; '; } if (is_home()) { bloginfo('name'); echo ' &mdash; '; bloginfo('description'); } else { bloginfo('name'); } ?><?php if ($paged>1) { echo ' &mdash; page '. $paged; } ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png"/>
		
<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head(); 
?>

</head>

<body id="nav:page-top" <?php body_class('fl-fix'); ?>>

  <div class="flc-uiOptions-fatPanel fl-uiOptions-fatPanel">
      <!-- This is the div that will contain the UI Options component -->
  	<div id="myUIOptions" class="flc-slidingPanel-panel flc-uiOptions-iframe fs-uiOptions-panel"></div>     

      <!-- This div is for the sliding panel that shows and hides the UI Options controls -->
  	<div class="fl-panelBar">
  		<button class="flc-slidingPanel-toggleButton fl-toggleButton">Show display preferences</button>
  	</div>
  </div>	

  <!-- This is where the Table of Contents will be displayed -->
  <div class="flc-toc-tocContainer toc"> </div>

	<script type="text/javascript">
	    // Instantiate the UI Enhancer component, specifying the table of contents' template URL
	    fluid.pageEnhancer({
	        tocTemplate: "<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/tableOfContents/html/TableOfContents.html",
	        classnameMap: {
	            theme: {
	                "default": "fluid-studios-theme"
	            }
	        }
	    });
    
	    // Start up UI Options
	    fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
	        prefix: "<?php bloginfo('template_url'); ?>/infusion1/src/webapp/components/uiOptions/html/",
           slidingPanel: {
               options: {
                   strings: {
                       showText: "Show Display Preferences",
                       hideText: "Hide Display Preferences"
                   }
               }
           }
	    });
	</script>

<div class="fs-loginout-link">
    <?php wp_loginout(); ?>
</div>
