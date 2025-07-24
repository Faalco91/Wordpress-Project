<?php
get_header();
?>
<main class="blog-main-container">
  <aside class="blog-sidebar">
    <!-- Recherche -->
    <section class="blog-search">
      <?php get_search_form(); ?>
    </section>
    <!-- Articles récents -->
    <section class="blog-recent-posts">
      <h3>Recent posts</h3>
      <ul>
        <?php
        $recent_posts = wp_get_recent_posts(array('numberposts' => 4));
        foreach($recent_posts as $post) : ?>
          <li>
            <a href="<?php echo get_permalink($post['ID']); ?>">
              <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>
              <?php echo esc_html($post['post_title']); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
    <!-- Archives -->
    <section class="blog-archives">
      <h3>Archives</h3>
      <ul>
        <?php wp_get_archives(); ?>
      </ul>
    </section>
    <!-- Catégories -->
    <section class="blog-categories">
      <h3>Categories</h3>
      <ul>
        <?php wp_list_categories(array('title_li' => '')); ?>
      </ul>
    </section>
    <!-- Tags -->
    <section class="blog-tags">
      <h3>Tags</h3>
      <div>
        <?php wp_tag_cloud(); ?>
      </div>
    </section>
  </aside>
  <section class="blog-posts">
    <h1 class="blog-title">Blog.</h1>
    <div class="blog-posts-grid">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="blog-post">
          <a href="<?php the_permalink(); ?>">
            <div class="blog-post-thumbnail">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
              } ?>
              <span class="blog-post-category"><?php the_category(' '); ?></span>
            </div>
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <div class="blog-post-excerpt"><?php the_excerpt(); ?></div>
          </a>
        </article>
      <?php endwhile; else : ?>
        <p>Aucun article trouvé.</p>
      <?php endif; ?>
    </div>
    <div class="blog-pagination">
      <?php the_posts_pagination(); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?> 