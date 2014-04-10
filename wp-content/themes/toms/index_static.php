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
          				</ul>
          			</div><!-- col md 6 -->




          			<div class="col-md-3 col-sm-2">

          				<ul class="header-social animate">
          					<li><a href="#" class="animate"><i class="fa fa-facebook"></i></a></li>
          					<li><a href="#" class="animate"><i class="fa fa-instagram"></i></a></li>
          				</ul>

          				<div class="fb-like animate" data-href="https://www.facebook.com/tomsgreece" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>


          			</div>
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
          			<img src="<?php echo $rooturl; ?>/images/banner2.jpg" alt="">
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
</div>

<!--End mc_embed_signup-->
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
          						<p>Featuring a perforated upper in suede, we have added an element of sophistication to one of our most relaxed styles.</p>
          					</section>

          					<ul class="nav nav-tabs" id="producttab">
          						<li class="active"><a href="#men">Men</a></li>
          						<li><a href="#women">Women</a></li>
          						<li><a href="#tiny">Tiny</a></li>
          						<li><a href="#youth">Youth</a></li>
          						<li><a href="#eyewear">Eyewear</a></li>
          					</ul>


          					<div class="tab-content">


          						<div class="tab-pane fade active in" id="men">

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
          						

          						
          						<div class="tab-pane fade" id="women">

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
          				<p>Featuring a perforated upper in suede, we have added an element of sophistication to one of our most relaxed styles.</p>
          			</section>


          			<div class="row">
          				<div class="col-md-8">

          					<div class="article article-big">
          						<section class="article-top">
          							<iframe height="417" src="//www.youtube.com/embed/wv-YbDqq4hE?controls=2&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
          						</section><!-- article-top -->
          						<section class="article-bottom">
          							<h2>One Day without Shoes 2013</h2>
          							<p>We couldn't be more excited to launch our newest One for One® product - TOMS Roasting Co. Below is a piece written by Blake Mycoskie, TOMS Founder &amp; Chief Shoe Giver, sharing his thoughts on entering the coffee business. </p>
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
          									<p>We couldn't be more excited to launch our newest One for One® product - TOMS Roasting Co.</p>
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
          									<p>TOMS Founder &amp; Chief Shoe Giver, sharing his thoughts on entering the coffee business. </p>
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
          						<p>Featuring a perforated upper in suede, we have added an element of sophistication to one of our most relaxed styles.</p>
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
          				<div class="stores box" data-type="stores">     

