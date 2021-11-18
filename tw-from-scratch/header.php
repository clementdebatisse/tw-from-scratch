<!DOCTYPE html>
<html>

    <head>

        <?php wp_head();?>

    </head>

<body <?php body_class();?> >

<nav class="navbar navbar-light bg-light">

    <span class="navbar-brand mb-0 h1">

            <?php wp_nav_menu (

                    array(

                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation'
                        
                    )

                );?>

    </span></nav>

    </div>

</header>