<li class="flex pages-list-item">
  <a href="/salesforce/case/detail.php?id=<?php the_ID(); ?>" class="pages-list-item__link">
    <?php if (get_field('user_img_1')) {
      echo '<img src="'. get_field('user_img_1') .'" class="pages-list-item__img">';
    } else {
      echo '<img src="/case/common/img/no_image.png" class="pages-list-item__img">';
    }
    ?>
  </a>
  <div class="pages-list-item__desc">
    <h4 class="pages-list-item__desc-ttl"><a href="/salesforce/case/detail.php?id=<?php the_ID(); ?>" class="slide-under-line pages-list-item__desc-ttl-link"><span class="pages-list-item__desc-ttl-sub-ttl"><?php the_field('type'); ?></span><br><?php the_title(); ?></a></h4>
    <p class="pages-list-item__desc-txt"><?php the_field('lead'); ?></p>
    <a href="/salesforce/case/detail.php?id=<?php the_ID(); ?>" class="slide-under-line-2 pages__more-btn">もっと詳しく</a>
  </div>
</li>