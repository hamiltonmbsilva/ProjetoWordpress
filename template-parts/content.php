<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 26/01/2019
 * Time: 15:21
 */
?>

<article <?php post_class(); ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail(array(275,275)); ?>
        <div class="meta-info">
            <p>Published in <?php echo get_the_date(); ?> by <?php the_author_link(); ?></p>
            <p>Catedories: <?php the_category( ' ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ' , '); ?></p>
        </div>
    <?php the_content(); ?>
</article>
