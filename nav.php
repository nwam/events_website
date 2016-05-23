<nav id="navbar-custom" class="navbar navbar-default">
  <div class="container-fluid">

  <!-- Mobile stuff and brand -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>

  </div>

  <!-- Navbar contents -->
  <div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-nav">
    <li <?php if ($thisPage=="Home") echo "class=\"active\"" ?>>
      <a href="index.php">Home
      <?php if ($thisPage=="Home") echo "<span class=\"sr-only\">(current)</span>" ?></a></li>
    <li <?php if ($thisPage=="Services") echo "class=\"active\"" ?>>
      <a href="services.php">Services
      <?php if ($thisPage=="Services") echo "<span class=\"sr-only\">(current)</span>" ?></a></li>
    <li <?php if ($thisPage=="About") echo "class=\"active\"" ?>>
      <a href="about.php">About
      <?php if ($thisPage=="About") echo "<span class=\"sr-only\">(current)</span>" ?></a></li>
    <li <?php if ($thisPage=="Contact") echo "class=\"active\"" ?>>
      <a href="contact.php">Contact
      <?php if ($thisPage=="Contact") echo "<span class=\"sr-only\">(current)</span>" ?></a></li>
    </ul>

  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
