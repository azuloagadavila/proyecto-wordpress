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
                </ul>
			</div>
	
				<!-- //script for menu -->
		</div>
	</div>
	</div>
<!-- header -->
