<?php

// start of testimonials
echo '<section class="" style="background:#1d4559;padding:50px 0px;" id="testimonials">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

// echo '<div class="col-12 text-center pb-4">';
// echo '<h3 class="text-white">' . get_field('testimonials_title') . '</h3>';
// echo '</div>';

echo '<div class="testimonial-carousel owl-carousel owl-theme">';
// start of repeater

if(have_rows('testimonials')): 
$counterTestimonials = 0; 
while(have_rows('testimonials')): the_row(); $counterTestimonials++;

echo '<div class="col col-reviews" data-aos="fade-up" data-aos-delay="' . $counterTestimonials . '00">';

echo '<div class="row">';

echo '<div class="col-1">';

// echo '<span class="h1 text-gray" style="font-family: cursive;">"</span>';

echo '</div>';

echo '<div class="col-11">';

echo '<span class="text-gray quotes-testimonial" style="font-size:3rem;">"</span>';

echo '<div class="position-relative text-gray">';

echo '<small>' . get_sub_field('content') . '</small>';

echo '<div class="row align-items-center">';
echo '<div class="col-3">';

$headshot = get_sub_field('headshot'); 
echo wp_get_attachment_image($headshot['id'],'full','',[
    'class'=>'bg-img img-testimonial'
]);

echo '</div>';
echo '<div class="col-9">';
echo '<span class="name text-uppercase text-white">' . get_sub_field('name') . '</span><br>';
echo '<span class="industry text-white"><small>' . get_sub_field('title') . '</small></span>';

echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

echo '</div>';
endwhile; 
endif;
// end of repeater -->
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

?>