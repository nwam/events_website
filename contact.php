<!DOCTYPE html>
<html lang="en">
<?php $thisPage="Contact";?>

<head>
  <?php include("head.php"); ?>
  <title>WEBSITE NAME | Contact</title>
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>   
  <div id="outer-wrapper">
  <?php include("nav.php"); ?>

  <div id="flex-container">
    <div id="left-space"></div>
    <div id="content-wrapper" class="flex-item">

      <?php include("title_card.php"); ?>

      <div class="card">
        <h2>Lorem ipsum</h2> 
        dolor sit amet, consectetur adipiscing elit. Nam eleifend tortor magna. In mollis risus vel neque bibendum eleifend. Donec tincidunt nunc eget diam dignissim eleifend. Proin ut justo nec neque mattis faucibus. Phasellus arcu metus, rutrum in lorem et, sodales euismod lectus. Donec pellentesque vitae quam nec condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non elit at lectus ornare ornare sit amet eget lacus. Nullam risus risus, cursus ut velit nec, faucibus dictum odio.
      </div><div class="divider"></div>

      <div id="contact_form" class="card">
        
        <h2>Send Us a Message</h2>

        <form action="send_email.php" method="post">
        <div class="input-group col-xs-6">
            <div class="input-title">Name*</div>
            <input type="text" class="form-control" placeholder="First Name" name="firstname">
            <input type="text" id="last-name" class="form-control" placeholder="Last Name" name="lastname">
        </div>
    
        <div class="input-group col-xs-6">
            <div class="input-title">Email Address*</div>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="input-group col-xs-6">
            <div class="input-title">Phone Number</div>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="input-group">
            <div class="input-title">Message*</div>
            <textarea class="form-control" rows=6 cols=75 name="message"></textarea>
        </div>

        <input class="btn" type="submit" value="Send Message">
        </form>

      </div><div class="divider-last"></div>

    </div>  <!-- content-wrapper -->
    <div id="right-space"></div>
  </div>

  </div>
<body>
