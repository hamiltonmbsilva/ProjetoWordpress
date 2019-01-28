<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 28/01/2019
 * Time: 12:00
 */
?>

<article <?php post_class(); ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="meta-info">
        <p> by <?php the_author_link(); ?></p>

        <?php if ( has_category()): ?>
        <p>Catedories: <?php the_category( ' ' ); ?></p>
        <?php endif; ?>

        <p><?php the_tags( 'Tags: ', ' , '); ?></p>
    </div>
    <?php the_excerpt(); ?>
</article>