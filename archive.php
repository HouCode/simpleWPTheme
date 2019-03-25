<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <h1> <?php single_cat_title() ?> </h1>
        </div>
        <div class="col-xs-12 col-md-6">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                <div class="card mb-4">
                    <div class="card-body">

                        <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('small') ?>" class="img-fluid"/>
            <?php endif; ?>

                        <h3> <?php the_title() ?> </h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-success"> Read More </a>
                    </div>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1></h1>
</div>

<?php get_footer(); ?>