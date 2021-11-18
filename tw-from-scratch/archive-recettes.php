<?php get_header();?>

    <h1><?php single_cat_title();?></h1>

    <div class="row">

    <?php if (have_posts(  )) : while(have_posts(  )) : the_post(  );?>
        
        <div class="col sm-6">

                <div class="card mb-4 mt-4 " style="width: 32rem;">
                    <div class="card-body ">

                        <?php if(has_post_thumbnail()):?>

                            <img src="<?php the_post_thumbnail_url( 'smallest' );?>" class="card-img-top">

                        <?php endif;?>
                        <h1><?php the_field('titre_de_la_recette');?><br /></h1>
                        <?php the_field('description');?><br /><br />
                        <a href="<?php the_permalink();?>" class="btn btn-success">En savoir plus</a>
                        

                    </div>
                    
                </div>
                
            <?php endwhile; endif;?>

<?php get_footer();?>