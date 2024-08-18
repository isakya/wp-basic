<?php get_header(); ?>

<?php
$lastBlog = new WP_Query('type=post&posts_per_page=1');
if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
endif;

wp_reset_postdata();
?>

    <hr/>

<?php
if (have_posts()):
    while (have_posts()): the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
endif;

$args = array(
    'type' => 'post',
    'posts_per_page' => 2,
    'offset' => 1,
);
$lastBlog = new WP_Query($args);
if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
endif;

wp_reset_postdata();
?>

    <hr/>

<?php
$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=news');
if ($lastBlog->have_posts()):
    while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile;
endif;

wp_reset_postdata();
?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>