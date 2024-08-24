<?php get_header(); ?>
    <?php
        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
        echo $currentPage;
        $args = array('posts_per_page' => 3, 'paged' => $currentPage); // 覆盖后台设置的每页展示博客条数
        query_posts($args);

        if(have_posts()):
            while (have_posts()): the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>

            <div class="col-xs-6 text-left">
                <?php next_posts_link('<< (++ link page num) Older Posts') ?>
            </div>
            <div class="col-xs-6 text-right">
                <?php previous_posts_link('Newer Posts (-- lnk page num) >>') ?>
            </div>

        <?php endif;
        wp_reset_query();
    ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>