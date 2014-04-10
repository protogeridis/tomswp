<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php $rooturl = get_template_directory_uri(); ?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=249665595056102";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

           <!-- <div id="preloader" class="loading-overlay">
              <div id="status"><img src="<?php echo $rooturl; ?>/images/loader.gif" alt="TOMS Loading"></div>
         </div> -->



         <div id="header" class="header animate" data-spy="affix" data-offset-top="265">
              <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-sm-2">
                          <a href="#" class="logo header-logo animate"><img src="<?php echo $rooturl; ?>/images/logo_trans.png" alt="TOMS Logo"></a>
                     </div><!-- col md 3 -->

                     <div class="col-md-6 col-sm-8" id="headernav">
                          <ul class="nav main-menu">
                              <li class="main-menu-item"><a class="nav-button animate" href="#intro">Home</a></li>
                              <li class="main-menu-item"><a class="nav-button animate" href="#products">Products</a></li>
                              <li class="main-menu-item"><a class="nav-button animate" href="#giving">Giving</a></li>
                              <li class="main-menu-item"><a class="nav-button animate" href="#videos">Videos</a></li>
                              <li class="main-menu-item"><a class="nav-button animate" href="#stores">Stores</a></li>
                         </ul><!-- nav main menu -->
                    </div><!-- col md 6 -->




                    <div class="col-md-3 col-sm-2">

                     <ul class="header-social animate">
                         <li><a target="_blank" rel="nofollow" href="https://www.facebook.com/tomsgreece" class="animate"><i class="fa fa-facebook"></i></a></li>
                         <li><a target="_blank" rel="nofollow" href="http://instagram.com/tomsgreece" class="animate"><i class="fa fa-instagram"></i></a></li>
                    </ul><!-- header social -->

                    <div class="fb-like animate" data-href="https://www.facebook.com/tomsgreece" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>


               </div><!-- col md 3 col sm 2 -->
          </div><!-- row -->
     </div><!-- container -->
</div><!-- header -->

<div class="wrapper wrapper-image" id="intro">

    <div class="wrapper wrapper-absolute">
        <div class="intro-button">
            <a href="#products" class="button nav-button button-lightblue animate-button animate-button-out">View our Spring Collection</a>
       </div><!-- intro button -->
  </div><!-- wrapper absolute -->

  <ul class="bxslider" id="bxseasonal">
   <div class="slide">
       <img src="<?php echo $rooturl; ?>/images/banner.jpg" alt="TOMS Seasonal Banner">
  </div><!-- slide -->
</ul><!-- bxslider -->

</div><!-- wrapper image -->

<div class="wrapper wrapper-newsletter">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <section class="newsletter clearfix">


                   <!-- Begin MailChimp Signup Form -->
                   <div id="mc_embed_signup">
                    <form action="http://toms-shoes.us8.list-manage.com/subscribe/post?u=cc70c9d03472dcb46f93a0632&amp;id=b736f82e64" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                         <h4><strong>SIGN UP FOR EMAILS</strong> — We'd love to have you!</h4>
                         <input type="email" value="" name="EMAIL" class="required email" placeholder="Enter your Email" id="mce-EMAIL">
                         <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe"></div>
                         <div id="mce-responses">
                              <div class="response" id="mce-error-response" style="display:none"></div>
                              <div class="response" id="mce-success-response" style="display:none"></div>
                         </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                         <div style="position: absolute; left: -5000px;"><input type="text" name="b_cc70c9d03472dcb46f93a0632_b736f82e64" value=""></div>

                    </form>
               </div><!-- mc embed signup -->

          </section><!-- newsletter -->

     </div><!-- col md 12 -->
</div><!-- row -->
</div><!-- container -->

</div><!-- wrapper newsletter -->


