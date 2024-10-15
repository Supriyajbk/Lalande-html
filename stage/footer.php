</main>
</div>
<?php 
$footer_logo                       = get_field('footer_logo', 'option');
$footer_description                = get_field('footer_description', 'option');
$footer_address                    = get_field('footer_address', 'option');
$footer_copyrights                 = get_field('footer_copyrights', 'option');
$footer_expertise_heading          = get_field('footer_expertise_heading', 'option');
$footer_expertise_heading_link     = get_field('footer_expertise_heading_link', 'option');
$footer_expertise_menu             = get_field('footer_expertise_menu', 'option');

$footer_area_practice_menu         = get_field('footer_area_practice_menu', 'option');
$footer_area_practice_heading      = get_field('footer_area_practice_heading', 'option');
$footer_area_practice_heading_link = get_field('footer_area_practice_heading_link', 'option');

$footer_firm_heading               = get_field('footer_firm_heading', 'option');
$footer_firm_heading_link          = get_field('footer_firm_heading_link', 'option');
$footer_firm_menu                  = get_field('footer_firm_menu', 'option');
$footer_copyrights                 = get_field('footer_copyrights', 'option');
$footer_privacy_link_text          = get_field('footer_privacy_link_text', 'option');
$footer_privacy_link               = get_field('footer_privacy_link', 'option');
$footer_consullt_button_text       = get_field('footer_consullt_button_text', 'option');
$footer_consullt_button_link       = get_field('footer_consullt_button_link', 'option');
$footer_contact_number_text        = get_field('footer_contact_number_text', 'option');
$footer_contact_number             = get_field('footer_contact_number', 'option');


