<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php 
        $subtitulo = get_field('subtitulo');
        if ($subtitulo) : ?>
            <p><strong><?php echo esc_html($subtitulo); ?></strong></p>
        <?php endif; ?>
        
        <p><?php the_excerpt(); ?></p>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>