<div data-type="store" class="store box" data-latitude="37.94633" data-longitude="23.73904"><p class="Athens_-_Ag__Dimitrios men women"><span class="title" data-type="title">Athens Metro Mall - Sagiakos</span><span class="address" data-type="address">273 Vouliagmenis Av., Ag. Dimitrios, Athens, 17343</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9959426" data-longitude="23.6830046"><p class="Athens_-_Aigaleo women"><span class="title" data-type="title">Pitti</span><span class="address" data-type="address">8 N.Plastira Str., Aigaleo, Athens, 12242</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.9959426" data-longitude="23.6830046"><p class="Athens_-_Aigaleo men women tiny youth"><span class="title" data-type="title">Sagiakos</span><span class="address" data-type="address">4 Panormou Str., Aigaleo, Athens, 12242</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="0" data-longitude="0"><p class="Athens_-_Alimos men women tiny youth"><span class="title" data-type="title">Shopping House</span><span class="address" data-type="address">1 lagadion &amp; Papanoutsou Str., Alimos, Athens, 17456</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9771613" data-longitude="23.7317537"><p class="Athens_-_Athens men women"><span class="title" data-type="title">Attica Department Store</span><span class="address" data-type="address">8 Panepistimiou Str., Athens, Athens, 10562</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9779876" data-longitude="23.7395427"><p class="Athens_-_Athens tiny youth"><span class="title" data-type="title">Lapin House</span><span class="address" data-type="address">2 Anagnostopoulou Str., Athens, Athens, 10673</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0518846" data-longitude="23.7044342"><p class="Athens_-_Athens tiny youth"><span class="title" data-type="title">Lapin House</span><span class="address" data-type="address">21 Ermou Str., Athens, 10563</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0784669" data-longitude="23.7058223"><p class="Athens_-_Athens men women"><span class="title" data-type="title">Detroit</span><span class="address" data-type="address">88 Mitropoleos Str., Athens, Athens, 10555</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.97362" data-longitude="23.7280372"><p class="Athens_-_Athens men women tiny youth"><span class="title" data-type="title">Emmanouella's</span><span class="address" data-type="address">10 Pandrosou Str., Athens, Athens, 10556</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9757882" data-longitude="23.7413399"><p class="Athens_-_Athens men women tiny youth"><span class="title" data-type="title">Pop Up Store</span><span class="address" data-type="address">2 Patriarchou Ioakim Str., Athens, Athens, 10674</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9757882" data-longitude="23.7413399"><p class="Athens_-_Athens men women"><span class="title" data-type="title">Sotris</span><span class="address" data-type="address">41 Voukourestiou &amp; Tsakalof Str., Athens, Athens, 10674</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9757882" data-longitude="23.7413399"><p class="Athens_-_Athens men women tiny youth"><span class="title" data-type="title">Danny Shop</span><span class="address" data-type="address">17 Irakleitou &amp; Tsakalof Str., Athens, Athens, 10674</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0518846" data-longitude="23.7044342"><p class="Athens_-_Athens tiny youth"><span class="title" data-type="title">Mouger</span><span class="address" data-type="address">6 Ermou str., Athens, Athens, 10563</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9981696" data-longitude="23.7310594"><p class="Athens_-_Athens tiny youth"><span class="title" data-type="title">Vento</span><span class="address" data-type="address">141 Patission Str., Athens, 11251</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.99848" data-longitude="23.79932"><p class="Athens_-_Cholargos women"><span class="title" data-type="title">Flash</span><span class="address" data-type="address">56 Perikleous Str., Cholargos, Athens, 15561</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.99922" data-longitude="23.7984"><p class="Athens_-_Cholargos tiny youth"><span class="title" data-type="title">Vento</span><span class="address" data-type="address">50 Perikleous Str., Cholargos, Athens, 15561</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.94989" data-longitude="23.73647"><p class="Athens_-_Dafni men women"><span class="title" data-type="title">John-Andy</span><span class="address" data-type="address">39 Kanari str., Dafni, Athens, 17235</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0440876" data-longitude="23.5383853"><p class="Athens_-_Elefsina women"><span class="title" data-type="title">Tourlis</span><span class="address" data-type="address">43 Iroon Politechneiou, Elefsina, 19200</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.0192869" data-longitude="23.7520535"><p class="Athens_-_Galatsi men women tiny youth"><span class="title" data-type="title">Sagiakos</span><span class="address" data-type="address">15-17 Veikou Str., Galatsi, Athens, 11146</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.8619956" data-longitude="23.7541813"><p class="Athens_-_Glyfada tiny youth"><span class="title" data-type="title">Lapin House</span><span class="address" data-type="address">16 Gr. Labraki Str. &amp; Metaxa, Glyfada, 16674</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.8705087" data-longitude="23.7641979"><p class="Athens_-_Glyfada tiny youth"><span class="title" data-type="title">Lapin Magicland</span><span class="address" data-type="address">97 Vouliagmenis Av. &amp; Archimidous, Glyfada, 16674</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9375" data-longitude="23.73926"><p class="Athens_-_Glyfada tiny youth"><span class="title" data-type="title">Poline</span><span class="address" data-type="address">13 Gr. Labraki Str., Glyfada, Athens, 16675</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.90041" data-longitude="23.74637"><p class="Athens_-_Glyfada men women"><span class="title" data-type="title">Collective</span><span class="address" data-type="address">96 Vouliagmenis Av., Glyfada , Athens, 16675</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9253781" data-longitude="23.7307639"><p class="Athens_-_Glyfada men"><span class="title" data-type="title">Ensayar</span><span class="address" data-type="address">55 Kyprou str., Glyfada , Athens, 16674</span><span class="products">M</span></p></div><div data-type="store" class="store box" data-latitude="37.8612584" data-longitude="23.7540712"><p class="Athens_-_Glyfada women"><span class="title" data-type="title">Ensayar</span><span class="address" data-type="address">2B Plateia Esperidon, Glyfada , Athens, 16674</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.9099" data-longitude="23.73659"><p class="Athens_-_Glyfada tiny youth"><span class="title" data-type="title">Mouger</span><span class="address" data-type="address">15 Gr. Labraki Str., Glyfada , Athens, 16675</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.03006" data-longitude="23.70821"><p class="Athens_-_Ilion men women"><span class="title" data-type="title">Room 96</span><span class="address" data-type="address">96 Filoktiti Str., Ilion, Athens, 13122</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.93259" data-longitude="23.74479"><p class="Athens_-_Ilioupoli tiny youth"><span class="title" data-type="title">Marasil</span><span class="address" data-type="address">423 B. Vouliagmenis Avenue, Ilioupoli, Athens, 16346</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.93539" data-longitude="23.75629"><p class="Athens_-_Ilioupoli women"><span class="title" data-type="title">Unique Women Style</span><span class="address" data-type="address">24 Irinis Av., Ilioupoli, Athens, 16345</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.9349" data-longitude="23.75625"><p class="Athens_-_Ilioupoli men women"><span class="title" data-type="title">Rebels</span><span class="address" data-type="address">30 Irinis Av., Ilioupoli, Athens, 16345</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.958459" data-longitude="23.699208"><p class="Athens_-_Kalithea men women"><span class="title" data-type="title">Epsilon</span><span class="address" data-type="address">25 Sivitanidou, Kallithea, Athens, 17676</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9572519" data-longitude="23.7040634"><p class="Athens_-_Kalithea tiny youth"><span class="title" data-type="title">Dee_es</span><span class="address" data-type="address">145 Thiseos, Kalithea, Athens, 17672</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.1406689" data-longitude="23.7798571"><p class="Athens_-_Kifisia tiny youth"><span class="title" data-type="title">Frattina</span><span class="address" data-type="address">1 Kolokotroni Str., Kifisia, Athens, 14562</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.09966" data-longitude="23.80136"><p class="Athens_-_Kifisia tiny youth"><span class="title" data-type="title">Lapin Magicland</span><span class="address" data-type="address">17 klm E.O. Athinon-Lamias Achaias &amp; Trizinas, Kifisia, Athens, 14564</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0725469" data-longitude="23.8138149"><p class="Athens_-_Kifisia tiny youth"><span class="title" data-type="title">Lapin House</span><span class="address" data-type="address">5 Levidou, Kifisia, Athens, 14562</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0689222" data-longitude="23.8123633"><p class="Athens_-_Kifisia men women"><span class="title" data-type="title">Detroit</span><span class="address" data-type="address">6-8 Kiriazi., Kifisia, Athens, 14562</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0732635" data-longitude="23.8128202"><p class="Athens_-_Kifisia men women"><span class="title" data-type="title">Kix</span><span class="address" data-type="address">8 Panagitsas, Kifisia, Athens, 14562</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9798876" data-longitude="23.6536096"><p class="Athens_-_Koridalos women"><span class="title" data-type="title">Kalista</span><span class="address" data-type="address">78 Taxiarchon, Koridalos, Athens, 18120</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.0331304" data-longitude="23.7926313"><p class="Athens_-_Marousi tiny youth"><span class="title" data-type="title">Golden Hall - Lapin House</span><span class="address" data-type="address">37A Kifissias, Marousi, Athens, 15124</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0331304" data-longitude="23.7926313"><p class="Athens_-_Marousi men women tiny youth"><span class="title" data-type="title">Golden Hall - Attica</span><span class="address" data-type="address">37A Kifissias, Marousi, Athens, 15124</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0210917" data-longitude="23.7985838"><p class="Athens_-_Marousi tiny youth"><span class="title" data-type="title">The Mall Athens- Lapin House</span><span class="address" data-type="address">35 Andrea Papandreou Str., Marousi, Athens, 15122</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0210917" data-longitude="23.7985838"><p class="Athens_-_Marousi men women"><span class="title" data-type="title">The Mall Athens- Motorbike</span><span class="address" data-type="address">35 Andrea Papandreou Str., Marousi, Athens, 15122</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0210917" data-longitude="23.7985838"><p class="Athens_-_Marousi men women"><span class="title" data-type="title">The Mall Athens- Alter Shops</span><span class="address" data-type="address">35 Andrea Papandreou Str., Marousi, Athens, 15122</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0331304" data-longitude="23.7926313"><p class="Athens_-_Marousi men women"><span class="title" data-type="title">Golden Hall - Sotris</span><span class="address" data-type="address">37A Kifissias, Marousi, Athens, 15124</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0548083" data-longitude="23.8079502"><p class="Athens_-_Marousi women"><span class="title" data-type="title">Mara</span><span class="address" data-type="address">9 Mitropoleos, Marousi, Athens, 15124</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.0391068" data-longitude="23.8010714"><p class="Athens_-_Marousi tiny youth"><span class="title" data-type="title">Avenue - Mouger</span><span class="address" data-type="address">41-47 Kifissias, Marousi, Athens, 15124</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0444105" data-longitude="23.7396645"><p class="Athens_-_Marousi tiny youth"><span class="title" data-type="title">Papillon</span><span class="address" data-type="address">23 Plastira Str., Marousi, Athens, 15124</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0210917" data-longitude="23.7985838"><p class="Athens_-_Marousi tiny youth"><span class="title" data-type="title">The Mall Athens - Mouger</span><span class="address" data-type="address">35 Andrea Papandreou Str., Marousi, Athens, 15122</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.05008" data-longitude="23.83961"><p class="Athens_-_Melissia tiny youth"><span class="title" data-type="title">Lapin Magicland</span><span class="address" data-type="address">Andrea Papandreou &amp; 17 Trapezountos Str., Melissia, Athens, 15127</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0959" data-longitude="23.73879"><p class="Athens_-_Menidi men women tiny youth"><span class="title" data-type="title">Katsandris</span><span class="address" data-type="address">12 Parnithos, Acharnai, Greece, 13674</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0431" data-longitude="23.75127"><p class="Athens_-_N__Ionia men women"><span class="title" data-type="title">Pentavras</span><span class="address" data-type="address">34-38 K. Varnali Str., N. Ionia, Athens, 14231</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9633155" data-longitude="23.7295933"><p class="Athens_-_N__Smirni women"><span class="title" data-type="title">Mara</span><span class="address" data-type="address">28 E.Venizelou  Str., N. Smirni, Athens, 11743</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.1009527" data-longitude="23.8185896"><p class="Athens_-_N_Erithraia women"><span class="title" data-type="title">Tsouderos</span><span class="address" data-type="address">28 Agion Saranta, N.Erithraia, Athens, 14671</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.0884252" data-longitude="23.8160431"><p class="Athens_-_N_Erithraia tiny youth"><span class="title" data-type="title">Mouger</span><span class="address" data-type="address">127 Char. Trikoupi, N.Erithraia, Athens, 14671</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9716429" data-longitude="23.7472883"><p class="Athens_-_Pagkrati tiny youth"><span class="title" data-type="title">Poline</span><span class="address" data-type="address">24 Eftixidou Str., Pagkrati, Athens, 11635</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9668506" data-longitude="23.75"><p class="Athens_-_Pagkrati tiny youth"><span class="title" data-type="title">Sakis</span><span class="address" data-type="address">41 Chremonidou Str., Pagkrati, Athens, 11633</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9991371" data-longitude="23.8801508"><p class="Athens_-_Pallini men women tiny youth"><span class="title" data-type="title">Sportcafe</span><span class="address" data-type="address">38 Ethnikis Antistaseos, Pallini</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0117014" data-longitude="23.6957128"><p class="Athens_-_Peristeri tiny youth"><span class="title" data-type="title">Mouger</span><span class="address" data-type="address">162 Athinon Avenue, Peristeri, 12134</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0419146" data-longitude="23.6880689"><p class="Athens_-_Peristeri men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">57 Ethnikis Antistaseos Str., Peristeri, 12134</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.01063" data-longitude="23.69724"><p class="Athens_-_Peristeri tiny youth"><span class="title" data-type="title">Sagiakos</span><span class="address" data-type="address">21 Panagi Tsaldari Str., Peristeri, Athens, 12134</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9653687" data-longitude="23.7272089"><p class="Athens_-_Peristeri men women"><span class="title" data-type="title">Sagiakos</span><span class="address" data-type="address">4 H. Smyrnis Str., Peristeri, Athens, 12134</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0416703" data-longitude="23.6886262"><p class="Athens_-_Petroupoli tiny youth"><span class="title" data-type="title">Kids House</span><span class="address" data-type="address">78 Varnali Str.  , Petroupoli, Athens, 13231</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0403718" data-longitude="23.6883961"><p class="Athens_-_Petroupoli men women"><span class="title" data-type="title">Mitropoulos</span><span class="address" data-type="address">117 25 Martiou, Petroupoli, Athens, 13231</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.02479" data-longitude="23.89635"><p class="Athens_-_Pikermi women"><span class="title" data-type="title">Sky Line</span><span class="address" data-type="address">27 Marathonos Av., Pikermi, Athens, 19009</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.9415582" data-longitude="23.6470295"><p class="Athens_-_Piraeus tiny youth"><span class="title" data-type="title">Lapin House</span><span class="address" data-type="address">125 Karaiskou &amp; Sotiros, Piraeus, 18535</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.94116" data-longitude="23.64552"><p class="Athens_-_Piraeus women"><span class="title" data-type="title">Elein</span><span class="address" data-type="address">55-57 Iroon Politexneiou &amp; 52 Bouboulinas, Piraeus, 18535</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.9394211" data-longitude="23.6486456"><p class="Athens_-_Piraeus men women"><span class="title" data-type="title">Nodus</span><span class="address" data-type="address">114 Grigoriou Labraki, Piraeus, 18535</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.9406273" data-longitude="23.6490029"><p class="Athens_-_Piraeus tiny youth"><span class="title" data-type="title">Iscream</span><span class="address" data-type="address">168 Odyssea Androutsou, Piraeus, 18535</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9739952" data-longitude="23.6279674"><p class="Athens_-_Piraeus men women"><span class="title" data-type="title">Sagiakos</span><span class="address" data-type="address">17 V. Georgiou A, Piraeus,  18532</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.0049076" data-longitude="23.7785742"><p class="Athens_-_Psihiko women"><span class="title" data-type="title">Matchbox</span><span class="address" data-type="address">1 Psihari Str., Psihiko, Athens, 15451</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.0583377" data-longitude="23.7922053"><p class="Athens_-_Psihiko tiny youth"><span class="title" data-type="title">Frattina</span><span class="address" data-type="address">240 Kifisias Str., Psihiko, Athens, 15451</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0049076" data-longitude="23.7785742"><p class="Athens_-_Psihiko men women tiny youth"><span class="title" data-type="title">Danny Shop</span><span class="address" data-type="address">1 Psihari Str., Psihiko, Athens, 15451</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0329785" data-longitude="23.831904"><p class="Athens_-_Vrilissia men women tiny youth"><span class="title" data-type="title">Sportcafe</span><span class="address" data-type="address">Vrillisia, Athens, 15235</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="36.4166485" data-longitude="25.432447"><p class="Greek_Islands_-__Santorini men women"><span class="title" data-type="title">Source by Gavallas</span><span class="address" data-type="address">Fira-Gold Street,  Santorini , Greece, 84700</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.6156541" data-longitude="27.8359617"><p class="Greek_Islands_-__Symi men women tiny youth"><span class="title" data-type="title">Mina's</span><span class="address" data-type="address">Gialos,  Symi, Greece, 85600</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.7408815" data-longitude="23.5014213"><p class="Greek_Islands_-_Aegina men women"><span class="title" data-type="title">To Fistiki</span><span class="address" data-type="address">Aegina,  Aegina, Greece, 18010</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.0403398" data-longitude="25.0814153"><p class="Greek_Islands_-_Antiparos men women"><span class="title" data-type="title">Zali (wear the summer)</span><span class="address" data-type="address">Antiparos,  Antiparos, Greece, 84007</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.3709813" data-longitude="26.1363457"><p class="Greek_Islands_-_Chios men women"><span class="title" data-type="title">The fe-male store</span><span class="address" data-type="address">Chios, Chios, Greece, 82100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.3696588" data-longitude="26.1361531"><p class="Greek_Islands_-_Chios tiny youth"><span class="title" data-type="title">Da El</span><span class="address" data-type="address">Varvaki kai Dimogerontias 3, Chios, Greece, 82100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="39.7627551" data-longitude="19.8186982"><p class="Greek_Islands_-_Corfu women"><span class="title" data-type="title">Mezzo Mezzo</span><span class="address" data-type="address">38 Nikiforou Theotoki Str., Corfu, Greece, 49100</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="39.7627551" data-longitude="19.8186982"><p class="Greek_Islands_-_Corfu women"><span class="title" data-type="title">Mezzo Mezzo</span><span class="address" data-type="address">16 Michail Theotoki Str., Corfu, Greece, 49100</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="39.7627551" data-longitude="19.8186982"><p class="Greek_Islands_-_Corfu tiny youth"><span class="title" data-type="title">Emporio 014</span><span class="address" data-type="address">25 Sevastianou Str.,  Corfu, Greece, 49100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="35.2230333" data-longitude="25.7221123"><p class="Greek_Islands_-_Crete__Ag__Nikolaos_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">24-26 Roussou Koundourou Str., Ag. Nikolaos, Crete, Greece, 72100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.1895242" data-longitude="25.7175329"><p class="Greek_Islands_-_Crete__Ag__Nikolaos_ men women"><span class="title" data-type="title">Gusto</span><span class="address" data-type="address">N.Plastira &amp; 28 Oktovriou, Ag. Nikolaos, Crete, Greece, 72100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.3371534" data-longitude="25.1265298"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Antonella's boutique</span><span class="address" data-type="address">93 1821 Str., Heraklion, Crete, Greece, 71201</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.0118955" data-longitude="25.7407452"><p class="Greek_Islands_-_Crete__Ierapetra_ tiny youth"><span class="title" data-type="title">Sugar Cube</span><span class="address" data-type="address">8 N. Foka Str.,  Ierapetra, Crete, Greece, 72200</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box active" data-latitude="35.0090498" data-longitude="25.739833"><p class="Greek_Islands_-_Crete__Ierapetra_ men women"><span class="title" data-type="title">Sugar Cube</span><span class="address" data-type="address">21 Platia Eleftherias, Ierapetra, Greece, 72200</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.3643615" data-longitude="24.4821552"><p class="Greek_Islands_-_Crete__Rethimno_ men women"><span class="title" data-type="title">Duomo</span><span class="address" data-type="address">124 Arkadiou Str.,  Rethimno, Crete, Greece, 74100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.337249" data-longitude="25.1333357"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">20 Ikarou Avenue, Heraklion, Crete, Greece, 71201</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.3371534" data-longitude="25.1265298"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">23 1821 Str., Heraklion, Crete, Greece, 71201</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.337249" data-longitude="25.1333357"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">14 Evans Str., Heraklion, Crete, Greece, 71201</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.337249" data-longitude="25.1333357"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">1 Dedalou Str. Heraklion, Crete, Greece, 71201</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.2230333" data-longitude="25.7221123"><p class="Greek_Islands_-_Crete__Ag__Nikolaos_ men women tiny youth"><span class="title" data-type="title">Charitakis</span><span class="address" data-type="address">29 Kontogianni Str.,  Ag. Nikolaos, Crete, Greece, 72100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="35.512758" data-longitude="24.0225993"><p class="Greek_Islands_-_Crete__Chania_ men women"><span class="title" data-type="title">Tessera</span><span class="address" data-type="address">21 Tzanakaki Str., Chania, Greece, 73134</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.3413593" data-longitude="25.1348831"><p class="Greek_Islands_-_Crete__Heraklion_ men women tiny youth"><span class="title" data-type="title">Avenue</span><span class="address" data-type="address">19 Plateia Eleftherias Str., Heraklion, Crete, Greece, 71202</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="35.3413593" data-longitude="25.1348831"><p class="Greek_Islands_-_Crete__Heraklion_ men women"><span class="title" data-type="title">Avenue</span><span class="address" data-type="address">30 Kalokairinou Av., Heraklion, Crete, Greece, 71202</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.337249" data-longitude="25.1333357"><p class="Greek_Islands_-_Crete__Heraklion_ tiny youth"><span class="title" data-type="title">Julianni Studio</span><span class="address" data-type="address">6 Monis Odigitrias Str, Heraklion, Crete, Greece, 71201</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="35.3643615" data-longitude="24.4821552"><p class="Greek_Islands_-_Crete__Rethimno_ tiny youth"><span class="title" data-type="title">Happy Feet</span><span class="address" data-type="address">243 Arkadiou Str., Rethimno, Crete, Greece, 74100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="35.5138298" data-longitude="24.0180367"><p class="Greek_Islands_-_Crete__Chania_ men women"><span class="title" data-type="title">Cosmos Sport</span><span class="address" data-type="address">2 Chrysanthou Episkopou Str., Chania, Greece, 73100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="35.5130828" data-longitude="24.0218764"><p class="Greek_Islands_-_Crete__Chania_ tiny youth"><span class="title" data-type="title">Papoutsomenos Gatos</span><span class="address" data-type="address">9 Tzanakaki Str., Chania, Greece, 73100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.3287894" data-longitude="23.4716567"><p class="Greek_Islands_-_Hydra men women tiny youth"><span class="title" data-type="title">Spoilled</span><span class="address" data-type="address">Tompazi Str.,  Hydra, Greece, 18040</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="36.6905135" data-longitude="25.3548713"><p class="Greek_Islands_-_Ios men women"><span class="title" data-type="title">Second Skin</span><span class="address" data-type="address">Ios,  Ios, Greece, 84001</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.6657165" data-longitude="24.323943"><p class="Greek_Islands_-_Kea women"><span class="title" data-type="title">Mojo</span><span class="address" data-type="address">Vourkari,  Kea, Greece, 84002</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="37.6657165" data-longitude="24.323943"><p class="Greek_Islands_-_Kea men women tiny youth"><span class="title" data-type="title">Emmanouella's</span><span class="address" data-type="address">Vourkari,  Kea, Greece, 84002</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.3122124" data-longitude="20.5777358"><p class="Greek_Islands_-_Kefallonia men women"><span class="title" data-type="title">Tzanetatos</span><span class="address" data-type="address">21 Lithostrotou Str. Argostoli,  Kefallonia, Greece, 28081</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.2520447" data-longitude="24.4648394"><p class="Greek_Islands_-_Kithnos men women"><span class="title" data-type="title">Hartino Karavi</span><span class="address" data-type="address">Chora Kithnos,  Kithnos, Greece, 84006</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.8925871" data-longitude="27.2877926"><p class="Greek_Islands_-_Kos men women"><span class="title" data-type="title">Feel</span><span class="address" data-type="address">19 Vas Pauvlou 19 Str.,  Kos, Greece, 85300</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.8333663" data-longitude="20.7069108"><p class="Greek_Islands_-_Lefkada men women"><span class="title" data-type="title">Drakatos</span><span class="address" data-type="address">174 St.I. Mela Str.,  Lefkada, Greece, 31100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.875265" data-longitude="25.063448"><p class="Greek_Islands_-_Lemnos men women tiny youth"><span class="title" data-type="title">Lemnos Sports House</span><span class="address" data-type="address">Myrina,  Lemnos, Greece, 81400</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.4467185" data-longitude="25.3288623"><p class="Greek_Islands_-_Mikonos men women"><span class="title" data-type="title">Jorjy Boutique</span><span class="address" data-type="address">42 Matoghiannia - Town,  Mikonos, Greece, 84600</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.4467185" data-longitude="25.3288623"><p class="Greek_Islands_-_Mikonos tiny youth"><span class="title" data-type="title">CDEC</span><span class="address" data-type="address">Mikonos, Greece, 84600</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="36.7438541" data-longitude="24.422605"><p class="Greek_Islands_-_Milos men women"><span class="title" data-type="title">AELIA</span><span class="address" data-type="address">Milos, Greece, 84800</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.1067382" data-longitude="26.5572747"><p class="Greek_Islands_-_Mitilini women"><span class="title" data-type="title">VIPS</span><span class="address" data-type="address">42 Kavetsou Str., Mitilini, Greece, 81100</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="39.1067382" data-longitude="26.5572747"><p class="Greek_Islands_-_Mitilini men"><span class="title" data-type="title">VIPS</span><span class="address" data-type="address">103 Ermou Str., Mitilini, Greece, 81100</span><span class="products">M</span></p></div><div data-type="store" class="store box" data-latitude="36.968509" data-longitude="25.5857354"><p class="Greek_Islands_-_Naxos men women tiny youth"><span class="title" data-type="title">Izu</span><span class="address" data-type="address">Chora Naxou,  Naxos, Greece, 84300</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.1139955" data-longitude="25.2422684"><p class="Greek_Islands_-_Paros men women"><span class="title" data-type="title">Angel</span><span class="address" data-type="address">Limanaki  Naoussas,  Paros, Greece, 84401</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.1235743" data-longitude="25.238722"><p class="Greek_Islands_-_Paros tiny youth"><span class="title" data-type="title">CDEC</span><span class="address" data-type="address">Naoussa,  Paros, Greece, 84401</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.3221873" data-longitude="26.5433618"><p class="Greek_Islands_-_Patmos men women"><span class="title" data-type="title">Iliotropio</span><span class="address" data-type="address">Skala,  Patmos, Greece, 85500</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.3221873" data-longitude="26.5433618"><p class="Greek_Islands_-_Patmos men women"><span class="title" data-type="title">ΕΣΘΙΡ</span><span class="address" data-type="address">Skala,  Patmos, Greece, 85500</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.4349631" data-longitude="28.2174829"><p class="Greek_Islands_-_Rodos men women"><span class="title" data-type="title">Calceis Pennatis</span><span class="address" data-type="address">52-54 Gr. Lambraki str.,  Rodos, Greece, 85100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.3931562" data-longitude="25.4615092"><p class="Greek_Islands_-_Santorini men women tiny"><span class="title" data-type="title">Ammos</span><span class="address" data-type="address">Oia, Santorini, Greece, 84700</span><span class="products">M, W, T</span></p></div><div data-type="store" class="store box" data-latitude="36.3770012" data-longitude="25.4807115"><p class="Greek_Islands_-_Santorini men women"><span class="title" data-type="title">Ammos</span><span class="address" data-type="address">Kamari Thiras, Santorini, Greece, 84700</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.42" data-longitude="25.4316667"><p class="Greek_Islands_-_Santorini men women"><span class="title" data-type="title">Gavallas</span><span class="address" data-type="address">Fira ,  Santorini, Greece, 84700</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="36.9733563" data-longitude="24.7239075"><p class="Greek_Islands_-_Sifnos men women"><span class="title" data-type="title">Lile Chaussee</span><span class="address" data-type="address">Apolonia,  Sifnos, Greece, 84003</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.4418105" data-longitude="24.9404242"><p class="Greek_Islands_-_Siros men women tiny youth"><span class="title" data-type="title">Pop up the house</span><span class="address" data-type="address">10 Thimaton Sperchiou Str., Ermoupoli, Siros, Greece, 84100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="39.1626627" data-longitude="23.4909759"><p class="Greek_Islands_-_Skiathos men women tiny youth"><span class="title" data-type="title">Mare Gaia</span><span class="address" data-type="address">21 Papadiamanti Str., Skiathos, Greece, 37002</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.2632783" data-longitude="23.1571722"><p class="Greek_Islands_-_Spetses men women"><span class="title" data-type="title">Katerina’s boutique</span><span class="address" data-type="address">Dapia,  Spetses, Greece, 18050</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.7881604" data-longitude="20.8988271"><p class="Greek_Islands_-_Zakynthos men women"><span class="title" data-type="title">Chionis</span><span class="address" data-type="address">48 Alexandrou Roma str.,  Zakynthos, Greece, 29100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.6253149" data-longitude="21.4107305"><p class="Rest_of_Greece_-_Agrinio women"><span class="title" data-type="title">Bereris Donna</span><span class="address" data-type="address">Staikou &amp; Kiprou,  Agrinio, Greece, 30100</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.6244719" data-longitude="21.4095934"><p class="Rest_of_Greece_-_Agrinio men women tiny youth"><span class="title" data-type="title">Papakammenos sport</span><span class="address" data-type="address">22 Dimotseliou Str.,  Agrinio, Greece, 30100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="40.8457193" data-longitude="25.873962"><p class="Rest_of_Greece_-_Alexandroupoli men women tiny youth"><span class="title" data-type="title">Dangerous Minds</span><span class="address" data-type="address">24 14 Maiou Str.,  Alexandroupoli, Greece, 68100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.7971207" data-longitude="21.3453027"><p class="Rest_of_Greece_-_Amaliada men women"><span class="title" data-type="title">Trace</span><span class="address" data-type="address">Archaias Ilidos kai Riga Fereou 2, Amaliada, Greece, 27200</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.5020866" data-longitude="22.5734992"><p class="Rest_of_Greece_-_Arahova men women"><span class="title" data-type="title">Feelak.y</span><span class="address" data-type="address">Arahova,  Viotoia, Greece, 32004</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.4652547" data-longitude="23.594832"><p class="Rest_of_Greece_-_Chalkida men women"><span class="title" data-type="title">Gravity</span><span class="address" data-type="address">3 Antoniou Str.,  Chalkida, Greece, 34100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.4615326" data-longitude="23.6115021"><p class="Rest_of_Greece_-_Chalkida tiny youth"><span class="title" data-type="title">Tzina</span><span class="address" data-type="address">3 Stoa Chalkidikis,  Chalkida, Greece, 34100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.4645419" data-longitude="23.5940084"><p class="Rest_of_Greece_-_Chalkida men women"><span class="title" data-type="title">Beaty Collection</span><span class="address" data-type="address">23 Ermou Str.,  Chalkida, Greece, 34100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.0480392" data-longitude="23.4134501"><p class="Rest_of_Greece_-_Chalkidiki men women tiny youth"><span class="title" data-type="title">Sani Resort - Toms</span><span class="address" data-type="address">Kassandra ,  Chalkidiki , Greece, 63077</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="41.1500408" data-longitude="24.1477055"><p class="Rest_of_Greece_-_Drama tiny youth"><span class="title" data-type="title">Pa-ti-to</span><span class="address" data-type="address">4 Papandreou Str., Drama, Greece, 66100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.013999" data-longitude="24.4198995"><p class="Rest_of_Greece_-_Evia men women"><span class="title" data-type="title">Smart Shoes</span><span class="address" data-type="address">Karystos,  Evia, Greece, 34001</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.6684968" data-longitude="20.8530123"><p class="Rest_of_Greece_-_Ioannina men women"><span class="title" data-type="title">Zoukis</span><span class="address" data-type="address">6 H. Trikoupi Str.,  Ioannina, Greece, 45444</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.0422371" data-longitude="22.1141264"><p class="Rest_of_Greece_-_Kalamata tiny youth"><span class="title" data-type="title">Kibo Junior</span><span class="address" data-type="address">3 Vasilisis Olgas Str., Kalamata, Greece, 24100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.0422371" data-longitude="22.1141264"><p class="Rest_of_Greece_-_Kalamata men women"><span class="title" data-type="title">Gianna Kazakou</span><span class="address" data-type="address">1 Fratzi Str.,  Kalamata, Greece, 24100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.5192691" data-longitude="21.2687171"><p class="Rest_of_Greece_-_Kastoria tiny youth"><span class="title" data-type="title">Vima vima</span><span class="address" data-type="address">13 Grammou Str., Kastoria, Greece, 52100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0126545" data-longitude="22.750171"><p class="Rest_of_Greece_-_Kiato tiny youth"><span class="title" data-type="title">Arlekinos</span><span class="address" data-type="address">43 Klisthenous Str., Kiato, Greece, 20200</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.0126545" data-longitude="22.750171"><p class="Rest_of_Greece_-_Kiato men women"><span class="title" data-type="title">Studio C</span><span class="address" data-type="address">50 Klisthenous Str., Kiato, Greece, 20200</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.934251" data-longitude="22.9262679"><p class="Rest_of_Greece_-_Korinthos men women tiny youth"><span class="title" data-type="title">Shoe Gallery</span><span class="address" data-type="address">2 Kolokotroni, Korinthos, Greece, 21100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.9386365" data-longitude="22.9322383"><p class="Rest_of_Greece_-_Korinthos men women"><span class="title" data-type="title">Choice &amp; Attitude</span><span class="address" data-type="address">1 Periandrou Str.,  Korinthos, Greece, 20100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.8974028" data-longitude="22.433503"><p class="Rest_of_Greece_-_Lamia men women"><span class="title" data-type="title">Balis</span><span class="address" data-type="address">2 Venizelou Str.,  Lamia, Greece, 35100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.2964753" data-longitude="22.3909731"><p class="Rest_of_Greece_-_Larisa men women"><span class="title" data-type="title">Yours</span><span class="address" data-type="address">21 Ermou Str., Larisa, Greece, 41222</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.4387082" data-longitude="22.8753993"><p class="Rest_of_Greece_-_Livadia tiny youth"><span class="title" data-type="title">Serafino</span><span class="address" data-type="address">29 Pes. Machiton Str., Livadia, Greece, 32100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.4366992" data-longitude="22.8750952"><p class="Rest_of_Greece_-_Livadia men women"><span class="title" data-type="title">Rozanas</span><span class="address" data-type="address">Mpoufidou 1, Livadia 321 00, Greece</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.5652512" data-longitude="22.7985117"><p class="Rest_of_Greece_-_Nafplio men women"><span class="title" data-type="title">Antoniadis</span><span class="address" data-type="address">19 A. Terzaki Str.,  Nafplio, Greece, 21100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.630572" data-longitude="22.0690001"><p class="Rest_of_Greece_-_Naousa women"><span class="title" data-type="title">Tacco Alto</span><span class="address" data-type="address">3 Theofilou Str., Naousa, Greece, 59200</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="39.2853344" data-longitude="20.4005005"><p class="Rest_of_Greece_-_Parga women"><span class="title" data-type="title">Ammos</span><span class="address" data-type="address">5 Spirou Livada Str.,  Parga, Greece, 48060</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="38.2478916" data-longitude="21.7361885"><p class="Rest_of_Greece_-_Patra men women"><span class="title" data-type="title">Collective</span><span class="address" data-type="address">49 Ermou Str.,  Patra, Greece, 26221</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.2478916" data-longitude="21.7361885"><p class="Rest_of_Greece_-_Patra men women"><span class="title" data-type="title">Kouloumpis</span><span class="address" data-type="address">12 Kolokotroni Str.,  Patra, Greece, 26221</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.2478916" data-longitude="21.7361885"><p class="Rest_of_Greece_-_Patra men women"><span class="title" data-type="title">Classico</span><span class="address" data-type="address">87 Maizonos Str.,  Patra, Greece, 26221</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="38.2478916" data-longitude="21.7361885"><p class="Rest_of_Greece_-_Patra tiny youth"><span class="title" data-type="title">Papino</span><span class="address" data-type="address">19-23 Kolokotroni Str.,  Patra, Greece, 26221</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.2478916" data-longitude="21.7361885"><p class="Rest_of_Greece_-_Patra tiny youth"><span class="title" data-type="title">Zouzouni</span><span class="address" data-type="address">159 Mezonos Str.,  Patra, Greece, 26221</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.9592649" data-longitude="20.7517155"><p class="Rest_of_Greece_-_Preveza men women"><span class="title" data-type="title">Step</span><span class="address" data-type="address">51 Ethnikis Antistasis Str., Preveza, Greece, 48100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.5129968" data-longitude="21.6784663"><p class="Rest_of_Greece_-_Ptolemaida tiny youth"><span class="title" data-type="title">New Kid</span><span class="address" data-type="address">39 Vasileos Konstantinou Str., Ptolemaida, Greece, 50200</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="36.9508158" data-longitude="21.7019862"><p class="Rest_of_Greece_-_Pylos men women"><span class="title" data-type="title">Martin's</span><span class="address" data-type="address">Gialova,  Pylos, Greece, 24001</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="41.0895863" data-longitude="23.5482169"><p class="Rest_of_Greece_-_Serres men women tiny youth"><span class="title" data-type="title">Prime Timers</span><span class="address" data-type="address">7 Dimitriou Str.,  Serres, Greece, 62100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="37.074461" data-longitude="22.430264"><p class="Rest_of_Greece_-_Sparti men women tiny youth"><span class="title" data-type="title">Posh Market</span><span class="address" data-type="address">99 Likourgou Str., Sparti, Greece, 23100</span><span class="products">M, W, T, Y</span></p></div><div data-type="store" class="store box" data-latitude="38.3194483" data-longitude="23.3188283"><p class="Rest_of_Greece_-_Thiva men women"><span class="title" data-type="title">Natasa</span><span class="address" data-type="address">28 Pelopidou Str.,  Thiva, Greece, 32200</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.5557317" data-longitude="21.7678951"><p class="Rest_of_Greece_-_Trikala tiny youth"><span class="title" data-type="title">Pepperino</span><span class="address" data-type="address">Ioulietas Adam and 8 Karanasiou Str., Trikala, Greece, 42100</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="40.6385871" data-longitude="22.5361134"><p class="Rest_of_Greece_-_Trikala men women"><span class="title" data-type="title">Jabik</span><span class="address" data-type="address">8 Vironos Str.,  Trikala, Greece, 42100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="37.5101357" data-longitude="22.372644"><p class="Rest_of_Greece_-_Tripoli men women"><span class="title" data-type="title">Wizzards</span><span class="address" data-type="address">49 Ethnikis Antistaseos Str.,  Tripoli, Greece, 22100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.3635451" data-longitude="22.9509289"><p class="Rest_of_Greece_-_Volos men women"><span class="title" data-type="title">Figaro</span><span class="address" data-type="address">157 Dimitriados Str.,  Volos, Greece, 38221</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="39.3635451" data-longitude="22.9509289"><p class="Rest_of_Greece_-_Volos tiny youth"><span class="title" data-type="title">Rikoko</span><span class="address" data-type="address">35 Spiridi Str., Volos, 38221</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="41.1300361" data-longitude="24.8864902"><p class="Rest_of_Greece_-_Xanthi men women"><span class="title" data-type="title">Raptopoulos stores</span><span class="address" data-type="address">132 28 October str.,  Xanthi, Greece, 67100</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.6693867" data-longitude="22.9091237"><p class="Thessaloniki_-_Evosmos tiny youth"><span class="title" data-type="title">Little Stories</span><span class="address" data-type="address">70 Megalou Alexandrou Str., Evosmos, Thessaloniki, 56224</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="0" data-longitude="0"><p class="Thessaloniki_-_Pilaia tiny youth"><span class="title" data-type="title">Mediterranean Cosmos - Lapin House</span><span class="address" data-type="address">11th klm E.O. Thessalonikis - Neon Moudanion</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="40.6318012" data-longitude="22.9471962"><p class="Thessaloniki_-_Pilaia men"><span class="title" data-type="title">Nak</span><span class="address" data-type="address">3 Plateia Agias Sofias Str., Thessaloniki, 54622</span><span class="products">M</span></p></div><div data-type="store" class="store box" data-latitude="40.6098708" data-longitude="22.9747288"><p class="Thessaloniki_-_Pilaia tiny youth"><span class="title" data-type="title">Mediterranean Cosmos - Nak</span><span class="address" data-type="address">11o Clmtr Thessalonikis - Moudanion , Pilaia, Thessaloniki, 54454</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="40.6315414" data-longitude="22.9448506"><p class="Thessaloniki_-_Thessaloniki men women"><span class="title" data-type="title">Intervista</span><span class="address" data-type="address">71 Tsimiski Str., Thessaloniki, Greece, 54622</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.628637" data-longitude="22.9480282"><p class="Thessaloniki_-_Thessaloniki men women"><span class="title" data-type="title">Fena Fresh</span><span class="address" data-type="address">8 P. Mela Str., Thessaloniki, Thessaloniki, 54622</span><span class="products">M, W</span></p></div><div data-type="store" class="store box" data-latitude="40.6317164" data-longitude="22.9445842"><p class="Thessaloniki_-_Thessaloniki tiny youth"><span class="title" data-type="title">Bimbo</span><span class="address" data-type="address">67 Tsimiski Str., Thessaloniki, Thessaloniki, 54622</span><span class="products">T, Y</span></p></div><div data-type="store" class="store box" data-latitude="40.6318012" data-longitude="22.9471962"><p class="Thessaloniki_-_Thessaloniki women"><span class="title" data-type="title">NOTOS - Nak</span><span class="address" data-type="address">12 Makenzy Str., Thessaloniki, Thessaloniki, 54622</span><span class="products">W</span></p></div><div data-type="store" class="store box" data-latitude="40.6330512" data-longitude="22.9459194"><p class="Thessaloniki_-_Thessaloniki tiny youth"><span class="title" data-type="title">NOTOS - Nak</span><span class="address" data-type="address">4 M. King Str., Thessaloniki, Thessaloniki, 54622</span><span class="products">T, Y</span></p></div>


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
          					<a class="button button-white" href="#">Visit the official website</a>
          				</header>
          			</div>
          		</div>
          	</div>
          </div>
          <!-- end of body -->


          <?php get_footer(); ?>