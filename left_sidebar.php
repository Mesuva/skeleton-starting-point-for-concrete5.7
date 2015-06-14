<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="container">
<div class="row">

    <div class="sidebar four columns">
        <?php
        $a = new Area('Sidebar');
        $a->display($c);
        ?>
    </div>

    <div class="main-content eight columns" id="main">
        <?php
        $a = new Area('Main');
        $a->setAreaGridMaximumColumns(12);
        $a->enableGridContainer();
        $a->display($c);
        ?>
    </div>

</div>

</div>


<?php  $this->inc('elements/footer.php'); ?>
