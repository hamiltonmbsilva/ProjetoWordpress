<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 26/01/2019
 * Time: 13:59
 */

/* Template Name: Geral Template*/
?>

<?php get_header(); ?>
<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                    <div class="general-template">
                        <?php
                        //Se houver algum post
                        if (have_posts()):
                            //Enquanto houver podsts, mostre-os para gente
                            while (have_posts()):the_post();
                                ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>

                                    <?php the_content(); ?>
                                </article>
                            <?php
                            endwhile;
                        else:
                            ?>
                            <p>There's nothing yet to be displayed ... </p>
                        <?php endif; ?>

                    </div>

            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>

