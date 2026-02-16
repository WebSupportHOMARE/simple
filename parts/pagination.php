<?php
global $wp_query;

the_posts_pagination(
  array(
    'base' => get_pagenum_link(1) . '%_%',
    'format' => 'page/%#%',
    'current' => max(1, $paged),
    'total' => $wp_query->max_num_pages,
    'mid_size' => 2,
    'prev_next' => true,
    'prev_text' => '<i class="nextPrev prev__btn"></i>',
    'next_text' => '<i class="nextPrev next__btn"></i>',
    'screen_reader_text' => ' ',
    'type' => 'list',
  )
);
