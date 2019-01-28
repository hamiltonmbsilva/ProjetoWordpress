<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 28/01/2019
 * Time: 11:02
 */
?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
     width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
    <main>

        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="error-404">

                        <header>
                            <h1> Page not found</h1>
                            <p>Unfortunately, the page you tried to reach does not exist on this site!</p>
                        </header>
                        <div class="error">
                            <p>How about doing a search?</p>
                            <?php get_search_form(); ?>
                            <?php the_widget('WP_Widget_Recent_Posts', array('title'=> 'Latest Post',
                                'number' => 3)); ?>
                        </div>
                    </div>
            </div>
        </section>

    </main>
</div>
<?php get_footer(); ?>