<div class="wrapper wrapper-products" id="products">

   <?php $productcount = 12; ?>

   <div class="container">
       <div class="row">
           <div class="col-md-12">

               <section class="section-header">
                   <h2>Spring Collection 2014</h2>
                   <!--<p>Featuring a perforated upper in suede, we have added an element of sophistication to one of our most relaxed styles.</p>-->
              </section>

              <ul class="nav nav-tabs" id="producttab">
                   <li class="active"><a href="#men">Men</a></li>
                   <li><a href="#women">Women</a></li>
                   <li><a href="#tiny">Tiny</a></li>
                   <li><a href="#youth">Youth</a></li>
                   <li><a href="#eyewear">Eyewear</a></li>
              </ul><!-- nav tabs -->


              <div class="tab-content">


      



           <div class="tab-pane fade active in" id="women">

             <ul class="bxslider" id="bxslider-women">

                 <?php
                 for ($i = 1; $i <= $productcount; $i++) {
                     echo '<div class="slide product-big">' . 
                     '<img class="lazy" data-original="' .
                     $rooturl .
                     '/images/women/women' .
                     $i .
                     '.jpg" alt="TOMS Women">'.
                     '</div><!-- slide -->';
                }
                ?>



           </ul><!-- bxslider -->


           <div id="bx-pager-women" class="bx-pager">
            <?php
            for ($i = 1; $i <= $productcount; $i++) {
                echo '<a data-slide-index="' . 
                ($i - 1) .
                'href=""><img class="lazy" data-original="' .
                $rooturl .
                '/images/women/women' .
                $i .
                '.jpg" alt="TOMS Women" /></a>';
           }
           ?>
      </div><!-- bx pager -->

 </div><!-- tab pane -->

   <div class="tab-pane fade" id="men">

                       <ul class="bxslider" id="bxslider-men">

                           <?php
                           for ($i = 1; $i <= $productcount; $i++) {
                               echo '<div class="slide product-big">' . 
                               '<img class="lazy" data-original="' .
                               $rooturl .
                               '/images/men/men' .
                               $i .
                               '.jpg" alt="TOMS Men">'.
                               '</div><!-- slide -->';
                          }
                          ?>




                     </ul><!-- bxslider -->


                     <div id="bx-pager-men" class="bx-pager">
                      <?php
                      for ($i = 1; $i <= $productcount; $i++) {
                          echo '<a data-slide-index="' . 
                          ($i - 1) .
                          'href=""><img class="lazy" data-original="' .
                          $rooturl .
                          '/images/men/men' .
                          $i .
                          '.jpg" alt="TOMS Men" /></a>';
                     }
                     ?>
                </div><!-- bx pager -->

           </div><!-- tab pane -->


 <div class="tab-pane fade" id="youth">

   <ul class="bxslider" id="bxslider-youth">

       <?php
       for ($i = 1; $i <= $productcount; $i++) {
           echo '<div class="slide product-big">' . 
           '<img class="lazy" data-original="' .
           $rooturl .
           '/images/youth/youth' .
           $i .
           '.jpg" alt="TOMS Youth">'.
           '</div><!-- slide -->';
      }
      ?>




 </ul><!-- bxslider -->


 <div id="bx-pager-youth" class="bx-pager">
  <?php
  for ($i = 1; $i <= $productcount; $i++) {
      echo '<a data-slide-index="' . 
      ($i - 1) .
      'href=""><img class="lazy" data-original="' .
      $rooturl .
      '/images/youth/youth' .
      $i .
      '.jpg" alt="TOMS Youth" /></a>';
 }
 ?>
</div><!-- bx pager -->

</div><!-- tab pane -->


<div class="tab-pane fade" id="tiny">

   <ul class="bxslider" id="bxslider-tiny">
       <?php
       for ($i = 1; $i <= $productcount; $i++) {
           echo '<div class="slide product-big">' . 
           '<img class="lazy" data-original="' .
           $rooturl .
           '/images/tiny/tiny' .
           $i .
           '.jpg" alt="TOMS Eyewear">'.
           '</div><!-- slide -->';
      }
      ?>

 </ul><!-- bxslider -->


 <div id="bx-pager-tiny" class="bx-pager">
  <?php
  for ($i = 1; $i <= $productcount; $i++) {
      echo '<a data-slide-index="' . 
      ($i - 1) .
      'href=""><img class="lazy" data-original="' .
      $rooturl .
      '/images/tiny/tiny' .
      $i .
      '.jpg" alt="TOMS Tiny" /></a>';
 }
 ?>
</div><!-- bx pager -->

</div><!-- tab pane -->


