<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h1><?php the_title(); ?></h1>

        <?php 
        $subtitulo = get_field('subtitulo');
        if ($subtitulo) : ?>
            <p><em><strong>Subtítulo:</strong> <?php echo esc_html($subtitulo); ?></em></p>
        <?php endif; ?>

        <?php if (has_post_thumbnail()) : ?>
            <div style="margin: 20px 0;">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <div><?php the_content(); ?></div>

        <p style="margin-top:30px;">
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">← Volver al blog</a>
        </p>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
