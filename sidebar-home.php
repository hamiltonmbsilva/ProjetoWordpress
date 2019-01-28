<?php
/**
 * Created by PhpStorm.
 * User: Hamilton
 * Date: 27/01/2019
 * Time: 22:53
 */
?>

<?php if(is_active_sidebar('sidebar-1')): ?>
    <aside class="sidebar col-md-4 h-100">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
<?php endif; ?>


