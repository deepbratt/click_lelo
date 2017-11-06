<div class="mobile_menu_wrapper">
	<a id="mobile_menu_close" href="javascript:;" class="button">
		<span class="ti-close"></span>
	</a>
	<div class="mobile_menu_content">
		<div class="menu-main-menu-container">
			<ul id="mobile_main_menu" class="mobile_main_nav">
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-8">
					<a href="#">Renters</a>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children arrow menu-item-9">
					<a href="#">Suppliers</a>
				</li>
				<?php
					if(isset($_SESSION['user_id'])){
					$get_user_type = mysqli_query($mysqli,"select * from users where id='".$_SESSION['user_id']."'");
					$fetch_user_type = mysqli_fetch_array($get_user_type);
					if($fetch_user_type['user_type'] == 'admin' || $fetch_user_type['user_type'] == 'supplier'){
				?>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
					<a href="admin/dashboard.php">My Account</a>
				</li>				
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
					<a href="logout.php">Logout</a>
				</li>
				<?php
					}
				  }
					else
					{
				?>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
					<a href="signup.php">Signup</a>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
					<a href="login.php">Login</a>
				</li>
				<?php
					}
				?>
			</ul>
		</div>
		<!-- Begin side menu sidebar -->
		<!--<div class="page_content_wrapper">
			<div class="sidebar_wrapper">
				<div class="sidebar">
					<div class="content">
						<ul class="sidebar_widget">
							<li id="text-8" class="widget widget_text">
								<h2 class="widgettitle">For More Informations</h2>
								<div class="textwidget">
									<span class="ti-location-pin" style="margin-right:10px;"></span>+971 55 860 8660

									<br/>
									<span class="ti-mobile" style="margin-right:10px;"></span>+971 56 786 3 123
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>-->
		<!-- End side menu sidebar 
		<div class="social_wrapper">
			<ul>
				<li class="facebook">
					<a target="_blank" href="#">
						<i class="fa fa-facebook-official"></i>
					</a>
				</li>
				<li class="twitter">
					<a target="_blank" href="#">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li class="youtube">
					<a target="_blank" title="Youtube" href="#">
						<i class="fa fa-youtube"></i>
					</a>
				</li>
				<li class="pinterest">
					<a target="_blank" title="Pinterest" href="#">
						<i class="fa fa-pinterest"></i>
					</a>
				</li>
				<li class="instagram">
					<a target="_blank" title="Instagram" href="#">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
			</ul>
		</div>-->
	</div>
