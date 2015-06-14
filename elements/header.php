<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS
  ================================================== -->

<link rel="stylesheet" href="<?php echo $this->getThemePath() . '/css/skeleton.css';?>">
<link rel="stylesheet" href="<?php echo $this->getThemePath() . '/css/main.css';?>">

<!--[if lt IE 9]>
    <script src="<?php echo $this->getThemePath() . '/js/html5.js';?>"></script>
    <script src="<?php echo $this->getThemePath() . '/js/selectivizr-min.js';?>"></script>
<![endif]-->

	<?php Loader::element('header_required'); ?>

</head>
<?php
$pagetype = $c->getCollectionTypeHandle();
$editmode = $c->isEditMode();
?>

<body class="<?php echo ($editmode ? 'ineditmode' : ''); ?>">
    <div class="page <?php echo $c->getPageWrapperClass()?>">
        <header class="container">
            <div class="row">
                <div class="sitelogo four columns">
                    <a href="<?php echo DIR_REL?>/"><?php  echo Config::get('concrete.site'); ?></a>
                </div>

                <div class="nav_wrapper eight columns">
                    <nav id="nav">
                        <?php
                        $a = new GlobalArea('Navigation');
                        $a->setBlockLimit(1);
                        $a->display();
                        ?>
                    </nav>
                </div>
            </div>
        </header>