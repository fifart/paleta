 <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php echo date("Y"); ?> <?=$pages->get("/settings/")->site_title;?> <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates?>scripts/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo $config->urls->templates?>scripts/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $config->urls->templates?>scripts/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?=$config->urls->templates?>fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
  $(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });
});
</script>
  </body>
</html>