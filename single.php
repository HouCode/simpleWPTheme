<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h1> <?php the_title(); ?> </h1>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large') ?>" class="img-fluid"/>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

                <?php the_content(); ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1></h1>
</div>

<?php get_footer(); ?>