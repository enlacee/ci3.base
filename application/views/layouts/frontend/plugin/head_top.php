<!doctype html>
<html lang="<?php echo $this->config->item('cs_lang'); ?>">
<head>
<meta charset="utf-8">
<title><?php echo $this->layout->getTitle(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>">
<meta name="robots" content="index,follow" />

<!-- OpenGraph metadata-->
<meta property="og:locale" 			content="es_ES" />
<meta property="og:type" 			content="website" />
<meta property="og:title" 			content="<?php echo $this->layout->getSocialTitle(); ?>" />
<meta property="og:description"		content="<?php echo $this->layout->getSocialDescripcion(); ?>" />
<meta property="og:url" 			content="<?php echo current_url(); ?>" />
<meta property="og:site_name"		content="<?php echo $this->layout->getSocialSiteName(); ?>" />
<meta property="og:image" 			content="Por definir" />
<meta property='fb:admins' 			content='<?php echo $this->config->item('cs_api_facebook'); ?>'/>
<meta name="twitter:card" 			content="<?php echo $this->layout->getSocialResumen(); ?>"/>
<meta name="twitter:description"	content="<?php echo $this->layout->getSocialDescripcion(); ?>"/>
<meta name="twitter:title" 			content="<?php echo $this->layout->getSocialTitle(); ?>"/>
<meta name="twitter:site" 			content="<?php echo $this->config->item('cs_twitter'); ?>"/>
<meta name="twitter:creator" 		content="Por definir"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/lib/respond/dest/respond.min.js"></script>
<script type="text/javascript"><!-- application/ld+json -->
var context = { "@context" : "http://schema.org", "@type" : "Organization", "name" : "Name Project", "url" : "<?php echo substr(base_url(), 0, strlen(base_url())-1) ?>", "logo": "http://cdn.elcomercio.e3.pe/f/seo/logo.jpg", "sameAs" : [ "<?php echo $this->config->item('cs_facebook_url') ?>", "<?php echo $this->config->item('cs_twitter_url') ?>"] }
</script>


<!--Add CSS (Layout)-->
<?php echo $this->layout->css; ?>
<!--End add CSS-->
