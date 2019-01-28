<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Curso Wordepress</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="social-media-icons col-xl-4 col-sm-4 col-4">Icones Sociais</div>
                <div class="search col-xl-4 col-sm-4 col-4 text-right">Pesquisa</div>
                <div class="login-topo col-xl-2 col-sm-2 col-2 text-right"><a href="/aula/wp-content/themes/projetoWordpress/admin/login.php">Login</a></div>
                <div class="cadastrar col-xl-2 col-sm-2 col-2 text-right"><a href="/aula/wp-content/themes/projetoWordpress/admin/users-create.php">Cadastrar Usuario</a></div>
            </div>
        </div>

    </section>
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <section class="logo col-md-2 col-12 text-center">Logo</section>
                <nav class="main-menu col-md-10 text-right">
                    <?php wp_nav_menu(
                            array(
                                    'theme_location' => 'my_main_menu')); ?>
                </nav>
            </div>
        </div>

    </section>
</header>