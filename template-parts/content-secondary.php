<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 28/01/2019
 * Time: 00:28
 */
?>

<article <?php post_class(array('class'=> 'secondary')); ?>>

    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class'=> 'img-fluid')); ?></a>
    </div>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="meta-info">
        <p>
            by <span><?php the_author_link(); ?></span>
            Catedories: <span><?php the_category( ' ' ); ?></span>
            <?php the_tags( 'Tags: <span>', ' , ' , '</span>'); ?>
        </p>

    </div>
    <?php the_excerpt(); ?>
</article>
