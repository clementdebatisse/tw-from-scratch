<?php get_header();?>

<div class="container pt-5 pd-5">

    <h1><?php the_title();?></h1>

    <div class="row">
        
        <div class="col pt-5">

            <?php if (have_posts(  )) : while(have_posts(  )) : the_post(  );?>

                <?php the_content();?>

            <?php endwhile; endif;?>

        </div>

        <div class="col pt-5">

            Côté droit

        </div>

    </div>

</div>

<?php get_footer();?>