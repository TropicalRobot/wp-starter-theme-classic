<?php
/*
Template Name: Custom Layout
*/
?>

<?php get_template_part('templates/partials/header'); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><?php the_title(); ?></h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
    <?php endwhile;
    endif; ?>
</main>

<?php get_template_part('templates/partials/footer'); ?>