<?php
/*
Template Name: スライダー
*/
?>
          <div class="subpage__slick js-subpage__slick subpage-slick">
            <?php if(have_rows('slide_area')): ?>
              <?php while(have_rows('slide_area')): the_row(); ?>
              <?php the_sub_field('sub_field_name'); ?>

              <div class="subpage-slick__item"><img src="<?php the_sub_field('slide_img'); ?>" alt="<?php the_sub_field('slide_text'); ?>">
                <p class="subpage-slick__text"><?php the_sub_field('slide_text'); ?></p>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
