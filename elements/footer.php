<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

     <footer class="container">
            <div class="twelve columns">
                <?php
                $a = new GlobalArea('Footer');
                $a->display($c);
                ?>
            </div>

     </footer>

</div>

<script src="<?php echo $this->getThemePath() . '/js/custom.js';?>"></script>
<?php  Loader::element('footer_required'); ?>

</body>
</html>
