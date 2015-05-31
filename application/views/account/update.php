<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeIgniter-Aauth-Examples - Update Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=site_url()?>">CodeIgniter-Aauth-Examples</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=site_url()?>/">Home</a></li>
            <li><a href="<?=site_url()?>/account/dashboard">Dashboard</a></li>
            <li class="active"><a href="<?=site_url()?>/account/update">Update Profile</a></li>
            <li><a href="<?=site_url()?>/account/sign_out">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <?php $user = $this->aauth->get_user(); ?>
    <div class="container container-with-navbar">
      <h1 class="col-sm-offset-2">Update Profile</h1>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
          <label class="col-sm-2 control-label">current Email</label>
          <div class="col-sm-10">
            <?=$user->email?>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">new Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">current Username</label>
          <div class="col-sm-10">
            <?=$user->name?>
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">new Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">update</button>
          </div>
        </div>
      </form>
      <?php foreach ($this->aauth->get_errors_array() as $error){ ?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error; ?>
        </div>
      <?php } ?>

      <?php foreach ($this->aauth->get_infos_array() as $info){ ?>
        <div class="alert alert-success" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $info; ?>
        </div>
      <?php } ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>