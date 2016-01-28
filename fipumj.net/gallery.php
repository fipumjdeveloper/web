<?php session_start();
if (!isset($_SESSION['language']))
	$_SESSION['language'] = 1;
if (!isset($_SESSION['pin']))
	$_SESSION['pin'] = '';
$_SESSION['chance'] = 3;
?>
<!DOCTYPE html>
<!-- 
*
*   FIP UMJ
*   Developed By : Bahri, Rahmat, Syukri
*   Designed By : Syukri 
*   Copyright 2015/2016
*
-->
<html>
    <?php include('header.php'); ?>

    <script>
    	$(document).ready(function(){
			/* ===========
        	*  Isotope Button 
        	=============*/
        	var $container = $('#foliowrap');
        	$container.isotope({
        		filter:'*',
        		animationOptions: {
        			duration: 750,
        			easing: 'linear',
        			queue: false,
        		}
        	});
    		$('#options li a').click(function(){
    			var selector = $(this).attr('data-filter');
    			$container.isotope({
    				filter:selector,
    				animationOptions: {
    					duration: 750,
    					easing: 'linear',
    					queue: false,
    				},
    			});
    			return false;
    		});

            var $optionSets = $('#options'),
			$optionLinks = $optionSets.find('a');

			$optionLinks.click(function(){
				var $this = $(this);
				// don't proceed if already selected
				if ($this.hasClass('selected')) {
					return false;
				}
				var $optionSet = $this.parents('#options');
				$optionSet.find('.selected').removeClass('selected');
				$this.addClass('selected'); 
			});
    	});
    </script>

<body>
<div class="container-fluid">
	
	<?php include('config/main.php'); ?>
	<?php include('mainMenu.php'); ?>

	<div class="row">
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 st-breadcrumb">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#"><b>Gallery</b></a></li>
				</ol>
			</div>
			<!-- content -->
			<div class="col-md-12 col-sm-12 col-xs-12 col-artikel">
				<div class="filter">
                    <ul id="options">
                      <li><a href="#" data-filter=".all">All</a></li>
					  <li><a href="#" data-filter=".kegiatan">Kegiatan</a></li>
					  <li><a href="#" data-filter=".akademik">Akademik</a></li>
					  <li><a href="#" data-filter=".uncategorized">Terkategorikan</a></li>
                    </ul>
                </div><!-- end filter -->
                <div id="foliowrap">
                      <figure class="foliobox all kegiatan">
                          <a href="images/images_gallery/English Camp_34.jpg" id="" rel="leanModal" data-title="Title 1" data-gallery="kegiatan" data-toggle="lightbox">
                          <div class="img" style="background-image:url('images/images_gallery/English Camp_34.jpg')">&nbsp;</div>
                          <figcaption>
                            <div class="link_overlay icons-search"></div>
                          </figcaption>
                        </a>
                      </figure><!-- end items foliobox -->
                      <figure class="foliobox all akademik">
                           <a href="images/images_gallery/English Camp_35.jpg" id="" rel="leanModal" data-title="Title 2" data-gallery="akademik" data-toggle="lightbox">
                          <div class="img" style="background-image:url('images/images_gallery/English Camp_35.jpg')">&nbsp;</div>
                          <figcaption>
                            <div class="link_overlay icons-search"></div>
                          </figcaption>
                        </a>
                      </figure><!-- end items foliobox -->
                      <figure class="foliobox all kegiatan">
                          <a href="images/images_gallery/English Camp_36.jpg" id="" rel="leanModal" data-title="Title 3" data-gallery="kegiatan" data-toggle="lightbox">
                          <div class="img" style="background-image:url('images/images_gallery/English Camp_36.jpg')">&nbsp;</div>
                          <figcaption>
                            <div class="link_overlay icons-search"></div>
                          </figcaption>
                        </a>
                      </figure><!-- end items foliobox -->
                      <figure class="foliobox all kegiatan">
                          <a href="images/images_gallery/English Camp_37.jpg" id="" rel="leanModal" data-title="Title 4" data-gallery="kegiatan" data-toggle="lightbox">
                          <div class="img" style="background-image:url('images/images_gallery/English Camp_37.jpg')">&nbsp;</div>
                          <figcaption>
                            <div class="link_overlay icons-search"></div>
                          </figcaption>
                        </a>
                      </figure><!-- end items foliobox -->
                      <figure class="foliobox all uncategorized">
                          <a href="images/images_gallery/English Camp_38.jpg" id="" rel="leanModal" data-title="Title 5" data-gallery="uncategorized" data-toggle="lightbox">
                          <div class="img" style="background-image:url('images/images_gallery/English Camp_38.jpg')">&nbsp;</div>
                          <figcaption>
                            <div class="link_overlay icons-search"></div>
                          </figcaption>
                        </a>
                      </figure><!-- end items foliobox -->
                </div><!-- folio-wrap -->
			</div>
		</div>
	</div>
	<?php include ('footer.php');?>
</div>
</body>
</html>