<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Full Moon Template</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />

<script type='text/javascript' src='Scripts/jquery-1.3.2.min.js'></script>

<!-- Tooltip -->
<script type="text/javascript" src="Scripts/jquery.tipsy.js"></script>

<!-- fade in/fade out -->
<script type="text/javascript" src="Scripts/jquery.innerfade.js"></script>

<!-- Featured list -->
<script type="text/javascript" src="Scripts/jquery.featureList-1.0.0.js"></script>

</head>
<body>
<?php require '../../pink/assets/js/script_home.js';?>
<div id="wrapper">
	<div id="top">
  		<?php include '../../pink/assets/partials/top.php'; ?>
	</div>
	<div>
		<ul id="nav">
    		<?php include '../../pink/assets/partials/nav.php'; ?>
    	</ul>
  	</div>
	<div class="hr"></div>
	<div id="preview_wrap">
		<?php include '../../pink/assets/partials/preview.php'; ?>
	</div>
	<div id="thumbs">
		<?php include '../../pink/assets/partials/thumbs.php'; ?>
	</div>
	<div id="contentWrap">
		<div class="hr_line"></div>
		<div id="content-two-third">
			<?php include '../../pink/assets/partials/content.php'; ?>
    	</div>
		<div id="column" class="right">
			<div class="on-third-right">
				<?php include '../../pink/assets/partials/right.php'; ?>
			</div>
      		<div id="twitter">
        		<?php include '../../pink/assets/partials/twitter.php'; ?>
      		</div>	
		</div>
		<div id="footer">
    		<?php include '../../pink/assets/partials/footer.php'; ?>
  		</div>
		<div id="social"><?php include '../../pink/assets/partials/socials.php'; ?> </div>
	</div>

</div>
</body>
</html>