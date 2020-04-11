<!DOCTYPE html>
<html lang="en-us">
<?php
error_reporting(0);
include('includes/config.php');

?>
  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>BloodBank & Donor Management System | Become A Donar</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/modern-business.css" rel="stylesheet">
        <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }
        </style>
            <style>
        .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }


    div.a1 {

      margin-left: 12%;
      margin-top:5%;
      margin-right: 12%;
      width: 76%;

      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    div.header {
      background-color: #F5FFFA;

      padding-top: 10px;
      height: 1300px;
      font-size: 20px;
    }

    #tx1{
    margin-top: 7%;

    }
    #gs{
      margin-top: 3%;
      margin-left: 6%;
      margin-right: 3%;
    }
</style>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Cubedge</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>
    <script src="Build/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build/windowsbuild.json", {onProgress: UnityProgress});
    </script>
  </head>

  <body>
    
<br><br><br>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px" style="margin-top:50%;"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Cubedge</div>
      </div>
    </div>


  </body>
</html>
