<?php
require 'config.php';
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){

if (isset($_POST["submit"])) {

    $titulo = addslashes($_POST['titulo']);
    $comentario = addslashes($_POST['texto']);


    $sql = "INSERT INTO wpaula_posts SET post_title ='$titulo', post_content = '$comentario' ";

    $db->query($sql);

}

}else{
    header("Location: login.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="res/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="res/admin/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="res/admin/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Novo Post</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form  method="post" action="http://localhost/aula/wp-admin/post.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo">Titulo do Post</label>
                            <input type="text" class="form-control" name="titulo" placeholder="Digite o Titulo do Post">
                        </div>
                        <div class="form-group">
                            <label for="texto">Texto</label>
                            <textarea  class="form-control"  name="texto" maxlength="2500" rows="7" placeholder="Digite o texto"></textarea>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>

<!--                    <input type="submit"  name="submit" id="botao" value="Enviar" onclick="hgsubmit()" />-->
                </form>
            </div>
        </div>
    </div>




</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</body>
</html>
