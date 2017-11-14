<head>
  <title>Coding For Kids Lessons</title>

  <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

  <script src="jquery.ui.touch-punch.min.js"></script>


  <link rel="stylesheet" type="text/css" href="reset.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

  <link rel="stylesheet" type="text/css" href="animate.css" />

  <link rel="stylesheet" type="text/css" href="appleple-modal-video-a7aec1d\css\modal-video.min.css">

  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"/>



  <link rel="stylesheet" type="text/css" href="style.css" />


</head>
<body>

  <script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

  <script src="jquery.ui.touch-punch.min.js"></script>
  <script src="scripts.js"></script>
<div class="hero">
<center>
  <img class="animated pulse infinite logo" src="CODINGFORKIDS.png" />
  <br />
  <button class="learnMore js-modal-btn js-video-vimeo-btn" data-video-id="242317449" id="triggerbtn">Learn More!</button>
  <script>
  			window.addEventListener('DOMContentLoaded',function(){
  				new ModalVideo(".js-video-vimeo-btn",{channel:'vimeo'});
  			});
  			</script>
<br /><br /><br />
  <a class="arrow" href="#contact"><span class="arrow har glyphicon glyphicon-circle-arrow-down"  ></span></a>
</center>
</div>





<div class="contactarea">
  <div class="footback" id="contact">
    <h1 class="contitle" align="center">If you're interested in Private Coding Lessons fill out the form below</h1>
    <h3 align="center">
      Or Call/Text 925-963-2019
    </h3>
  <br />

  <br />


    <?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Coding Lessons Form';
    $to = 'rezendesjoey@gmail.com';
    $subject = 'Private Tutor Message From Website';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }

  // If there are no errors, send the email
  if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will contact you soon.</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
  }
  }
  }
  ?>





  <form class="form-horizontal" role="form" method="post" action="index.php" style="margin-right: 10%; margin-bottom: 0; margin-left: 1%;">
  	<div class="form-group">
  		<label for="name" class="col-sm-2 control-label"><span class="glyphicon glyphicon-user"></span> Name</label>
  		<div class="col-sm-10">
  			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
  			<?php echo "<p class='text-danger'>$errName</p>";?>
  		</div>
  	</div>
  	<div class="form-group">
  		<label for="email" class="col-sm-2 control-label"><span class="glyphicon glyphicon-envelope"></span> Email</label>
  		<div class="col-sm-10">
  			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
  			<?php echo "<p class='text-danger'>$errEmail</p>";?>
  		</div>
  	</div>
  	<div class="form-group">
  		<label for="message" class="col-sm-2 control-label"><span class="glyphicon glyphicon-edit"></span> Message</label>
  		<div class="col-sm-10">
  			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
  			<?php echo "<p class='text-danger'>$errMessage</p>";?>
  		</div>
  	</div>
  	<div class="form-group">
  		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
  		<div class="col-sm-10">
  			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
  			<?php echo "<p class='text-danger'>$errHuman</p>";?>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-10 col-sm-offset-2">
  			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-10 col-sm-offset-2">
  			<?php echo $result; ?>
  		</div>
  	</div>
  </form>


  </div>
</div>

</div>





  <script src="appleple-modal-video-a7aec1d\js\modal-video.js"></script>
  <script src="notify.min.js"></script>
  <script src="../scroll.js"></script>

</body>
