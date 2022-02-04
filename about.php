<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>
	<?php include 'menu.php'    ;?>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SamWeb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
      </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="jumbotron">
  <h1>Web Developer Sam</h1>
  <p>Deals with HTML, CSS, PHP, JAVASCRIPT, ECT....</p>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="cc6.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4"> I am Emmy Sammy.</h2>
      <p class="py-3"> Building state-of-the-art, easy to use, user-friendly websites and applications is truly a passion of mine and I am confident I would be an excellent addition to your organization. In addition to my knowledge base, I actively seek out new technologies and stay up-to-date on industry trends and advancements. This has allowed me to stay ahead of the curve and deliver exceptional work to all of my employers, including those I've worked for on a project basis. </p>
      <a href="about.php" class="btn btn-success"> Check More</a>
    </div>
  </div>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center" >@SamWeb</p>
</footer>


</body>
</html>