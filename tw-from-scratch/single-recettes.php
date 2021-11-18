<?php get_header();?>

<div class="container pt-5 pd-5">

    <h1><?php the_title();?></h1>

    <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url( 'smallest' );?>" class="img-fluid">

    <?php endif;?>

    <div class="row">
        
        <div class="col pt-5">

            <?php if (have_posts(  )) : while(have_posts(  )) : the_post(  );?>

                <?php the_content();?>

            <?php endwhile; endif;?>


<!-- Je commence ici à display les custom fields crées grâce au plugin ACF 
Tout d'abord, je stocke dans des variables les données pour avoir un code plus propre -->

<?php

$liste = get_field('liste_des_ingredients');
$cuisson = get_field('temps_de_cuisson');
$etapes = get_field('etapes');

?>

<!-- Puis j'echo le contenu des variables, avec une sécurité pour que le code n'affiche rien si l'utilisateur n'a pas rempli le champ -->

<?php if($liste):?>
    <h2>Liste des ingrédients : </h2><br />
    <?php echo $liste;?>
<?php endif;?><br />

<?php if($cuisson):?>
    <h4>Temps de cuisson : </h4>
    <?php echo $cuisson;?><br />
<?php endif;?><br />

<?php if($etapes):?>
    <h3>Etapes : </h3><br />
    <?php echo $etapes;?><br />
<?php endif;?>

        </div>

    </div>

</div>

<?php get_footer();?>