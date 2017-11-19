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
  <br />
  <br />
  <br />
  <a href="#scrolltotext"><button class="seetext" id="triggerbtn2">See Text Version!</button></a>

  <script>
  			window.addEventListener('DOMContentLoaded',function(){
  				new ModalVideo(".js-video-vimeo-btn",{channel:'vimeo'});
  			});
  			</script>
<br /><br /><br />
  <a class="arrow" href="#contact"><span class="arrow har glyphicon glyphicon-circle-arrow-down"  ></span></a>
</center>
</div>

<div class="textVersion" id="scrolltotext">
    <div class="container">
    <h1 align="center">Welcome to Codingforkids.us!</h1>
    <hr />
<p>

If you're reading this, it's because you've found one of our ads on Facebook, or I have personally reached out to you because I've enjoyed working with you or your child in the past.
</p>

<p>
If you're the parent of a child that has taken one of my classes, that means that your child excelled in my course, and I believe that if they keep on learning how to code, they will develop a set of highly marketable career skills in the modern world. I chose not to contact everyone so if you're here you were specifically chosen.
</p>
<p>
First of all, Who am I? My name is Joe Rezendes, my students know me as Mr. Joe.
</p>
<p>
First and foremost, I'm curious person. I have a drive to learn how to world around me works.
</p>
<p>
Secondly, I am a Musician. I am a professional trombone player that plays all around the East Bay playing funk, jazz, and orchestrial music.
</p>
<p>
Third, I'm a teacher. By the time I was out of highschool I had taught over 150 of my peers how to march in a marching band, and had developed a 6 week long seminar on leadership skills to train my replacements.
</p>
<p>
Lastly, I am a web developer and digital marketer. I've been in the digital marketing space for two years and have worked with clients all over the Bay Area.
</p>
<p>
I've built websites for community groups, local businesses, causes, events, and more. I have several personal webpages that I update every week, each with it's own following.
</p>
<p>
I've worked with philosophical authors such as Marty Leeds to create different web tools that help them with their work.
</p>
<p>
I specialize in Front-End Web Development, and for the last few years I've taught over 50 kids in the 4th and 5th grade how to code basic html and css.
</p>
<p>
Throughout this process I learned many things, but to me, the most important thing was that as my class sizes increased, the level of attention I was able to give my students decreased.
</p>
<p>
The students in the smallest classes were always able to get the most amount done.
</p>
<p>
Because of this, I am now starting individual lessons and one on one learning.
</p>
<p>
If your child is excited about learning how to create websites, or if you want to give your child an oppertunity to create a stable future for themselves then this is the program for you.
</p>
<p>
These one on one sessions are highly individualized - and that's the way learning web development should be. Students in this program will be creating modern websites about subjects they're interested in, and they will learn how to market them to a world wide audience.
</p>
<p>
The coding languages and libraries I will be covering are Html 5, CSS 3, Jquery, Jquery UI, Bootstrap, Javascript, Reactjs, Git, commandline, NPM, and more!
</p>
<p>
These are the languages that the modern web runs on today. My curriculum is always up to date with the latest and greatest technology.
</p>
<p>
The starting salary for a Junior front end web-developer is 52,482, and the median income for experienced front-end developers is 84,806.
</p>
<p>
If you're interested in preparing your child for the future, or if you'd simply like to learn more, please either fill out the contact form below, or call/text me at the number provided below.
</p>

    </div>
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
