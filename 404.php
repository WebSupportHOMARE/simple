<?php get_header(); ?>

<main>
  <section class="notFound mw">
    <h2 class="notFound__ttl">404 Not Found</h2>

    <p class="notFound__text">指定された以下のページは存在しないか、または移動した可能性があります。</p>

    <p class="notFound__url"><?php echo get_pagenum_link(); ?></p>
  </section>
</main>

<?php get_footer();
