<li class="news-list__item">
  <dl class="flex news-list__define-list">
    <dt class="news-list__date"><?php the_time("Y年n月j日"); ?></dt>
    <dd class="news-list__ttl">
      <?php $link_url = get_field('file') ? get_field('file') : get_field('link_url'); ?>
      <?php if ($link_url) { ?>
        <a href="<?php echo $link_url; ?>" target="<?php echo get_field('target'); ?>" class="news-list__ttl-link"><?php the_title(); ?></a>
      <?php } else { ?>
        <?php the_title(); ?>
      <?php } ?>
    </dd>
  </dl>
</li>