<div class="tab-pane fade" id="eyewear">

   <ul class="bxslider" id="bxslider-eyewear">

       <?php
       for ($i = 1; $i <= $productcount; $i++) {
           echo '<div class="slide product-big">' . 
           '<img class="lazy" data-original="' .
           $rooturl .
           '/images/eyewear/eyewear' .
           $i .
           '.jpg" alt="TOMS Eyewear">'.
           '</div><!-- slide -->';
      }
      ?>

 </ul><!-- bxslider -->


 <div id="bx-pager-eyewear" class="bx-pager">

  <?php
  for ($i = 1; $i <= $productcount; $i++) {
      echo '<a data-slide-index="' . 
      ($i - 1) .
      'href=""><img class="lazy" data-original="' .
      $rooturl .
      '/images/eyewear/eyewear' .
      $i .
      '.jpg" alt="TOMS Eyewear" /></a>';
 }
 ?>

</div><!-- bx pager -->

</div><!-- tab pane -->


</div><!-- tab content -->







</div><!-- col md 12 -->
</div><!-- row -->
</div><!-- container -->
</div><!-- wrapper products -->




<div class="wrapper-giving" id="giving">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <header>
                   <h1 class="giving-title">We're in business to help change lives.</h1>
                   <p class="giving-paragraph">It's a big job, and we don't do it alone. With our customers and Giving Partners, we're transforming everyday purchases into a force for good around the world. <strong>One for One.®</strong></p>
              </header>
         </div><!-- col md 12 -->
    </div><!-- row -->
</div><!-- container -->

<div class="giving-mosaic">

</div><!-- giving mosaic -->

<div class="container" id="metrics">
  <div class="row">
      <div class="col-md-12">
          <div class="giving-metrics clearfix">
              <div class="metric metric-shoes animate">
                  <h3 class="animate animate-header">We give shoes in more than</h3>
                  <h2 class="metric-number" id="shoes-number">0</h2>
             </div>
             <div class="metric-separator">&amp;</div>
             <div class="metric metric-sight animate">
                  <h3 class="animate animate-header">We help restore sight in</h3>
                  <h2 class="metric-number" id="sight-number">0</h2>

             </div><!-- metric -->

        </div><!-- giving metrics -->

        <div class="giving-mission">
         <p class="giving-paragraph">With every product you purchase, TOMS will help a person in need. <strong>One for One.®</strong></p>
    </div><!-- giving mission -->

    <div class="giving-map">

    </div><!-- giving map -->

</div><!-- col md 12 -->
</div><!-- row -->
</div><!-- container -->

</div><!-- wrapper giving -->


<div class="wrapper wrapper-video" id="videos">
   <div class="container">

       <section class="section-header header-videos">
           <h2>Our Videos</h2>
           <!--<p>Featuring a perforated upper in suede, we have added an element of sophistication to one of our most relaxed styles.</p>-->
      </section>


      <div class="row">
           <div class="col-md-8">

               <div class="article article-big">
                   <section class="article-top">
                       <iframe height="417" src="//www.youtube.com/embed/wv-YbDqq4hE?controls=2&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  </section><!-- article-top -->
                  <section class="article-bottom">
                       <h2>One Day without Shoes 2013</h2>
                       <!--<p>We couldn't be more excited to launch our newest One for One® product - TOMS Roasting Co. Below is a piece written by Blake Mycoskie, TOMS Founder &amp; Chief Shoe Giver, sharing his thoughts on entering the coffee business. </p>-->
                  </section>
                  <section class="article-social">
                       <ul>
                           <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      </ul>
                 </section><!-- article social -->
                 <section class="article-label">Videos</section>
            </div><!-- article -->

       </div><!-- col md 8 -->

       <div class="col-md-4">

          <div class="row">
              <div class="col-md-12">
                  <div class="article article-small">
                      <section class="article-top">
                          <iframe height="150" src="//www.youtube.com/embed/RqBw_Du5qiI?controls=2&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                     </section><!-- article-top -->
                     <section class="article-bottom">
                          <h2>One Day without Shoes 2012</h2>
                         <!--<p>We couldn't be more excited to launch our newest One for One® product - TOMS Roasting Co.</p>-->
                     </section>
                     <section class="article-social">
                          <ul>
                              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         </ul>
                    </section><!-- article social -->
                    <section class="article-label">Videos</section>
               </div><!-- article -->
          </div><!-- nested col md 12 -->
     </div><!-- nested row -->

     <div class="row">
         <div class="col-md-12">
             <div class="article article-small">
                 <section class="article-top">
                     <iframe height="150" src="//www.youtube.com/embed/UWRRPeqNKtg?controls=2&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </section><!-- article-top -->
                <section class="article-bottom">
                     <h2>Fashion Workshop by Vicky Kaya</h2>
                     <!--<p>TOMS Founder &amp; Chief Shoe Giver, sharing his thoughts on entering the coffee business. </p>-->
                </section>
                <section class="article-social">
                     <ul>
                         <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
               </section><!-- article social -->
               <section class="article-label">Videos</section>
          </div><!-- article -->
     </div><!-- nested col md 12 -->
