
<?php
if(!isset($_SESSION['userdata'])){
    header("location:login");
}

?>


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
            <h1><a class="navbar-brand" href="customer"><span class="fa fa-university mr-1" aria-hidden="true"></span>Easy cash</a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="customer">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="withdrawamount">Withdraw Amount</a>
                    </li> 
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="">Diposite Amount</a>
                    </li> 
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="">View Balance</a>
                    </li> 
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="logout">logout</a>
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