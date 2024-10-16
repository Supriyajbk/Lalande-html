<?php

/* Template Name: Home template */
get_header(); 
$banner_desktop_image 	= get_field('banner_desktop_image');
$banner_m_image 		    = get_field('banner_mobile_image');
$banner_mobile_image 	  = $banner_m_image ? $banner_m_image : $banner_desktop_image;
$banner_sub_heading     = get_field('banner_sub_heading');
$banner_h 				      = get_field('banner_heading');
  if(empty($banner_h)){
    $banner_heading = get_the_title();
  } else {
    $banner_heading = $banner_h;
  }
$banner_description		  = get_field('banner_description');
$banner_button_text 	  = get_field('banner_button_text');
$banner_button_link 	  = get_field('banner_button_link');

$intro_subheading       = get_field('intro_subheading');
$intro_heading          = get_field('intro_heading');
$intro_description      = get_field('intro_description');
$intro_button_text      = get_field('intro_button_text');
$intro_button_link      = get_field('intro_button_link');

$advantage_icon         = get_field('advantage_icon');
$advantage_heading      = get_field('advantage_heading');
$advantage_subheading   = get_field('advantage_subheading');
$advantage_description  = get_field('advantage_description');
$advantage_link_text    = get_field('advantage_link_text');
$advantage_link         = get_field('advantage_link');

$lawyer_result_heading          = get_field('lawyer_result_heading');
$lawyer_result_description      = get_field('lawyer_result_description');

?>

