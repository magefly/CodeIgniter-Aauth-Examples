<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeIgniter-Aauth-Examples - Welcome</title>
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
            <li class="active"><a href="<?=site_url()?>/">Home</a></li>
           <?php if( !$this->aauth->is_loggedin() ) { ?>
            <li><a href="<?=site_url()?>/account/sign_in">Sign In</a></li>
            <li><a href="<?=site_url()?>/account/sign_up">Sign Up</a></li>
          <?php } ?>
          <?php if( $this->aauth->is_loggedin() ) { ?>
            <li><a href="<?=site_url()?>/account/dashboard">Dashboard</a></li>
            <li><a href="<?=site_url()?>/account/sign_out">Sign Out</a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container container-with-navbar">
        <h1>CodeIgniter-Aauth-Examples<br /> <small>simple / separate controllers</small></h1>
        <p class="lead">This Example contains:</p>
        <div class="row">
          <div class="col-sm-6">
            <p><b>6</b> Views<br />
              <ul>
                <li>dashboard</li>
                <li>sign_in</li>
                <li>sign_up</li>
                <li>welcome</li>
                <li>remind_password</li>
                <li>reset_password</li>
              </ul>
            </p>
          </div>
          <div class="col-sm-6">
            <p><b>2</b> Controllers<br />
              <ul>
                <li>Account</li>
                <li>Welcome</li>
              </ul>
            </p>
          </div>
          <div class="col-sm-6">
            <p><b>2</b> Config Files<br />
              <ul>
                <li>autoload</li>
                <li>routes</li>
              </ul>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p><b>1</b> Third Party Package</br>
              <ul>
                <li>aauth - Version 2.2.0 <a href="https://github.com/emreakay/CodeIgniter-Aauth/archive/v2.2.0.zip"><span class="badge">zip</span></a> <a href="https://github.com/emreakay/CodeIgniter-Aauth/archive/v2.2.0.tar.gz"><span class="badge">.tar.gz</span></a></li>
              </ul>
            </p>
          </div>
          <div class="col-sm-6">
            <p><b>1</b> Asset<br />
              <ul>
                <li>css/style.css</li>
              </ul>
            </p>
          </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>