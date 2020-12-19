<?php foreach ($GLOBALS as $key => $value) {${$key}=$value;}; $_all = $GLOBALS; ?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Webrium</title>

    <style media="screen">
    .center{
      text-align:center;
      padding: 30px;
    }
    .center>div{
      margin-top:15px;
    }
    </style>

  </head>
  <body>
    <div class="center">
      <div class="">
        <strong>Hello World</strong>
      </div>
      <div class="">
        <!-- <strong> <?= url( 'hello'.input('u', ('') ) ); ?> </strong> -->
        <div class="">
          <?php echo htmlspecialchars(''.$sd); ?>


          <?php echo htmlspecialchars(''.$sd2); ?>


          <?php echo htmlspecialchars(''.$sd3); ?>
        </div>
      </div>
    </div>

  </body>
</html>