</div>
<!-- Begin template wrapper -->
<div id="wrapper" class="hasbg transparent">
	<div class="header_style_wrapper">
		<!-- Begin top bar -->
		<div class="above_top_bar">
			<div class="page_content_wrapper">
				<!--<div class="social_wrapper">
					<ul>
						<li class="facebook">
							<a target="_blank" href="#">
								<i class="fa fa-facebook-official"></i>
							</a>
						</li>
						<li class="twitter">
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li class="youtube">
							<a target="_blank" title="Youtube" href="#">
								<i class="fa fa-youtube"></i>
							</a>
						</li>
						<li class="pinterest">
							<a target="_blank" title="Pinterest" href="#">
								<i class="fa fa-pinterest"></i>
							</a>
						</li>
						<li class="instagram">
							<a target="_blank" title="Instagram" href="#">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>-->
				<div class="top_contact_info">
					<div class="company_address">
						<div id="top_contact_address">
							<span class="ti-location-pin"></span>Sharjah Media City, Al Sharjah, UAE
								
						</div>
					</div>
					<!--<div>
						<div id="top_contact_number">
							<a href="tel:1.800.456.6743">
								<span class="ti-mobile"></span>+971 56 786 3 123	
							</a>
						</div>
					</div>
					<div>
						<div id="top_contact_hours">
							<a href="tel:1.800.456.6743">
								<span class="ti-mobile"></span>+971 55 860 8660
							</a>
						</div>
					</div>-->
				</div>
				<br class="clear"/>
			</div>
		</div>
		<!-- End top bar -->
		<div class="top_bar hasbg">
			<div class="standard_wrapper">
				<!-- Begin logo -->
				<div id="logo_wrapper">
					<div id="logo_normal" class="logo_container">
						<div class="logo_align">
							<!--<p style="font-size:40px"><img src="images/rent_logo.png"></p>-->
							<a id="custom_logo" class="logo_wrapper hidden" href="index.php"><img src="images/rent_logo.png" alt="" height="35" style="height:35px;"  /></a></div></div><div id="logo_transparent" class="logo_container"><div class="logo_align"><a id="custom_logo_transparent" class="logo_wrapper default" href="index.php"><img src="images/rent_logo.png" alt="" height="35" style="height:35px;"/></a>
						</div>
					</div>
					<!-- End logo -->
					<div id="menu_wrapper">
						<div id="nav_wrapper">
							<div class="nav_wrapper_inner">
								<div id="menu_border_wrapper">
									<div class="menu-main-menu-container">
										<ul id="main_menu" class="nav">

											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8 arrow">
												<a href="#">Renters</a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home"><a href="renting_on.php">Renting on RENTALZ</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3102"><a href="getting_started_renters.php">Getting Started</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3106"><a href="renters_faq.php">FAQs</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3114"><a href="contact.php">Contact Us</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9 arrow">
												<a href="#">Suppliers</a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3102"><a href="become_a_supplier.php">Become a supplier</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3106"><a href="getting_started_supplier.php">Getting Started</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3114"><a href="supplier_faq.php">Supplier FAQs</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3114"><a href="contact.php">Contact Us</a></li>
												</ul>
											</li>

											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9 arrow">
												<a href="#">Categories</a>
												<ul class="sub-menu">
												<?php 
													$get_cat = mysqli_query($mysqli,"SELECT * FROM category");
													while($fetch_recent_cat = mysqli_fetch_array($get_cat)){
												?>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3102"><a href="product.php?cat=<?php echo $fetch_recent_cat['category_id'];?>"><?php echo $fetch_recent_cat['category_name'];?></a></li>
												<?php 
													}
												?>
												</ul>
											</li>
											<?php
												if(isset($_GET['cat']) || isset($_GET['sub_cat'])){
													if(isset($_GET['cat']) && $_GET['cat']!=''){
														$cat_id = $_GET['cat'];
													}else{
														$sub_catid = $_GET['sub_cat'];
														$q = "SELECT * FROM sub_category WHERE sub_category_id='$sub_catid'";
														$get_org_cat = mysqli_query($mysqli,$q);
														$fetch_org_cat = mysqli_fetch_array($get_org_cat);
														$cat_id = $fetch_org_cat['category_id'];
														
													}
											?>

											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9 arrow">
												<a href="#">Sub-Categories</a>
												<ul class="sub-menu">
												<?php 
													$get_cat_sub = mysqli_query($mysqli,"SELECT * FROM sub_category WHERE category_id='$cat_id'");
													while($fetch_recent_cat_sub = mysqli_fetch_array($get_cat_sub)){
												?>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3102"><a href="sub_product.php?sub_cat=<?php echo $fetch_recent_cat_sub['sub_category_id'];?>"><?php echo $fetch_recent_cat_sub['sub_category_name'];?></a></li>
												<?php 
													}
												?>
												</ul>
											</li>
											
											<?php
												}
											if(isset($_SESSION['user_id'])){
												$get_user_type = mysqli_query($mysqli,"select * from users where id='".$_SESSION['user_id']."'");
												$fetch_user_type = mysqli_fetch_array($get_user_type);
												if($fetch_user_type['user_type'] == 'admin' || $fetch_user_type['user_type'] == 'supplier'){
											?>
											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
												<a href="admin/dashboard.php">My Account</a>
											</li>
											<?php
												}
											?>

											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
												<a href="logout.php">Logout</a>
											</li>
											<?php
												}else{
											?>
											<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-10">
												<a href="login.php">Login</a>
											</li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3075 current_page_item menu-item-3094"><a href="signup.php">Signup</a></li>
											<?php
												}
											?>
										</ul>
									</li>
								</div>
							</div>
						</div>
						<!-- Begin right corner buttons -->
						<div id="logo_right_button">
							<a href="javascript:;" id="mobile_nav_icon">
								<span class="ti-menu"></span>
							</a>
							<div class="header_cart_wrapper">
								<a href="cart.php" title="View Cart">
									<span class="ti-shopping-cart"></span>
									<div class="cart_count">
									<?php 
									if(isset($_SESSION['yo_cart'])){
										echo sizeof($_SESSION['yo_cart']); 
									}else{
										echo "0";
									}
									?>
									</div>
								</a>
							</div>
						</div>
						<!-- End right corner buttons -->
					</div>
					<!-- End main nav -->
				</div>
			</div>
		</div>
	</div>
</div>