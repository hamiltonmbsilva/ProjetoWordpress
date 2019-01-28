<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 28/01/2019
 * Time: 00:28
 */
?>

<article <?php post_class(array('class'=> 'secondary')); ?>>

    <h2><?php the_title(); ?></h2>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', array('class'=> 'img-fluid')); ?>
    </div>

    <div class="meta-info">
        <p>
            by <span><?php the_author_link(); ?></span>
            Catedories: <span><?php the_category( ' ' ); ?></span>
            <?php the_tags( 'Tags: <span>', ' , ' , '</span>'); ?>
        </p>

    </div>
    <?php the_excerpt(); ?>
</article>
