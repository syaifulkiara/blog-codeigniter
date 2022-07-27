<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $judul;?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<!-- SEO Tags -->
	    <meta name="description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..."/>
	    <link rel="canonical" href="<?php echo $canonical;?>" />
	    <?php error_reporting(0); if(empty($url_prev)):?>
	    <?php else:?>
	    <link rel="prev" href="<?php echo $url_prev;?>" />
	    <?php endif;?>
	    <link rel="next" href="<?php echo $url_next;?>" />
	    <meta property="og:locale" content="id_ID" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="<?php echo $judul;?>" />
	    <meta property="og:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
	    <meta property="og:url" content="<?php echo $canonical;?>" />
	    <meta property="og:site_name" content="<?php echo $site_name;?>" />
	    <meta property="og:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:width" content="560" />
	    <meta property="og:image:height" content="315" />
	    <meta name="twitter:card" content="summary_large_image" />
	    <meta name="twitter:description" content="Kumpulan artikel <?php echo $meta_description;?> dan banyak lagi..." />
	    <meta name="twitter:title" content="<?php echo $judul;?>" />
	    <meta name="twitter:site" content="<?php echo $site_twitter;?>" />
	    <meta name="twitter:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <!-- / SEO plugin. -->
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/padding-margin.css'?>"/>
		<link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>"/>
		<!-- Favicons -->		
	</head>
	<body class="content-animate">

		<!-- PRELOADER
		==================================================-->	
		<div class="page-loader">
			<div class="loader-area"></div><div class="loader font-face1">Loading...		
			</div>
		</div>
		
		<!-- PAGE
		==================================================-->	
		<div id="top" class="page">
			
			<!-- Navigation panel
			================================================== -->		
			<?php echo $header;?>
			<!-- End Navigation panel -->
		
			<!-- Main Content
			==================================================-->		
			<main class="cd-main-content mt-100">

				
				<!-- SECTION ABOUT
				================================================== 	-->	
				<section class="page-section small-section">				
					<div class="container relative">
						
						<div class="row multi-columns-row">
							
								<?php foreach ($data->result() as $row):?>					
								<div class="col-md-4 col-sm-6 mb-30 wow fadeIn">
									<article>
										<a class="articles-card" href="<?php echo site_url('blog/'.$row->post_slug);?>" title="">
											<div class="card-wrap">
												<div class="card-image">
													<div class="article-thumbnail" data-background="<?php echo base_url().'assets/images/thumb/'.$row->post_image;?>"></div>				
												</div>
												<div class="card-body text-right">
													<h2 class="heading6 lp-0 mt-0 font-face1 text-right"><?php echo $row->post_title;?></h2>
												</div>
												<div class="card-footer">
													<div class="article_author">
														<div class="portrait" data-background="<?php echo base_url().'assets/images/'.$row->user_photo;?>"></div>
														<div class="author light-text"><?php echo $row->user_name;?></div>
														<div class="date"><?php echo date('d M Y',strtotime($row->post_date));?></div>
													</div>												
												</div>
											</div>
										</a>
										<div class="like light-text"><a href="javascript:void(0)"></a> <?php echo $row->post_views.' views';?></div>
									</article>
								</div>
								<?php endforeach;?>
								
						</div>
						<!--pagination-->
						<?php echo $page;?>
					</div>					
				</section>								
				
				<!-- SECTION SUBSCRIBE
				================================================== -->
				<section  class="page-section subscribe-section small-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">	
								<div class="form-subscribe mb-50 mb-sm-0">
									<div class="col-sm-6 mb-sm-40">
										<h2 class="heading5 mt-0 font-face1 white-color fw700 mb-0" >Newsletter.</h2>
									</div>
									<div class="col-sm-6">										
										<form class="form-inline" action="<?php echo site_url('subscribe');?>" method="post">
											<div class="form-group">
												<input type="hidden" name="url" value="<?php echo $canonical;?>" required>
												<input type="email" name="email" required placeholder="Your Email..." class="form-control">
												<button type="submit" class="btn btn-subscribe">Subscribe</button>
											</div>
										</form>										
									</div>
								</div>
								<div><?php echo $this->session->flashdata('message');?></div>									
							</div>
						</div>
					</div>
				</section>
				
				
				<!-- FOOTER
				================================================== -->	
				<?php echo $footer;?>
				
				</main>		
	
		</div>


		<!-- Modal Search-->
		<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">	
		      	<form action="<?php echo site_url('search');?>" method="GET">
		        	<div class="input-group">
		              <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
				      </span>
				    </div>
				</form>
		      </div>
		    </div>
		  </div>
		</div>
			
		<script src="<?php echo base_url().'theme/js/jquery-2.2.4.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.easing.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>			
		<script src="<?php echo base_url().'theme/js/jquery.scrollTo.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.localScroll.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.viewport.mini.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.sticky.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.fitvids.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.parallax-1.1.3.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/isotope.pkgd.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/imagesloaded.pkgd.min.js'?>"></script> 
		<script src="<?php echo base_url().'theme/js/masonry.pkgd.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.magnific-popup.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/jquery.counterup.min.js'?>"></script>					
		<script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
		<script src="<?php echo base_url().'theme/js/wow.min.js'?>"></script>		
		<script src="<?php echo base_url().'theme/js/script.js'?>"></script>	
	</body>
</html>