?>
<footer id="main_footer">
  <div class="background-bg">
    <picture class="object-fit">
      <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-bg@2x.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-mobile@2x.jpg" alt="Footer Background Image"> </picture>
  </div>
  <div class="container">
    <div class="footer">
      <div class="footer_top flex">
        <div class="footer_lt flex">
          <div class="footer-lt-cnt">
            <?php if (!empty($footer_logo)){ ?>    
                <div class="footer-logo">
                <figure> <a href="<?php echo home_url('/'); ?>"> <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" /></a> </figure>
                </div>
            <?php } ?>
            <div class="ftr-intro">
            <?php if (!empty($footer_description)){ 
                echo $footer_description; 
            } if (!empty($footer_address)){ ?>
                    <div class="mail-links flex">
                        <i class="fa-regular fa-location-dot"></i>
                        <?php echo $footer_address;  ?>
                    </div>
            <?php } ?>
            </div>           
            <div class="copy">
            <?php if (!empty($footer_copyrights)){ ?>              
              <p>Copyright &copy; <?php echo date('Y').'&nbsp;'.$footer_copyrights; ?></p>
              
              <?php } if (!empty($footer_privacy_link_text && $footer_privacy_link)){ ?>
                <div class="privacy-links">
                  	<ul>
                    	<li><a href="<?php echo $footer_privacy_link;  ?>"><?php echo $footer_privacy_link_text;  ?></a></li>
                  	</ul>
                </div>
              <?php } ?>
            
            </div>
          </div>
          <!-- end of footer lt cnt --> 
          
        </div>
        <!-- end of footer_lt -->
        
        <div class="footer_rt flex">
          <div class="ftr-menu-wrap flex">
			<?php if(!empty($footer_expertise_heading)){ ?>
				<div class="footer-menu footer1-of-3">
				<ul class="menu-list">
					<li class="menu-item-has-children" id="menu-item-101">
					<a href="<?php echo $footer_expertise_heading_link; ?>"><?php echo $footer_expertise_heading; ?></a>
						
				<?php 
							if (!empty($footer_expertise_menu)) {
								wp_nav_menu(array(
									'menu' => $footer_expertise_menu,
									'container' => false,
									'items_wrap' => '<ul class="sub-menu">%3$s</ul>',
								));
							}  ?>
					</li>
				</ul>
				</div>
			<?php } if(!empty($footer_area_practice_heading)){ ?>
            <div class="footer-menu footer1-of-3">
              <ul class="menu-list">
                <li class="menu-item-has-children" id="menu-item-102">
					<a href="<?php echo $footer_area_practice_heading_link; ?>"><?php echo $footer_area_practice_heading; ?></a>
                         
              <?php 
                        if (!empty($footer_area_practice_menu)) {
                            wp_nav_menu(array(
                                'menu' => $footer_area_practice_menu,
                                'container' => false,
                                'items_wrap' => '<ul class="sub-menu">%3$s</ul>',
                            ));
                        }  ?>
              </ul>
            </div>
			<?php } if(!empty($footer_firm_heading)){ ?>
				<div class="footer-menu footer1-of-3">
				<ul class="menu-list">
					<li class="menu-item-has-children" id="menu-item-103">
						<a href="<?php echo $footer_firm_heading_link ; ?>"><?php echo $footer_firm_heading; ?></a>
						<?php 
							if (!empty($footer_firm_menu)) {
								wp_nav_menu(array(
									'menu' => $footer_firm_menu,
									'container' => false,
									'items_wrap' => '<ul class="sub-menu">%3$s</ul>',
								));
							}  ?>
					</li>
				</ul>
				</div>
			<?php } ?>
          </div>
        </div>
        <!-- end of footer rt --> 
        
      </div>
      <!-- end of footer_top -->
      
      <div class="footer_btm flex">
        <div class="ftr-btm-lt flex">
          <div class="ftr-sm">
            <?php if( have_rows('footer_socialmedia', 'option') ): ?>
            <ul>
            <?php
            $i=1;while ( have_rows('footer_socialmedia', 'option') ) : the_row();
                $footer_socialmedia_active_icon       = get_sub_field('footer_socialmedia_active_icon');
                $footer_socialmedia_hover_icon        = get_sub_field('footer_socialmedia_hover_icon');
                $footer_socailmedia_link              = get_sub_field('footer_socailmedia_link'); 
				if(!empty( $footer_socialmedia_active_icon  && $footer_socailmedia_link )){	?>
					<li>
						<a href="<?php echo $footer_socailmedia_link; ?>" class="flex flex-center" target="_blank" rel="nofollow">
						<figure> <img src="<?php echo $footer_socialmedia_active_icon['url']; ?>" alt="<?php echo $footer_socialmedia_active_icon['alt']; ?>" class="hide-on-hover"/> 
						<img src="<?php echo $footer_socialmedia_hover_icon['url']; ?>" alt="<?php echo $footer_socialmedia_hover_icon['alt']; ?>"  class="show-on-hover"/> 
						</figure>
						</a></li>
                <?php } endwhile;  ?>
             
            </ul>
            <?php endif; ?>
          </div>
          <!-- end of ftr-sm --> 
        </div>
        <!-- end of ftr-btm-lt -->
		
        <div class="ftr-btm-rt">
          <div class="btn-wrap"> 
		  <?php if(!empty( $footer_contact_number_text  && $footer_contact_number )){	?>
		   <a href="tel:<?php echo $footer_contact_number; ?>" class="button btn-big btn-dark telbtn"><?php echo $footer_contact_number_text; ?>
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M14.0497 6.10938C15.0264 6.29994 15.924 6.77763 16.6277 7.48131C17.3314 8.18499 17.8091 9.08264 17.9997 10.0594M14.0497 2.10938C16.0789 2.33481 17.9713 3.24355 19.4159 4.68638C20.8606 6.12922 21.7717 8.02038 21.9997 10.0494M10.2266 13.9724C9.02506 12.7709 8.07627 11.4122 7.38028 9.9626C7.32041 9.83791 7.29048 9.77557 7.26748 9.69668C7.18576 9.41632 7.24446 9.07207 7.41447 8.83464C7.46231 8.76782 7.51947 8.71067 7.63378 8.59636C7.98338 8.24675 8.15819 8.07195 8.27247 7.89617C8.70347 7.23328 8.70347 6.3787 8.27247 5.71581C8.15819 5.54003 7.98338 5.36523 7.63378 5.01562L7.43891 4.82075C6.90747 4.28931 6.64174 4.02359 6.35636 3.87924C5.7888 3.59217 5.11854 3.59217 4.55098 3.87924C4.2656 4.02359 3.99987 4.28931 3.46843 4.82075L3.3108 4.97838C2.78117 5.50801 2.51636 5.77282 2.31411 6.13285C2.08969 6.53236 1.92833 7.15285 1.9297 7.61107C1.93092 8.02402 2.01103 8.30624 2.17124 8.87069C3.03221 11.9041 4.65668 14.7664 7.04466 17.1544C9.43264 19.5424 12.295 21.1669 15.3284 22.0278C15.8928 22.1881 16.1751 22.2682 16.588 22.2694C17.0462 22.2708 17.6667 22.1094 18.0662 21.885C18.4263 21.6827 18.6911 21.4179 19.2207 20.8883L19.3783 20.7307C19.9098 20.1992 20.1755 19.9335 20.3198 19.6481C20.6069 19.0805 20.6069 18.4103 20.3198 17.8427C20.1755 17.5573 19.9098 17.2916 19.3783 16.7602L19.1835 16.5653C18.8339 16.2157 18.6591 16.0409 18.4833 15.9266C17.8204 15.4956 16.9658 15.4956 16.3029 15.9266C16.1271 16.0409 15.9523 16.2157 15.6027 16.5653C15.4884 16.6796 15.4313 16.7368 15.3644 16.7846C15.127 16.9546 14.7828 17.0133 14.5024 16.9316C14.4235 16.9086 14.3612 16.8787 14.2365 16.8188C12.7869 16.1228 11.4282 15.174 10.2266 13.9724Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a> 
			<?php } if(!empty( $footer_consullt_button_text  && $footer_consullt_button_link )){	?>
				<a href="<?php echo $footer_consullt_button_link; ?>" class="button btn-big consult-btn"><?php echo $footer_consullt_button_text; ?>
				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M21 11.6094V8.90938C21 7.22922 21 6.38914 20.673 5.7474C20.3854 5.18292 19.9265 4.72398 19.362 4.43636C18.7202 4.10937 17.8802 4.10938 16.2 4.10938H7.8C6.11984 4.10938 5.27976 4.10937 4.63803 4.43636C4.07354 4.72398 3.6146 5.18292 3.32698 5.7474C3 6.38914 3 7.22922 3 8.90937V17.3094C3 18.9895 3 19.8296 3.32698 20.4713C3.6146 21.0358 4.07354 21.4948 4.63803 21.7824C5.27976 22.1094 6.11984 22.1094 7.8 22.1094H12.5M21 10.1094H3M16 2.10938V6.10938M8 2.10938V6.10938M18 21.1094V15.1094M15 18.1094H21" stroke="#0C0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				</a> 
			<?php } ?>
		</div>
        </div>
        <!-- end of ftr-btm-rt --> 
        
      </div>
      <!-- end of footer_btm --> 
      
    </div>
    <!-- end of footer --> 
    
  </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>