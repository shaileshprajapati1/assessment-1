<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Banking Category </title>

    <!-- Template CSS -->
    <link rel="stylesheet" href=" <?php echo $this->baseURL ; ?>assets/css/style-starter.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> -->
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container-fluid pr-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <h1><a class="navbar-brand" href="home"><span class="fa fa-university mr-1" aria-hidden="true"></span>Easy cash</a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="about">About</a>
                    </li> 
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="services">Services</a>
                    </li> 
                    <!-- <li class="nav-item dropdown @@pages__active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="banker">Banker</a>
                            <a class="dropdown-item" href="customer">customer</a>
                        </div>
                    </li> -->
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item ml-lg-3">
                        <a class="nav-link phone" href="tel:97246 68513"><span class="fa fa-volume-control-phone"></span> +(91)-97246-68513</a>
                    </li>
                    <li class="nav-item ml-lg-3">
                        <a href="home" class=" book btn btn-style">Get started</a>
                    </li>
                </ul>
            </div>
        </div>

        </nav>
    </div>
      </header>
</section>

<script src=" <?php echo $this->baseURL ; ?>assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src=" <?php echo $this->baseURL ; ?>assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->