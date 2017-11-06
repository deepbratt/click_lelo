<!DOCTYPE html>
<html lang="en-US"  data-menu="leftalign">
	<head>		
		<title>Rentalz | Become a Supplier</title>
		<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
		</style>
		<?php
			include("connection.php");
			include("metalinks.php");
		?>
  </head>
  <body class="page-template page-template-page_r page-template-page_r-php page page-id-2650">
		<!-- Begin mobile menu -->
		<input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign"/>
		<input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0"/>
		<input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0"/>
		<input type="hidden" id="pp_image_path" name="pp_image_path" value="images/"/>
		<input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value=""/>
		<input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1"/>
		<input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="0"/>
		<input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1"/>
		<input type="hidden" id="pp_topbar" name="pp_topbar" value="1"/>
		<input type="hidden" id="post_client_column" name="post_client_column" value="4"/>
		<input type="hidden" id="pp_back" name="pp_back" value="Back"/>
		<input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value=""/>
		<input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value=""/>
		<input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value=""/>
		<input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black"/>
		<input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal"/>
		<input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1"/>
		<input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8"/>
		<input type="hidden" id="tg_cart_url" name="tg_cart_url" value="cart/"/>
		<input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0"/>
		<input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3"/>
		<!-- Begin template wrapper -->

		<?php
			include ("header.php");
			$get_supplier = mysqli_query($mysqli,"select * from become_supplier where become_id='1'");
			$fetch_supplier = mysqli_fetch_array($get_supplier);

			if(isset($_POST['search']))
			{
				$cat = mysqli_real_escape_string($mysqli,$_POST['cat']);
				$sub_cat = mysqli_real_escape_string($mysqli,$_POST['sub_cat']);
				$key_words = mysqli_real_escape_string($mysqli,$_POST['key_words']);

				echo "<script>window.location.href='sub_product.php?cat=$cat&&sub_cat=$sub_cat&&key=$key_words'</script>";
			}
		  ?>

     <div id="page_caption" class="hasbg parallax  withtopbar  " style="background-image:url(images/Trucks-Wallpapers-24.jpg);height:400px;" >
        <div class="page_title_wrapper">
          <div class="page_title_inner">
            <div class="page_title_content">
              <h1 class ="withtopbar" ><?php echo $fetch_supplier['title'];?>
              </h1>
              <div class="page_tagline">
                 <?php echo $fetch_supplier['sub_title'];?>		    	
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Begin content -->
      <div id="page_content_wrapper" class="hasbg withtopbar ">
        <div class="inner">
          <!-- Begin main content -->
          <div class="inner_wrapper">
            <div class="sidebar_content full_width nopadding">
              <div class="sidebar_content page_content">
					<?php echo $fetch_supplier['description'];?>
              </div>
				

			  <!-- sidebar starts -->
				  <div class="sidebar_wrapper">
					<div class="sidebar">
					  <div class="content">
						<ul class="sidebar_widget">
						  <li id="text-6" class="widget widget_text">
							<h2 class="widgettitle">For More Informations
							</h2>
							<div class="textwidget">
							  <p>
								<!--<span class="ti-mobile" style="margin-right:10px;">
								</span>+971 56 786 3 123
								<br>
								<br>

								<span class="ti-mobile" style="margin-right:10px;">
								</span>+971 55 860 8660
								<br>
								<br>-->
								
								<span class="ti-email" style="margin-right:10px;">
								</span>rentalz247@gmail.com
								<br>
								<br>

								<span class="ti-email" style="margin-right:10px;">
								</span>sellersupport@rentalz247.com
								<br>
								<br>

								<span class="ti-location-pin" style="margin-right:10px;">
								</span>Sharjah Media City, Al Sharjah, UAE
							  </p>
							</div>
						  </li>
						</ul>
					  </div>
					</div>
					<br class="clear">
				  </div>
				</div>

			  <!--  sidebar ends -->
            </div>
          </div>
          <!-- End main content -->
        </div>
      </div>
      <br class="clear"/>
      <br/>
	  <?php include("footer.php");?>

    </div>


    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.requestAnimationFrame.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/ilightbox.packed.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.easing.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/waypoints.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.isotope.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.masory.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.tooltipster.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jarallax.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.sticky-kit.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.stellar.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.cookie.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/custom_plugins.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/custom.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-includes/js/wp-embed.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-includes/js/jquery/ui/widget.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-includes/js/jquery/ui/accordion.min.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/custom-accordion.js'>
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/themes/grandcarrental/js/jquery.cookie.js'>
    </script>
    <script type='text/javascript' src='http://themes.themegoods.com/grandcarrental/demo/wp-admin/admin-ajax.php?action=grandcarrental_script_demo'>
    </script>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var mc4wp_forms_config = [];
      /* ]]> */
    </script>
    <script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min.js'>
    </script>
    <!--[if lte IE 9]>
<script type='text/javascript' src='http://themegoodsthemes-pzbycso8wng.stackpathdns.com/grandcarrental/demo/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js'></script>
<![endif]-->
  </body>
</html>
