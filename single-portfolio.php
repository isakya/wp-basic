<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            <?php if (has_post_thumbnail()): ?>
                <div class="pull-right"><?php the_post_thumbnail('thumbnail'); ?></div>
            <?php endif; ?>

            <small>
                <?php
                    // 获取自定义分类
                    echo izumi_get_terms(get_the_ID(),'field');
                ?>
                    ||
                <?php
                    echo izumi_get_terms(get_the_ID(),'software');
                ?>

                <?php
                    // 判断当前用户权限
                    if( current_user_can('manage_options') ) {
                        echo '|| ';  edit_post_link();
                    }
                ?>
            </small>

            <?php the_content(); ?>

            <hr>

            <div class="col-xs-6 text-left">
                <?php previous_post_link(); ?>
            </div>
            <div class="col-xs-6 text-right">
                <?php next_post_link(); ?>
            </div>
        </article>

    <?php endwhile;
endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>