<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content();?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sapiente reiciendis, nihil reprehenderit quasi pariatur? Officia harum at iste velit mollitia. Id voluptates asperiores repellat hic dolorum deleniti numquam eligendi.</p>
    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer();?>