
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Sekolah</title>

  <link rel="stylesheet" href="<?php echo base_url('assets/flat/css/reset.min.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/flat/css/roboto.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/flat/css/montserrat.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/flat/css/font-awesome.min.css');?>"/>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/cssstyle.css');?>"/>


</head>

<body>


  <div class="container">
    <div class="info">
      <h1>SMP N 12 YOGYAKARTA</h1>
    </div>
  </div>
  <div class="form">
    <img src="<?php echo base_url('assets/images/J.png');?>" width="100%"/>
    <br><br>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="<?php echo base_url('auth/login')?>" method="post">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button>Login</button>
    </form>
  </div>
  <video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
    <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
  </video>
  <script src='<?php echo base_url('assets/js/jquery.min.js');?>'></script>


  <script  src="<?php echo base_url('assets/js/index.js');?>"></script>




</body>

</html>
