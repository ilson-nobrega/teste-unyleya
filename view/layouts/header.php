<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo NAME; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo COMPONENTS_PATH; ?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo COMPONENTS_PATH; ?>/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo PUBLIC_PATH; ?>/css/global.css" rel="stylesheet">
    <link href="<?php echo PUBLIC_PATH; ?>/css/validationEngine.jquery.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo COMPONENTS_PATH; ?>/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo COMPONENTS_PATH; ?>/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Validation Engine -->
    <script src="<?php echo PUBLIC_PATH; ?>/js/jquery.validationEngine-pt_BR.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo PUBLIC_PATH; ?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

