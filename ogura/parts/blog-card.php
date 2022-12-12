<?php
/*
Template Name: ブログカード
*/
?>

<a class="blog-card card-list__item" href="<?php the_permalink(); ?>">
  <?php
    $post_time = get_the_time('U');
    $days = 7; //Newを表示させる日数
    $last = time() - ($days * 24 * 60 * 60);
  ?>
  <?php if ($post_time > $last) : ?>
  <div class="blog-card__new">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new-icon.png" alt="">
  </div>
  <?php endif;?>

  <?php
    if ( has_post_thumbnail() ){
      $thumbID = get_post_thumbnail_id( $post->ID );
      $image_info=wp_get_attachment_image_src($thumbID, 'full');
      $image_width = $image_info[1];
      $image_height = $image_info[2];
      if(is_numeric($image_width) && $image_width != 0){
        $image_ratio = $image_height / $image_width * 100;
      }
      // 9:16(56.25%) から 3:4 (75%)　程度のサイズであればCOVERとし、それ以外はcontainとする
      if($image_ratio >= 53 && $image_ratio <= 76){
        $class_name ='cover';
      }else{
        $class_name ='contain';
      }
    }else{
      $class_name ='cover';
    }
?>
  <figure class="blog-card__img <?php echo $class_name; ?>">

  <img src="<?php
    if (has_post_thumbnail()):
      $thumbID = get_post_thumbnail_id( $post->ID );
      $thumbAlt = get_post_meta( $thumbID, '_wp_attachment_image_alt', true );
      the_post_thumbnail_url('full'); 
    else :
      echo 'https://yuparu-nojiri.com/wp/wp-content/uploads/2022/04/thumbnail.jpg';
      $thumbAlt = "ゆ〜ぱるのじり";
    endif;
    ?>" alt="<?php echo $thumbAlt;?>">
    </figure>
    
  <div class="blog-card__body">
    <h3 class="blog-card__title"><?php my_trim(get_the_title(), 18); ?></h3>
    <div class="blog-card__info">
      <time class="blog-card__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time("Y.m.d"); ?></time>
      <?php if(!is_page('recruit')): ?>
        <span class="blog-card__author"><?php the_author_meta('nickname'); ?></span>
      <?php endif; ?>
    </div>
  </div>
  <?php
      if(is_front_page() || is_tag() || is_search() || (is_archive() && !is_category())):
      // カテゴリーのデータを取得
      $cat = get_the_category();
      $cat = $cat[0];
  ?>
      <div class="blog-card__foot">
        <span class="blog-card__text"><?php echo $cat->cat_name; ?></span>
      </div>
  <?php endif; ?>
</a>