<section class="default-banner-section pos-relative">
    <div class="banner-bg">
        <?php if(!empty($banner_desktop_image)){ ?>
        <picture class="object-fit">
            <source srcset="<?php echo $banner_desktop_image['url']; ?>" media="(min-width:768px)">
            <img src="<?php echo $banner_mobile_image['url']; ?>" alt="<?php echo $banner_mobile_image['alt']; ?>">
        </picture>
        <?php } ?>
    </div>
    <div class="container">
        <div class="default-banner-main container-md flex">
            <div class="default-banner-text">
              <?php if(!empty($banner_sub_heading)){ ?>
                <span class="optional-text"><?php echo $banner_sub_heading; ?></span>
              <?php } ?>
                <h1><?php echo $banner_heading; ?></h1>
                <?php if(!empty($banner_description)){
                    echo $banner_description; 
                } if(!empty($banner_button_text && $banner_button_link)){ ?>
                  <div class="btn-wrap">
                      <a href="<?php echo $banner_button_link; ?>" class="button btn-big consult-btn"><?php echo $banner_button_text; ?>
                          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M21 11.6094V8.90938C21 7.22922 21 6.38914 20.673 5.7474C20.3854 5.18292 19.9265 4.72398 19.362 4.43636C18.7202 4.10937 17.8802 4.10938 16.2 4.10938H7.8C6.11984 4.10938 5.27976 4.10937 4.63803 4.43636C4.07354 4.72398 3.6146 5.18292 3.32698 5.7474C3 6.38914 3 7.22922 3 8.90937V17.3094C3 18.9895 3 19.8296 3.32698 20.4713C3.6146 21.0358 4.07354 21.4948 4.63803 21.7824C5.27976 22.1094 6.11984 22.1094 7.8 22.1094H12.5M21 10.1094H3M16 2.10938V6.10938M8 2.10938V6.10938M18 21.1094V15.1094M15 18.1094H21"
                                  stroke="#0C0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                      </a>
                  </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php if(have_rows('clients_logo')): ?>
<section class="logo-slider-module">
    <div class="container">
      <div class="logo-slider">
        <div class="logo-slider-row flex">
        <?php while( have_rows('clients_logo') ): the_row(); 
								$client_logo 	= get_sub_field('client_logo');
								if(!empty($client_logo)){
								?>
          <div class="logo-img">
            <figure class="object-fit"> 
              <img src="<?php echo $client_logo['url']; ?>" alt="<?php echo $client_logo['alt']; ?>" title="<?php echo $client_logo['title']; ?>"> 
            </figure>
          </div>
          <?php } endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
</section>
<?php endif; ?>

<section class="features-module">
    <div class="container">
        <?php if(!empty($intro_subheading || $intro_heading || $intro_description ||  $intro_button_text)){ ?>
          <div class="intro flex">
            <?php if(!empty($intro_subheading || $intro_heading ||  $intro_button_text)){ ?>
              <div class="intro-lt"> 
                <?php if(!empty($intro_subheading)){ ?>
                  <span class="optional-head"><?php echo $intro_subheading; ?></span>
                <?php } if(!empty($intro_heading)){ ?>
                  <h2><?php echo $intro_heading; ?></h2>
                <?php } if(!empty($intro_button_link && $intro_button_text)){ ?>
                  <div class="btn-wrap">
                    <a href="<?php echo $intro_button_link; ?>" class="button btn-big consult-btn"><?php echo $intro_button_text; ?>
                          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M21 11.6094V8.90938C21 7.22922 21 6.38914 20.673 5.7474C20.3854 5.18292 19.9265 4.72398 19.362 4.43636C18.7202 4.10937 17.8802 4.10938 16.2 4.10938H7.8C6.11984 4.10938 5.27976 4.10937 4.63803 4.43636C4.07354 4.72398 3.6146 5.18292 3.32698 5.7474C3 6.38914 3 7.22922 3 8.90937V17.3094C3 18.9895 3 19.8296 3.32698 20.4713C3.6146 21.0358 4.07354 21.4948 4.63803 21.7824C5.27976 22.1094 6.11984 22.1094 7.8 22.1094H12.5M21 10.1094H3M16 2.10938V6.10938M8 2.10938V6.10938M18 21.1094V15.1094M15 18.1094H21"
                                  stroke="#0C0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                      </a>
                  </div>
                  <?php } ?>
              </div>
            <?php } ?>
              <!-- end of intro lt -->
            <?php if(!empty($intro_description)){ ?>
              <div class="intro-rt">
                 <?php echo $intro_description; ?>
              </div>
            <?php } ?>
              <!-- end of intro lt -->
          </div>
        <?php } ?>
        <?php 
        $expetise_list         = get_field('expetises_list');
        if( empty($expetise_list) ){
          $parent_id = 1177;
          $subpages = get_pages( array(
              'child_of'     => $parent_id, 
              'sort_column'  => 'menu_order',
              'sort_order'   => 'ASC'
          ) );
      }
        else{
         $subpages = $expetise_list;
        }
        ?>
        <div class="features-main">
        <?php foreach( $subpages as $subpage ): ?>
            <div class="features-grid">
                <?php 
                $icon = get_field('practice_area_icon', $subpage->ID); 
                $description = get_field('practice_area_content', $subpage->ID); 
                ?>
                <div class="feature-icon">
                    <?php if( $icon ): ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="h4">
                    <a href="<?php echo get_permalink($subpage->ID); ?>">
                        <?php echo $subpage->post_title; ?>
                    </a>
                </div>
                <p><?php echo $description; ?></p>
                <a href="<?php echo get_permalink($subpage->ID); ?>" class="readmore">Learn More</a>
            </div>
        <?php endforeach; wp_reset_postdata();?>
            
        </div>
        <!-- end of features main -->
    </div>
</section>
<?php if(!empty($lawyer_result_heading || $lawyer_result_description || $advantage_subheading || $advantage_heading || $advantage_description || $advantage_link_text) || have_rows('advantage_button_link_copy') || have_rows('lawyer_result_statistics')){ ?>
<section class="hsc-wrap pos-relative">
    <div class="background-bg">
        <picture class="object-fit">
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/stats-module-bg@2x.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-stats-bg-mobile@2x.jpg" alt="Background Image" title="Background Image">
        </picture>
    </div>
    <?php if(!empty($advantage_subheading || $advantage_heading || $advantage_description || $advantage_link_text) || have_rows('advantage_button_link_copy')){ ?>
      <section class="hamiltion-stats-content">
          <div class="container">
              <div class="hsc-inner container-md flex">
                <?php if(!empty($advantage_subheading || $advantage_heading || $advantage_description || $advantage_link_text)) { ?>
                  <div class="hsc-inner-lt">
                    <?php if(!empty($advantage_icon)){ ?>
                      <div class="stars">
                          <figure class="object-fit"><img src="<?php echo $advantage_icon['url']; ?>" alt="<?php echo $advantage_icon['alt']; ?>" title="<?php echo $advantage_icon['title']; ?>"></figure>
                      </div>
                    <?php } if(!empty($advantage_heading)){ ?>
                      <h2><?php echo $advantage_heading; ?></h2>
                    <?php } if(!empty($advantage_subheading)){  ?>
                      <span class="hsc-txt"><?php echo $advantage_subheading; ?></span>
                    <?php } 
                        echo $advantage_description; 
                    ?>
                    <?php if(!empty($advantage_link_text && $advantage_link)){ ?>
                      <a href="<?php echo $advantage_link; ?>" class="readmore white"><?php echo $advantage_link_text; ?></a>
                    <?php } ?>
                  </div>
                <?php } ?>
                <?php if(have_rows('advantage_button_link_copy')) ?>  
                  <div class="hsc-inner-rt">
                      <div class="accordion-main">
                        <?php while( have_rows('advantage_button_link_copy') ): the_row(); 
                          $advantage_question 	= get_sub_field('advantage_question');
                          $advantage_answer     = get_sub_field('advantage_answer');
                          if(!empty($advantage_answer && $advantage_question)){
                        ?>
                            <div class="accordion">
                                <div class="accordion-item"> 
                                    <a class="accordion-heading"><span class="title"><?php echo $advantage_question; ?></span> </a>
                                    <div class="content">
                                        <?php echo $advantage_answer; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } endwhile; wp_reset_postdata(); ?>
                      </div>
                  </div>
                  
              </div>
              <!-- end of hsc-inner -->
          </div>
      </section>
    <?php } ?>
    
    <?php echo get_hamiltion_stats(); ?>
    
</section>
<?php } ?>

<?php
$helpline_desktop_image  = get_field('helpline_desktop_image');
$helpline_mobile_image        = get_field('helpline_mobile_image');
//$helpline_mobile_image   = $helpline_m_image  ? $helpline_m_image : $helpline_desktop_image;
$helpline_mobile_image_bottom = get_field('helpline_mobile_image_bottom');
$helpline_heading        = get_field('helpline_heading');
$helpline_description    = get_field('helpline_description');
$helpline_button_text    = get_field('helpline_button_text');
$helpline_button_link    = get_field('helpline_button_link');
$helpline_phone_number_text  = get_field('helpline_phone_number_text');
$helpline_phonenumber   = get_field('helpline_phonenumber');

if(!empty($helpline_desktop_image || $helpline_heading || $helpline_description)){ ?>
<section class="mini-cta-module pos-relative">
    
    <?php if(!empty($helpline_desktop_image)){ ?>
        <div class="mini-cta-bg pos-absolute hide-in-mobile">
        <figure class="object-fit"> <img src="<?php echo $helpline_desktop_image['url']; ?>" alt="<?php echo $helpline_desktop_image['alt']; ?>">  </figure>
        </div>
        <?php } ?>
    <!-- end of mini cta bg -->
    <?php if(!empty($helpline_mobile_image)){ ?>
        <div class="mini-cta-bg hide-in-tablet hide-in-desktop">
        <figure class="object-fit"> <img src="<?php echo $helpline_mobile_image['url']; ?>" alt="<?php echo $helpline_mobile_image['alt']; ?>">  </figure>
        </div>
    <?php } ?>
    <!-- end of mini cta bg -->
    <?php if(!empty($helpline_heading || $helpline_description)){ ?> 
        <div class="container">
          <div class="mini-cta-main">
              <div class="mini-cta-content flex">
                  <div class="mini-cta-lt">
                      <?php if(!empty($helpline_heading)){ ?>
                          <h2><?php echo $helpline_heading; ?></h2>
                      <?php } 
                          echo $helpline_description; 
                      ?>
                  </div>
                  <!-- end of mini cta lt -->
                  <?php if(!empty($helpline_button_text || $helpline_phone_number_text)){ ?>
                      <div class="mini-cta-rt">
                          <div class="btn-wrap"> 
                          <?php if(!empty($helpline_button_link && $helpline_button_text)){ ?>
                          <a href="<?php echo $helpline_button_link; ?>" class="button btn-big consult-btn"><?php echo $helpline_button_text; ?>
                          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M21 11.6094V8.90938C21 7.22922 21 6.38914 20.673 5.7474C20.3854 5.18292 19.9265 4.72398 19.362 4.43636C18.7202 4.10937 17.8802 4.10938 16.2 4.10938H7.8C6.11984 4.10938 5.27976 4.10937 4.63803 4.43636C4.07354 4.72398 3.6146 5.18292 3.32698 5.7474C3 6.38914 3 7.22922 3 8.90937V17.3094C3 18.9895 3 19.8296 3.32698 20.4713C3.6146 21.0358 4.07354 21.4948 4.63803 21.7824C5.27976 22.1094 6.11984 22.1094 7.8 22.1094H12.5M21 10.1094H3M16 2.10938V6.10938M8 2.10938V6.10938M18 21.1094V15.1094M15 18.1094H21" stroke="#0C0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          </a> 
                          <?php } ?>
                          <?php if(!empty($helpline_phone_number_text && $helpline_phonenumber)){ ?>
                          <a href="tel:<?php echo $helpline_phonenumber; ?>" class="button btn-big btn-dark telbtn"><?php echo $helpline_phone_number_text; ?>
                          <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.0497 6.10938C15.0264 6.29994 15.924 6.77763 16.6277 7.48131C17.3314 8.18499 17.8091 9.08264 17.9997 10.0594M14.0497 2.10938C16.0789 2.33481 17.9713 3.24355 19.4159 4.68638C20.8606 6.12922 21.7717 8.02038 21.9997 10.0494M10.2266 13.9724C9.02506 12.7709 8.07627 11.4122 7.38028 9.9626C7.32041 9.83791 7.29048 9.77557 7.26748 9.69668C7.18576 9.41632 7.24446 9.07207 7.41447 8.83464C7.46231 8.76782 7.51947 8.71067 7.63378 8.59636C7.98338 8.24675 8.15819 8.07195 8.27247 7.89617C8.70347 7.23328 8.70347 6.3787 8.27247 5.71581C8.15819 5.54003 7.98338 5.36523 7.63378 5.01562L7.43891 4.82075C6.90747 4.28931 6.64174 4.02359 6.35636 3.87924C5.7888 3.59217 5.11854 3.59217 4.55098 3.87924C4.2656 4.02359 3.99987 4.28931 3.46843 4.82075L3.3108 4.97838C2.78117 5.50801 2.51636 5.77282 2.31411 6.13285C2.08969 6.53236 1.92833 7.15285 1.9297 7.61107C1.93092 8.02402 2.01103 8.30624 2.17124 8.87069C3.03221 11.9041 4.65668 14.7664 7.04466 17.1544C9.43264 19.5424 12.295 21.1669 15.3284 22.0278C15.8928 22.1881 16.1751 22.2682 16.588 22.2694C17.0462 22.2708 17.6667 22.1094 18.0662 21.885C18.4263 21.6827 18.6911 21.4179 19.2207 20.8883L19.3783 20.7307C19.9098 20.1992 20.1755 19.9335 20.3198 19.6481C20.6069 19.0805 20.6069 18.4103 20.3198 17.8427C20.1755 17.5573 19.9098 17.2916 19.3783 16.7602L19.1835 16.5653C18.8339 16.2157 18.6591 16.0409 18.4833 15.9266C17.8204 15.4956 16.9658 15.4956 16.3029 15.9266C16.1271 16.0409 15.9523 16.2157 15.6027 16.5653C15.4884 16.6796 15.4313 16.7368 15.3644 16.7846C15.127 16.9546 14.7828 17.0133 14.5024 16.9316C14.4235 16.9086 14.3612 16.8787 14.2365 16.8188C12.7869 16.1228 11.4282 15.174 10.2266 13.9724Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          </a> 
                          <?php } ?>
                      </div>
                          <!-- end of btn wrap --> 
                      </div>
                  <?php } ?>
                  <!-- end of mini cta rt --> 
              </div>
          </div>
        <!-- end of mini cta main --> 
        </div>
    <?php } ?>
    <?php if(!empty($helpline_mobile_image_bottom)){ ?>
    <div class="mini-cta-bg hide-in-tablet hide-in-desktop">
        <figure class="object-fit"> <img src="<?php echo $helpline_mobile_image_bottom['url']; ?>" alt="<?php echo $helpline_mobile_image_bottom['alt']; ?>">  </figure>
    </div>
    <?php } ?>

</section>
<?php }
?>

<section class="dynamic-selector-module pos-relative">
    <div class="dynamic-selector flex">
        <div class="dynamic-selector-lt">
            <div class="ds-lt-bg pos-absolute">
                <figure class="object-fit"> <img src="images/dynamic-selector@2x.jpg" alt="Dynamic Selector Background"
                        title="Dynamic Selector Background"> </figure>
            </div>
            <!-- end of ds-lt-bg -->
            <div class="ds-lt-inner"> <span class="optional-text">Optional Pre-header</span>
                <h2><span>How do I Hire</span> a Personal Injury Lawyer near me?</h2>
                <ul class="ds-links">
                    <li><a href="#">Read our Google Reviews</a></li>
                    <li><a href="#">We Deliver One-on-One Client Personal Attention.</a></li>
                    <li><a href="#">Should I hire a local Hamilton Personal Injury Lawyer?</a></li>
                </ul>
                <!-- end of ds links -->
            </div>
            <!-- end of ds lt inner -->
        </div>
        <!-- end of dynamic selector lt -->
        <div class="dynamic-selector-rt">
            <div class="ds-rt-inner">
                <div class="ds-rt-top">
                    <figure class="object-fit"> <img src="images/repeater-thumb-one@2x.jpg" alt="Dynamic Selector Thumb"
                            title="Dynamic Selector Thumb"> </figure>
                </div>
                <!-- end of ds-rt top -->
                <div class="ds-rt-btm">
                    <p>Et tristique tortor tellus augue aliquam amet at. Nunc diam placerat ut purus magna. Amet etiam
                        orci tempor mattis integer neque pretium elementum. Sit mattis aliquam massa sed. Proin ornare
                        fusce enim mauris ac. Nisl lacus viverra ullamcorper sit viverra. Nulla vel ullamcorper quis in.
                        Urna velit porttitor nibh.</p>
                    <a href="#" class="readmore white">Book a Free Consultation</a>
                </div>
            </div>
            <!-- end of ds-rt-inner -->
        </div>
        <!-- end of dynamic selector rt -->
    </div>
    <!-- end of dynamic selector -->
</section>

<?php 
$our_expertise_subheading   = get_field('our_expertise_subheading');
$our_expertise_heading      = get_field('our_expertise_heading');
$our_expertise_description  = get_field('our_expertise_description');
$our_expertise_link_text    = get_field('our_expertise_link_text');
$our_expertise_link         = get_field('our_expertise_link');
?>

<section class="features-module pi">
    <div class="container">
      <?php if(!empty($our_expertise_subheading || $our_expertise_heading || $our_expertise_description || $our_expertise_link_text )) { ?>
        <div class="intro flex">
          <?php if(!empty($our_expertise_subheading || $our_expertise_heading || $our_expertise_link_text )) { ?>
            <div class="intro-lt"> 
              <?php if(!empty($our_expertise_subheading)){ ?>
                <span class="optional-head"><?php echo $our_expertise_subheading; ?></span>
              <?php } if(!empty($our_expertise_heading)){ ?>
                <h2><?php echo $our_expertise_heading; ?></h2>
              <?php } if(!empty($our_expertise_link_text && $our_expertise_link)){ ?>
                <a href="<?php echo $our_expertise_link; ?>" class="readmore"><?php echo $our_expertise_link_text; ?></a>
              <?php } ?>
            </div>
          <?php } ?>
            <!-- end of intro lt -->
          <?php if(!empty($our_expertise_description)){ ?>
            <div class="intro-rt">
                <?php echo $our_expertise_description; ?>
            </div>
          <?php } ?>
            <!-- end of intro lt -->
        </div>
      <?php } ?>
      <?php 
        $our_list         = get_field('our_expertises_list');
        if( empty($our_list) ){
          $parent_id = 390;
          $list_subpages = get_pages( array(
              'parent'      => $parent_id,
              'sort_column'  => 'menu_order',
              'sort_order'   => 'ASC',
              'depth' => 1,
          ) );
      }
        else{
         $list_subpages = $our_list;
        }
        
        ?>
        <div class="features-main">
        <?php foreach( $list_subpages as $subpages ): 
          
          ?>
            <div class="features-grid">
                <?php 
                $icon = get_field('practice_area_icon', $subpages); 
                $description = get_field('practice_area_content', $subpages); 
                ?>
                <div class="feature-icon">
                    <?php if( $icon ): ?>
                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" title="<?php echo $icon['title']; ?>" />
                    <?php endif; ?>
                </div>
                <div class="h4">
                    <a href="<?php echo get_permalink($subpages); ?>">
                        <?php echo get_the_title($subpages) ?>
                    </a>
                </div>
                <p><?php echo $description; ?></p>
                <a href="<?php echo get_permalink($subpages); ?>" class="readmore">Learn More</a>
            </div>
        <?php endforeach; wp_reset_postdata();?>
        <!-- end of features main -->
    </div>
</section>
<?php
$display_testimonials = get_field('display_testimonials');
$testimonial_heading = get_field('testimonial_heading');
$testimonials        = get_field('testimonials_list');
if (empty($testimonials)) {
  $select_testimonials_args = array(
      'numberposts' => 3,
      'post_type'   => 'testimonial',
      'post_status' => 'publish',
      'fields' => 'ids'    
  );
  $latest_select_testimonials_args = get_posts($select_testimonials_args);
} else {
  $latest_select_testimonials_args = $testimonials;
}
if($display_testimonials == "yes"){ 
?>
<section class="testimonial-module">
    <div class="background-bg">
        <picture class="object-fit">
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/home-testimonial-bg@2x.jpg" media="(min-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-mobile@2x.jpg" alt="Background Image" title="Background Image">
        </picture>
    </div>
    <div class="container">
        <div class="container-md">
            <?php if(!empty($testimonial_heading)){ ?>
              <h2><?php echo $testimonial_heading; ?></h2>
            <?php } ?>
            <div class="testimonial-slider flex">
                <div class="slider slider-nav thumb-text">
                    <?php
                   $i=1;
                        foreach ($latest_select_testimonials_args as $testimonial) :
                          
                            // Fetch individual testimonial details
                            $testimonial_rating         = get_field('testimonial_rating', $testimonial) ;  
                                $testimonial_content        = get_post_field('post_content', $testimonial); 
                                $testimonial_firstname      = get_field('testimonial_user_firstname', $testimonial); 
                                $testimonial_lastname       = get_field('testimonial_user_lastname', $testimonial); 
                                $fullname                   = trim($testimonial_firstname . ' ' . $testimonial_lastname);
                            
                    ?>
                        <div class="testimonial-content" id="data-slide-<?php echo $i; ?>">
                                <?php 
                                                if( !empty($testimonial_rating) ) {
                                                    echo '<div class="stars rating-star">';
                                                    echo '<figure class="object-fit">'; // Opening figure tag

                                                    // Loop to generate the required number of <img> tags inside the <figure> tag
                                                    for( $i = 1; $i <= $testimonial_rating; $i++ ) {
                                                        echo '<img src="'.get_stylesheet_directory_uri().'/images/Star 1.svg" alt="stars" title="stars">';
                                                    }

                                                    echo '</figure>'; // Closing figure tag
                                                    echo '</div>';
                                                }
                                            ?>
                            <?php echo $testimonial_content; ?>
                            <!-- Testimonial Author -->
                            <div class="author-name">
                                <?php echo $fullname ; ?>
                            </div>
                        </div>
                    <?php $i++; endforeach; wp_reset_postdata(); ?>
                </div>
                <!-- Slider for testimonial thumbs -->
                <div class="slider slider-for">
                    <?php  
                    $j=1;
                    foreach ($latest_select_testimonials_args as $testimonial) : 
                     $testimonial_poster_image   = get_field('testmonial_poster_image', $testimonial); 
                      
                      if(!empty($testimonial_poster_image)){
                      ?>
                        <div class="testimonial-thumb" id="data-slide-<?php echo $j; ?>">
                            <div class="testimonial-img">
                                <figure class="object-fit">
                                    <!-- Testimonial Poster Image -->
                                    <img src="<?php echo $testimonial_poster_image['url']; ?>" alt="<?php echo $testimonial_poster_image['alt']; ?>" title="<?php echo $testimonial_poster_image['title']; ?>">
                                </figure>
                            </div>
                        </div>
                    <?php $j++; } endforeach; wp_reset_postdata(); ?>
                </div>

                <div class="custom_arrows_wc">
                    <div class="custom-flex flex">
                        <div class="custom_dots_wc"></div>
                        <div class="more-testimonials">
                            <a href="<?php echo get_permalink('892'); ?>" class="readmore white">More Testimonials</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php echo get_case_review(); ?>

<?php  
$injury_lawyer_desktop_image      = get_field('injury_lawyer_desktop_image');
$injury_lawyer_m_image            = get_field('injury_lawyer_mobile_image');
$injury_lawyer_mobile_image       = $injury_lawyer_m_image  ? $injury_lawyer_m_image : $injury_lawyer_desktop_image;
$injury_lawyer_logo               = get_field('injury_lawyer_logo');
$injury_lawyer_sub_heading        = get_field('injury_lawyer_sub_heading');
$injury_lawyer_heading            = get_field('injury_lawyer_heading');
$injury_lawyer_skills             = get_field('injury_lawyer_skills');
$injury_lawyer_description        = get_field('injury_lawyer_description');
$injury_lawyer_button_text        = get_field('injury_lawyer_button_text');
$injury_lawyer_button_link        = get_field('injury_lawyer_button_link');
$injury_lawyer_contact_button_text = get_field('injury_lawyer_contact_button_text');
$injury_lawyer_contact_button_number  = get_field('injury_lawyer_contact_button_number');
if(!empty($injury_lawyer_desktop_image || $injury_lawyer_sub_heading || $injury_lawyer_heading || $injury_lawyer_skills || $injury_lawyer_description || $injury_lawyer_button_text || $injury_lawyer_contact_button_text )){
?>
<section class="single-lawyer">
    <div class="logo-text pos-absolute">
        <figure class="object-fit">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lalande-vector-gradient.svg" alt="Lalande Logo Vector"title="Lalande Logo Vector" />
        </figure>
    </div>
    <div class="container">
        <div class="single-lawyer-wrap flex">
          <?php if(!empty($injury_lawyer_sub_heading || $injury_lawyer_heading || $injury_lawyer_skills || $injury_lawyer_description || $injury_lawyer_button_text || $injury_lawyer_contact_button_text)){ ?>
            <div class="single-lawyer-lt"> 
                <?php if(!empty($injury_lawyer_sub_heading)){ ?>
                  <span class="optional-text"><?php echo $injury_lawyer_sub_heading; ?></span>
                <?php } if(!empty($injury_lawyer_heading)){ ?>
                  <h2><?php echo $injury_lawyer_heading; ?></h2>
                <?php } if(!empty($injury_lawyer_skills)){ ?>
                  <div class="sl-txt"><?php echo $injury_lawyer_skills; ?> </div>
                <?php } if(!empty($injury_lawyer_description)){
                    echo $injury_lawyer_description;
                }
                ?>
                <?php if(!empty($injury_lawyer_button_text || $injury_lawyer_contact_button_text)){ ?>
                  <div class="btn-wrap"> 
                  <?php if(!empty($injury_lawyer_button_text && $injury_lawyer_button_link)){ ?>
                    <a href="<?php echo $injury_lawyer_button_link; ?>" class="button arrow-btn"><?php echo $injury_lawyer_button_text; ?> <i class="fa-regular fa-arrow-right"></i></a> 
                  <?php }  if(!empty($injury_lawyer_contact_button_text && $injury_lawyer_contact_button_number)){ ?>
                    <a href="tel:<?php echo $injury_lawyer_contact_button_number; ?>" class="button btn-big btn-dark telbtn"><?php echo $injury_lawyer_contact_button_text; ?>
                      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0497 6.10938C15.0264 6.29994 15.924 6.77763 16.6277 7.48131C17.3314 8.18499 17.8091 9.08264 17.9997 10.0594M14.0497 2.10938C16.0789 2.33481 17.9713 3.24355 19.4159 4.68638C20.8606 6.12922 21.7717 8.02038 21.9997 10.0494M10.2266 13.9724C9.02506 12.7709 8.07627 11.4122 7.38028 9.9626C7.32041 9.83791 7.29048 9.77557 7.26748 9.69668C7.18576 9.41632 7.24446 9.07207 7.41447 8.83464C7.46231 8.76782 7.51947 8.71067 7.63378 8.59636C7.98338 8.24675 8.15819 8.07195 8.27247 7.89617C8.70347 7.23328 8.70347 6.3787 8.27247 5.71581C8.15819 5.54003 7.98338 5.36523 7.63378 5.01562L7.43891 4.82075C6.90747 4.28931 6.64174 4.02359 6.35636 3.87924C5.7888 3.59217 5.11854 3.59217 4.55098 3.87924C4.2656 4.02359 3.99987 4.28931 3.46843 4.82075L3.3108 4.97838C2.78117 5.50801 2.51636 5.77282 2.31411 6.13285C2.08969 6.53236 1.92833 7.15285 1.9297 7.61107C1.93092 8.02402 2.01103 8.30624 2.17124 8.87069C3.03221 11.9041 4.65668 14.7664 7.04466 17.1544C9.43264 19.5424 12.295 21.1669 15.3284 22.0278C15.8928 22.1881 16.1751 22.2682 16.588 22.2694C17.0462 22.2708 17.6667 22.1094 18.0662 21.885C18.4263 21.6827 18.6911 21.4179 19.2207 20.8883L19.3783 20.7307C19.9098 20.1992 20.1755 19.9335 20.3198 19.6481C20.6069 19.0805 20.6069 18.4103 20.3198 17.8427C20.1755 17.5573 19.9098 17.2916 19.3783 16.7602L19.1835 16.5653C18.8339 16.2157 18.6591 16.0409 18.4833 15.9266C17.8204 15.4956 16.9658 15.4956 16.3029 15.9266C16.1271 16.0409 15.9523 16.2157 15.6027 16.5653C15.4884 16.6796 15.4313 16.7368 15.3644 16.7846C15.127 16.9546 14.7828 17.0133 14.5024 16.9316C14.4235 16.9086 14.3612 16.8787 14.2365 16.8188C12.7869 16.1228 11.4282 15.174 10.2266 13.9724Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </a> 
                  <?php } ?>
                  </div>
                <?php } ?>
                <!-- end of btn wrap -->
            </div>
          <?php } ?>
            <!-- end of single lawyer lt -->
          <?php if(!empty($injury_lawyer_desktop_image)){ ?>
            <div class="single-lawyer-rt">
                <div class="single-lawyer-thumb">
                    <picture class="object-fit">
                        <source srcset="<?php echo $injury_lawyer_desktop_image['url']; ?>" media="(min-width:768px)">
                        <img src="<?php echo $injury_lawyer_mobile_image['url']; ?>" alt="<?php echo $injury_lawyer_mobile_image['alt']; ?>" title="<?php echo $injury_lawyer_mobile_image['title']; ?>">
                    </picture>
                    <?php if(!empty($injury_lawyer_logo)){ ?>
                      <div class="lawyer-logo pos-absolute">
                          <figure class="object-fit"> <img src="<?php echo $injury_lawyer_logo['url']; ?>" alt="<?php echo $injury_lawyer_logo['alt']; ?>"
                                  title="<?php echo $injury_lawyer_logo['title']; ?>"> </figure>
                      </div>
                    <?php } ?>
                </div>
            </div>
          <?php } ?>
            <!-- end of single lawyer rt -->
        </div>
        <!-- end of single lawyer wrap -->
    </div>
</section>
<?php } ?>

<?php 
$features_icon    = get_field('features_icon');
$features_heading = get_field('features_heading');
$features_subheading = get_field('features_subheading');

$practice_areas_desktop_image   = get_field('practice_areas_desktop_image');
$practice_areas_m_image         = get_field('practice_areas_mobile_image');
$practice_areas_mobile_image    = $practice_areas_m_image ? $practice_areas_m_image : $practice_areas_desktop_image;
$practice_areas_heading         = get_field('practice_areas_heading');
$practice_areas_description     = get_field('practice_areas_description');
$practice_areas_button_text     = get_field('practice_areas_button_text');
$practice_areas_button_link     = get_field('practice_areas_button_link');
$practice_areas_phone_number    = get_field('practice_areas_phone_number');
$practice_areas_phone_number_text= get_field('practice_areas_phone_number_text');
  if(!empty($features_subheading || $features_heading || $practice_areas_desktop_image || $practice_areas_heading || $practice_areas_description || $practice_areas_button_text || $practice_areas_phone_number_text) || have_rows('our_features') || have_rows('our_practices') || have_rows('our_practices')){ 
?>
<section class="sec-wrapper pos-relative">
  <?php if(!empty($features_subheading || $features_heading) || have_rows('our_features')){ ?>
    <section class="simple-features-module">
        <div class="container">
            <div class="sfm-wrap">
              <?php if(!empty($features_subheading || $features_heading)){ ?>
                <div class="sfm-head">
                  <?php if(!empty($features_icon)){ ?>
                    <div class="stars">
                        <figure class="object-fit"><img src="<?php echo $features_icon['url']; ?>" alt="<?php echo $features_icon['alt']; ?>" title="<?php echo $features_icon['title']; ?>"></figure>
                    </div>
                  <?php } if(!empty($features_heading)){  ?>
                    <h2><?php echo $features_heading; ?></h2>
                  <?php } if(!empty($features_subheading)){ ?>
                    <p><?php echo $features_subheading; ?></p>
                  <?php } ?>
                </div>
              <?php } ?>
              <?php if(have_rows('our_features')): ?>
                <div class="simple-features-main">
                <?php while( have_rows('our_features') ): the_row(); 
								  $our_feature_icon 	      = get_sub_field('our_feature_icon');
                  $our_feature_heading      = get_sub_field('our_feature_heading');
                  $our_feature_description  = get_sub_field('our_feature_description');
								  if(!empty($our_feature_heading ||  $our_feature_description)){
								?>
                    <div class="simple-features-grid">
                      <?php if(!empty($our_feature_icon)){ ?>
                        <div class="simple-feature-icon">
                          <img src="<?php echo $our_feature_icon['url']; ?>" alt="<?php echo $our_feature_icon['alt']; ?>" title="<?php echo $our_feature_icon['title']; ?>" />
                        </div>
                      <?php } ?>
                        <!-- end of feature icon -->
                      <?php if(!empty($our_feature_heading)){ ?>
                        <div class="h4"><?php echo $our_feature_heading; ?></div>
                      <?php } 
                      if(!empty($our_feature_description)){
                        echo $our_feature_description;
                      }
                      ?>
                    </div>
                  <?php } endwhile; wp_reset_postdata(); ?>
                </div>
              <?php endif; ?>
                <!-- end of features main -->
            </div>
        </div>
    </section>
  <?php } ?>
    <?php 
    
    if(!empty($practice_areas_desktop_image || $practice_areas_heading || $practice_areas_description || $practice_areas_button_text || $practice_areas_phone_number_text) || have_rows('our_practices')){
    ?>
    <section class="content-img-module">
        <div class="container">
            <div class="content-img flex">
              <?php if(!empty($practice_areas_desktop_image)){ ?>
                <div class="content-img-lt">
                    <picture class="object-fit">
                        <source srcset="<?php echo $practice_areas_desktop_image['url']; ?>" media="(min-width:768px)">
                        <img src="<?php echo $practice_areas_mobile_image['url']; ?>" alt="<?php echo $practice_areas_mobile_image['alt']; ?>" title="<?php echo $practice_areas_mobile_image['title']; ?>" />
                    </picture>
                </div>
                <?php } if(!empty($practice_areas_heading || $practice_areas_description || $practice_areas_button_text || $practice_areas_phone_number_text)){ ?>
                  <div class="content-img-rt">
                    <?php if(!empty($practice_areas_heading)){ ?>
                      <h2><?php echo $practice_areas_heading; ?></h2>
                    <?php } 
                        if(!empty($practice_areas_description)){
                          echo $practice_areas_description;
                        }
                    ?>
                    <?php if(!empty($practice_areas_button_text || $practice_areas_phone_number_text)){ ?>
                      <div class="btn-wrap"> 
                        <?php if(!empty($practice_areas_button_link && $practice_areas_button_text)){ ?>
                          <a href="<?php echo $practice_areas_button_link; ?>" class="button"><?php echo $practice_areas_button_text; ?></a>
                        <?php } if(!empty($practice_areas_phone_number_text && $practice_areas_phone_number)) { ?> 
                          <a href="tel:<?php echo $practice_areas_phone_number; ?>" class="button btn-big btn-dark telbtn"><?php echo $practice_areas_phone_number_text; ?>
                              <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0497 6.10938C15.0264 6.29994 15.924 6.77763 16.6277 7.48131C17.3314 8.18499 17.8091 9.08264 17.9997 10.0594M14.0497 2.10938C16.0789 2.33481 17.9713 3.24355 19.4159 4.68638C20.8606 6.12922 21.7717 8.02038 21.9997 10.0494M10.2266 13.9724C9.02506 12.7709 8.07627 11.4122 7.38028 9.9626C7.32041 9.83791 7.29048 9.77557 7.26748 9.69668C7.18576 9.41632 7.24446 9.07207 7.41447 8.83464C7.46231 8.76782 7.51947 8.71067 7.63378 8.59636C7.98338 8.24675 8.15819 8.07195 8.27247 7.89617C8.70347 7.23328 8.70347 6.3787 8.27247 5.71581C8.15819 5.54003 7.98338 5.36523 7.63378 5.01562L7.43891 4.82075C6.90747 4.28931 6.64174 4.02359 6.35636 3.87924C5.7888 3.59217 5.11854 3.59217 4.55098 3.87924C4.2656 4.02359 3.99987 4.28931 3.46843 4.82075L3.3108 4.97838C2.78117 5.50801 2.51636 5.77282 2.31411 6.13285C2.08969 6.53236 1.92833 7.15285 1.9297 7.61107C1.93092 8.02402 2.01103 8.30624 2.17124 8.87069C3.03221 11.9041 4.65668 14.7664 7.04466 17.1544C9.43264 19.5424 12.295 21.1669 15.3284 22.0278C15.8928 22.1881 16.1751 22.2682 16.588 22.2694C17.0462 22.2708 17.6667 22.1094 18.0662 21.885C18.4263 21.6827 18.6911 21.4179 19.2207 20.8883L19.3783 20.7307C19.9098 20.1992 20.1755 19.9335 20.3198 19.6481C20.6069 19.0805 20.6069 18.4103 20.3198 17.8427C20.1755 17.5573 19.9098 17.2916 19.3783 16.7602L19.1835 16.5653C18.8339 16.2157 18.6591 16.0409 18.4833 15.9266C17.8204 15.4956 16.9658 15.4956 16.3029 15.9266C16.1271 16.0409 15.9523 16.2157 15.6027 16.5653C15.4884 16.6796 15.4313 16.7368 15.3644 16.7846C15.127 16.9546 14.7828 17.0133 14.5024 16.9316C14.4235 16.9086 14.3612 16.8787 14.2365 16.8188C12.7869 16.1228 11.4282 15.174 10.2266 13.9724Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                          </a> 
                        <?php } ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
                
            </div>
            <!-- end of content-img -->
        </div>
    </section>
    <?php } ?>
    <?php if(have_rows('our_practices')){ ?>
      <section class="accordion-module">
          <div class="container">
            
              <div class="accordion-main">
              <?php while( have_rows('our_practices') ): the_row(); 
								$practice_area_heading 	= get_sub_field('practice_area_heading');
                $practice_area_description     = get_sub_field('practice_area_description');
                $practice_area_link_text 	= get_sub_field('practice_area_link_text');
                $practice_area_link     = get_sub_field('practice_area_link');
								if(!empty($practice_area_heading && $practice_area_description)){
								?>
                  <div class="accordion">
                    <div class="accordion-item"> 
                      <a class="accordion-heading"><span class="title"><?php echo $practice_area_heading; ?></span> </a>
                      <div class="content">
                        <?php echo $practice_area_description; 
                        if(!empty($practice_area_link_text && $practice_area_link)){
                        ?>
                          <a href="<?php echo $practice_area_link; ?>" class="readmore"><?php echo $practice_area_link_text; ?></a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
               <?php } endwhile; wp_reset_postdata(); ?>
              </div>
              <!-- end of faq main -->

          </div>
      </section>
    <?php } ?>
</section>
<?php } ?>

<section class="sec-wrap">
        <div class="background-bg">
      <picture class="object-fit">
        <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/home-insights@2x.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insight-wrap-bg-mobile@2x.jpg" alt="Recent Insights Background" title="Recent Insights Background"> </picture>
    </div>
  <?php echo get_recent_insight();

  echo get_request_free_consultation(); ?>
</section>

<?php echo get_have_questions(); ?>
<?php get_footer(); ?>