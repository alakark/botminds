<footer class="footer" role="contentinfo">
      <div class="container ">
        <div class="row footer-menu">
          <div class="col-md-12 ml-auto">

          <?php 
$mainMenu = array(
'container' => false,
'theme_location' => 'main-menu',
);
wp_nav_menu($mainMenu);
?>

            </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-6">
            <p class="copyright">&copy; Copyright <?php echo date('Y'); ?> <a href="https://botminds.ai">Botminds.ai</a>. All Rights Reserved</p>
          </div>
<div class="col-md-6 mb-4 mb-md-0 text-right">
            <p class="social">
              <a href="#"><i class="lab la-facebook-f"></i></a>
                <a href="#"><i class="lab la-twitter"></i></a>
              <a href="#"><i class="lab la-instagram"></i></a>
              <a href="#"><i class="lab la-linkedin-in"></i></a>
            </p>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<?php wp_footer();?>
</body>

</html>