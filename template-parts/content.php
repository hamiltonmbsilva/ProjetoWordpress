<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 26/01/2019
 * Time: 15:21
 */?>

<article>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(array(275,275)); ?>
    <p>Published in <?php echo get_the_date(); ?> by <?php the_author_link(); ?></p>
    <p>Catedories: <?php the_category( ' ' ); ?></p>
    <p><?php the_tags( 'Tags: ', ' , '); ?></p>
    <?php the_content(); ?>
</article>
