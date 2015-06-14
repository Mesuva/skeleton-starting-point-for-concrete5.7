<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="main-content container" id="main">
        <?php Loader::element('system_errors', array('error' => $error)); ?>
        <?php print $innerContent; ?>
</div>


<?php  $this->inc('elements/footer.php'); ?>
