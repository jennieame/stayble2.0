<?php get_header(); ?>
<section id="content" role="main">
<div class="wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="post" class="post">
<?php get_template_part( 'entry' ); ?>
</div>
<?//php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</div>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>