</div><!-- nested row -->


</div><!-- col md 4 -->

</div><!-- row -->
</div><!-- container -->
</div><!-- wrapper video -->


<div class="wrapper wrapper-map" id="stores">
   <div class="container">


       <!-- STORE LOCATOR DEMO -->
       <div id="jlocator">

           <!-- panel -->
           <div class="panel" data-type="panel">

               <section class="section-header header-map">
                   <h2>Store Locator</h2>
                   <p>Choose your region through the menu, and click on a store to view its location on the map.</p>
              </section>

              <!-- controls -->
              <div class="controls clearfix" data-type="controls">



                   <div class="box">




                       <div 
                       class="drop-down drop-region" 
                       data-control-type="drop-down" 
                       data-control-name="category-filter" 
                       data-control-action="filter">
                       <ul>

                        <li><span data-path="default">Όλες οι Περιοχές</span></li>
                        <li><span data-path=".Athens_-_Ag__Dimitrios">Athens - Ag. Dimitrios</span></li><li><span data-path=".Athens_-_Aigaleo">Athens - Aigaleo</span></li><li><span data-path=".Athens_-_Alimos">Athens - Alimos</span></li><li><span data-path=".Athens_-_Athens">Athens - Athens</span></li><li><span data-path=".Athens_-_Cholargos">Athens - Cholargos</span></li><li><span data-path=".Athens_-_Dafni">Athens - Dafni</span></li><li><span data-path=".Athens_-_Elefsina">Athens - Elefsina</span></li><li><span data-path=".Athens_-_Galatsi">Athens - Galatsi</span></li><li><span data-path=".Athens_-_Glyfada">Athens - Glyfada</span></li><li><span data-path=".Athens_-_Ilion">Athens - Ilion</span></li><li><span data-path=".Athens_-_Ilioupoli">Athens - Ilioupoli</span></li><li><span data-path=".Athens_-_Kalithea">Athens - Kalithea</span></li><li><span data-path=".Athens_-_Kifisia">Athens - Kifisia</span></li><li><span data-path=".Athens_-_Koridalos">Athens - Koridalos</span></li><li><span data-path=".Athens_-_Marousi">Athens - Marousi</span></li><li><span data-path=".Athens_-_Melissia">Athens - Melissia</span></li><li><span data-path=".Athens_-_Menidi">Athens - Menidi</span></li><li><span data-path=".Athens_-_N__Ionia">Athens - N. Ionia</span></li><li><span data-path=".Athens_-_N__Smirni">Athens - N. Smirni</span></li><li><span data-path=".Athens_-_N_Erithraia">Athens - N.Erithraia</span></li><li><span data-path=".Athens_-_Pagkrati">Athens - Pagkrati</span></li><li><span data-path=".Athens_-_Pallini">Athens - Pallini</span></li><li><span data-path=".Athens_-_Peristeri">Athens - Peristeri</span></li><li><span data-path=".Athens_-_Petroupoli">Athens - Petroupoli</span></li><li><span data-path=".Athens_-_Pikermi">Athens - Pikermi</span></li><li><span data-path=".Athens_-_Piraeus">Athens - Piraeus</span></li><li><span data-path=".Athens_-_Psihiko">Athens - Psihiko</span></li><li><span data-path=".Athens_-_Vrilissia">Athens - Vrilissia</span></li><li><span data-path=".Greek_Islands_-__Santorini">Greek Islands -  Santorini</span></li><li><span data-path=".Greek_Islands_-__Symi">Greek Islands -  Symi</span></li><li><span data-path=".Greek_Islands_-_Aegina">Greek Islands - Aegina</span></li><li><span data-path=".Greek_Islands_-_Antiparos">Greek Islands - Antiparos</span></li><li><span data-path=".Greek_Islands_-_Chios">Greek Islands - Chios</span></li><li><span data-path=".Greek_Islands_-_Corfu">Greek Islands - Corfu</span></li><li><span data-path=".Greek_Islands_-_Crete__Ag__Nikolaos_">Greek Islands - Crete (Ag. Nikolaos)</span></li><li><span data-path=".Greek_Islands_-_Crete__Heraklion_">Greek Islands - Crete (Heraklion)</span></li><li><span data-path=".Greek_Islands_-_Crete__Ierapetra_">Greek Islands - Crete (Ierapetra)</span></li><li><span data-path=".Greek_Islands_-_Crete__Rethimno_">Greek Islands - Crete (Rethimno)</span></li><li><span data-path=".Greek_Islands_-_Crete__Chania_">Greek Islands - Crete (Chania)</span></li><li><span data-path=".Greek_Islands_-_Hydra">Greek Islands - Hydra</span></li><li><span data-path=".Greek_Islands_-_Ios">Greek Islands - Ios</span></li><li><span data-path=".Greek_Islands_-_Kea">Greek Islands - Kea</span></li><li><span data-path=".Greek_Islands_-_Kefallonia">Greek Islands - Kefallonia</span></li><li><span data-path=".Greek_Islands_-_Kithnos">Greek Islands - Kithnos</span></li><li><span data-path=".Greek_Islands_-_Kos">Greek Islands - Kos</span></li><li><span data-path=".Greek_Islands_-_Lefkada">Greek Islands - Lefkada</span></li><li><span data-path=".Greek_Islands_-_Lemnos">Greek Islands - Lemnos</span></li><li><span data-path=".Greek_Islands_-_Mikonos">Greek Islands - Mikonos</span></li><li><span data-path=".Greek_Islands_-_Milos">Greek Islands - Milos</span></li><li><span data-path=".Greek_Islands_-_Mitilini">Greek Islands - Mitilini</span></li><li><span data-path=".Greek_Islands_-_Naxos">Greek Islands - Naxos</span></li><li><span data-path=".Greek_Islands_-_Paros">Greek Islands - Paros</span></li><li><span data-path=".Greek_Islands_-_Patmos">Greek Islands - Patmos</span></li><li><span data-path=".Greek_Islands_-_Rodos">Greek Islands - Rodos</span></li><li><span data-path=".Greek_Islands_-_Santorini">Greek Islands - Santorini</span></li><li><span data-path=".Greek_Islands_-_Sifnos">Greek Islands - Sifnos</span></li><li><span data-path=".Greek_Islands_-_Siros">Greek Islands - Siros</span></li><li><span data-path=".Greek_Islands_-_Skiathos">Greek Islands - Skiathos</span></li><li><span data-path=".Greek_Islands_-_Spetses">Greek Islands - Spetses</span></li><li><span data-path=".Greek_Islands_-_Zakynthos">Greek Islands - Zakynthos</span></li><li><span data-path=".Rest_of_Greece_-_Agrinio">Rest of Greece - Agrinio</span></li><li><span data-path=".Rest_of_Greece_-_Alexandroupoli">Rest of Greece - Alexandroupoli</span></li><li><span data-path=".Rest_of_Greece_-_Amaliada">Rest of Greece - Amaliada</span></li><li><span data-path=".Rest_of_Greece_-_Arahova">Rest of Greece - Arahova</span></li><li><span data-path=".Rest_of_Greece_-_Chalkida">Rest of Greece - Chalkida</span></li><li><span data-path=".Rest_of_Greece_-_Chalkidiki">Rest of Greece - Chalkidiki</span></li><li><span data-path=".Rest_of_Greece_-_Drama">Rest of Greece - Drama</span></li><li><span data-path=".Rest_of_Greece_-_Evia">Rest of Greece - Evia</span></li><li><span data-path=".Rest_of_Greece_-_Ioannina">Rest of Greece - Ioannina</span></li><li><span data-path=".Rest_of_Greece_-_Kalamata">Rest of Greece - Kalamata</span></li><li><span data-path=".Rest_of_Greece_-_Kastoria">Rest of Greece - Kastoria</span></li><li><span data-path=".Rest_of_Greece_-_Kiato">Rest of Greece - Kiato</span></li><li><span data-path=".Rest_of_Greece_-_Korinthos">Rest of Greece - Korinthos</span></li><li><span data-path=".Rest_of_Greece_-_Lamia">Rest of Greece - Lamia</span></li><li><span data-path=".Rest_of_Greece_-_Larisa">Rest of Greece - Larisa</span></li><li><span data-path=".Rest_of_Greece_-_Livadia">Rest of Greece - Livadia</span></li><li><span data-path=".Rest_of_Greece_-_Nafplio">Rest of Greece - Nafplio</span></li><li><span data-path=".Rest_of_Greece_-_Naousa">Rest of Greece - Naousa</span></li><li><span data-path=".Rest_of_Greece_-_Parga">Rest of Greece - Parga</span></li><li><span data-path=".Rest_of_Greece_-_Patra">Rest of Greece - Patra</span></li><li><span data-path=".Rest_of_Greece_-_Preveza">Rest of Greece - Preveza</span></li><li><span data-path=".Rest_of_Greece_-_Ptolemaida">Rest of Greece - Ptolemaida</span></li><li><span data-path=".Rest_of_Greece_-_Pylos">Rest of Greece - Pylos</span></li><li><span data-path=".Rest_of_Greece_-_Serres">Rest of Greece - Serres</span></li><li><span data-path=".Rest_of_Greece_-_Sparti">Rest of Greece - Sparti</span></li><li><span data-path=".Rest_of_Greece_-_Thiva">Rest of Greece - Thiva</span></li><li><span data-path=".Rest_of_Greece_-_Trikala">Rest of Greece - Trikala</span></li><li><span data-path=".Rest_of_Greece_-_Tripoli">Rest of Greece - Tripoli</span></li><li><span data-path=".Rest_of_Greece_-_Volos">Rest of Greece - Volos</span></li><li><span data-path=".Rest_of_Greece_-_Xanthi">Rest of Greece - Xanthi</span></li><li><span data-path=".Thessaloniki_-_Evosmos">Thessaloniki - Evosmos</span></li><li><span data-path=".Thessaloniki_-_Pilaia">Thessaloniki - Pilaia</span></li><li><span data-path=".Thessaloniki_-_Thessaloniki">Thessaloniki - Thessaloniki</span></li>

                   </ul>
              </div><!-- dd -->

         </div><!-- /box -->

    </div><!-- /controls -->

    <!-- store list -->
    <div id="storelist" class="stores box" data-type="stores">     

     <?php
     $url = "https://spreadsheets.google.com/pub?key=0Au4SKgP1fiAJdFhJdlRsNXpfLXBjc0pOcnZMZHZEVHc&output=csv";
     $row=0;
     $retString;
     $addSlug;
     $productArray;
     $productString;
     $productClass;

     $search = array(" ",".", "(",")",",");
     $replace = array("_", "_", "_", "_", "_");

     if (($handle = fopen($url, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          if($row==0){

               //If column headers go to the next loop
               $row++;
               continue;

          }else{

               //Replace unwanted characters
               $addSlug = str_replace($search, $replace, $data[5]);
               
               //Add products to an Array, then implode them into a string
               unset($productArray);
               $productArray = array();

               if($data[6]==1){
                    array_push($productArray, "M");
               }
               if($data[7]==1){
                    array_push($productArray, "W");
               }
               if($data[8]==1){
                    array_push($productArray, "T");
               }
               if($data[9]==1){
                 array_push($productArray, "Y");
            }
            $productString = implode(', ',$productArray);
            $productClass = implode(' ',$productArray);

               //Build html
            $retString = '<div data-type="store" class="store box" ' .
            'data-latitude="' . $data[2] . '" data-longitude="' . $data[3] . '">' .
            '<p class="'. $addSlug . ' ' . $productClass . '">' . 
            '<span class="title" data-type="title">' . $data[0] . '</span>' .
            '<span class="address" data-type="address">' . $data[1] . '</span>' .
            '<span class="products">'. $productString . '</span>' .
            '</p>' .
            '</div>';

            echo $retString;
            $row++;
       }
  }
  fclose($handle);
} ?>



</div><!-- stores -->

<!-- no results -->
<div class="box no-results" data-type="no-results">
     <p>No results found</p>
</div><!-- box -->

</div><!-- panel -->

<!-- map -->
<div class="map" data-type="map"></div>

</div>
<!-- end of STORE LOCATOR DEMO -->


</div><!-- container -->

</div><!-- wrapper map -->


<div class="wrapper wrapper-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="footer-header">
                    <h1>Want to know more?</h1>
                    <a class="button button-white" target="_blank" rel="nofollow" href="http://www.toms.com">Visit the official website</a>
               </header>
          </div>
     </div>
</div>
</div>
<!-- end of body -->


<?php get_footer(); ?>