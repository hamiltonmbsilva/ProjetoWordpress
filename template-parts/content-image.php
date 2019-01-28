<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 27/01/2019
 * Time: 20:48
 */
?>

<article <?php post_class(); ?>>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,275)); ?></a>
        <div class="meta-info">
            <p> by <?php the_author_link(); ?></p>
            <p>Catedories: <?php the_category( ' ' ); ?></p>
            <p><?php the_tags( 'Tags: ', ' , '); ?></p>
        </div>
    <?php the_content(); ?>
</article>
