<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 27/01/2019
 * Time: 22:53
 */
?>

<?php if(is_active_sidebar('sidebar-2')): ?>

    <aside class="sidebar col-md-4 h-100">
        <?php  get_search_form(); ?>
        <?php dynamic_sidebar('sidebar-2'); ?>
    </aside>
<?php endif; ?>
