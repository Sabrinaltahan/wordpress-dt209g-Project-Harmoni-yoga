<?php get_header(); ?>

<main class="single-page team-single">
  <div class="container">

    <?php while ( have_posts() ) : the_post(); ?>

      <article class="team-profile">

        <?php the_post_thumbnail('medium'); ?>

        <h1><?php the_title(); ?></h1>

        <div class="content">
          <?php the_content(); ?>
        </div>

        <a href="<?php echo site_url('/team'); ?>" class="btn">
          ← Back to Team
        </a>

      </article>

    <?php endwhile; ?>

  </div>
</main>

<?php get_footer(); ?>