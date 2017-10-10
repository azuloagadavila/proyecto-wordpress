<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 

    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Strip Bootstrap 4.0 Theme</title>

          <?php wp_head(); ?>
</head>

   <body <?php body_class(); ?>>
<!-- header -->
	<div class="header">
	<div class="container">
		<div class="header-info">
			<div class="logo">
				<a href="">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/>
                    
                    
              </a>
			</div>
			<div class="logo-right">
				<span class="menu"><img src="images/menu.png" alt=" "/></span>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu.png" class="img-responsive" alt=""/>
                
			
				<?php 
					$args = array(
						'menu'        => 'primary-menu',            
						'menu_class'  => 'nav',
						'container'   => false
					);
					wp_nav_menu( $args );
        		?> 
                
			</div>
			
				<!-- script for menu -->
			
				<!-- //script for menu -->
		</div>
	</div>
	</div>
<!-- header -->
<!-- content -->
	<div class="content">
	<div class="container">
		<div class="content-text">	
			<div class="title">
				<div class="some-title">
					<h3><a href="single.html">Some Tittle Goes Here</a></h3>
				</div>
				<div class="john">
					<p><a href="#">John Doe</a><span>May.26.2011</span></p>
				</div>
				<div class="clearfix"> </div>
				<div class="tilte-grid">
					<a href="single.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.jpg" class="img-responsive" alt=""/></a>
					<p class="vel"><a href="single.html">Phasellus vel arcu vitae neque sagittis aliquet ac at purus.
					Vestibulum varius eros in dui sagittis non ultrices orci hendrerit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</a></p>
					<p class="Sed">
					<span><label>Sed euismod feugiat sodales.</label> Vivamus dui ipsum, laoreet 
					vitae euismod sit amet, euismod ac est. Sed turpis massa,
					convallis vitae facilisis eget, malesuada ullamcorper nibh. 
					Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
					enim sit amet volutpat sodales, lorem velit fringilla metus, et
					semper metus sapien non odio. Nulla facilisi.<a href="#" class="gravida">Praesent gravida suscipit leo,</a> 
					eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum.</span></p> 
				</div>
				<div class="read">
					<a href="single.html">Read More</a>
				</div>
				<div class="border">
					<p>a</p>
				</div>
				<div class="some-title">
					<h3><a href="single.html">Some Tittle Goes Here</a></h3>
				</div>
				<div class="john">
					<p><a href="#">John Doe</a><span>May.26.2011</span></p>
				</div>
				<div class="clearfix"> </div>
				<div class="tilte-grid">
                <a href="single.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg" class="img-responsive" alt=""/>
					<p class="vel"><a href="single.html">Phasellus vel arcu vitae neque sagittis aliquet ac at purus.
					Vestibulum varius eros in dui sagittis non ultrices orci hendrerit.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
					<p class="Sed"><span><label>Sed euismod feugiat sodales.</label> Vivamus dui ipsum, laoreet 
					vitae euismod sit amet, euismod ac est. Sed turpis massa,
					convallis vitae facilisis eget, malesuada ullamcorper nibh. 
					Nunc pulvinar augue non felis dictum ultricies. Donec lacinia, 
					enim sit amet volutpat sodales, lorem velit fringilla metus, et
					semper metus sapien non odio. Nulla facilisi.<a href="#" class="gravida">Praesent gravida suscipit leo,</a> 
					eget fermentum magna malesuada ac. Maecenas pulvinar malesuada elementum.</span></p> 
				</div>
				<div class="read">
					<a href="single.html">Read More</a>
				</div>
				<div class="border1">
					<div class="pre">
						<a href="#">Prev</a>
					</div>
					<div class="number">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">9</a></li>
							<li><a href="#">10</a></li>
							<li><a href="#">11</a></li>
							<li><a href="#">12</a></li>
						</ul>
					</div>
					<div class="next">
						<a href="#">Next</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="categories">
				<div class="categ">
					<div class="cat">
						<h3>Categories</h3>
						<ul>
							<li><a href="single.html">Lorem ipsum dolor sit amet</a></li>
							<li><a href="single.html">Consectetur adipiscing elit</a></li>
							<li><a href="single.html">Etiam aliquet convallis enim ut</a></li>
							<li><a href="single.html">Donec at pretium dui</a></li>
							<li><a href="single.html">Nulla sed massa sagittis venenatis</a></li>
							<li><a href="single.html">Praesent nec tortor nec massa</a></li>
						</ul>
					</div>
					<div class="recent-com">
						<h3>Recent Comments</h3>
						<ul>
							<li><a href="single.html">Donec consequat</a> suscipit leo at accumsan. In hac habitasse platea dictumst.</li>
							<li><a href="single.html">Aliquam erat ipsum,</a> consequat id venenatis suscipit, venenatis sed leo.
								Ut nec lacus in sem eleifend semper id ac dolor.</li>
							<li><a href="single.html">Etiam aliquet convallis enim ut 
									<span>Donec at pretium dui</span></a></li>
							<li><a href="single.html">Nulla sed massa sagittis</a> venenatis Praesent nec tortor nec massa </li>
							<li><a href="single.html">Donec faucibus mollis dolor
								<span>in ullamcorper.</span></a></li>
						</ul>
					</div>
					<div class="view">
						<a href="single.html">View More</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!-- //content -->