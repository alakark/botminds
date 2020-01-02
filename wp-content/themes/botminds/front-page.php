<?php get_header(); ?>
<?php $hero = get_field('hero_section'); ?>

<main id="main">
      <div class="hero-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right" class="col-sm-7"><?php echo $hero['hero_title']; ?></h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100"><?php echo $hero['hero_tagline']; ?></p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#"
                      class="btn btn-outline-white"><?php echo $hero['hero_button']; ?></a> <a href="<?php echo $hero['hero_button_link_2']; ?>"
                      class="btn btn-outline-green"><?php echo $hero['hero_button_2']; ?><i class="lar la-play-circle font2"></i></a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="<?php echo $hero['hero_image']; ?>" alt="Image" data-aos="fade-right">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Trusted <span>By</span></h2>
            </div>
          </div>

          <div class="row">
            <img src="<?php bloginfo('template_directory'); ?>/img/partners.png" />
                        

            </div>

        </div>
      </div> <!-- .site-section -->
      <div class="site-section successScenarios">

        <div class="container">
             <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Sucess <span>Scenarios</span></h2>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="" id="slider">
            <?php
echo do_shortcode('[smartslider3 slider=1]');
?>
              
            </div>

          </div>
          <!--/main slider carousel-->

        </div>



      </div>


    </main>
<?php get_footer();?>