<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>URBAN</title>
    <link rel="shortcut icon" href="img/favicon.png"  type='image/x-icon' />
  	<!-- Load jQuery with Google CDN -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
  	<!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<!-- Font awesome -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="jquery.timepicker.css">
    <script type="text/javascript" src="jquery.timepicker.min.js"></script>
</head>
<body>
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
          <div class="container">
              <div class="navbar-header page-scroll">


                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand" href="#header">Urban</a>
              </div>

              <div class="collapse navbar-collapse" id="navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden">
                          <a href="#page-top"></a>
                      </li>
                      <li class="page-scroll">
                          <a href="#portfolio">Portfolio</a>
                      </li>
                      <li class="page-scroll">
                          <a href="#details">Details</a>
                      </li>
                      <li class="page-scroll">
                          <a href="#about">About</a>
                      </li>
                      <li class="page-scroll">
                          <a href="#contact">Contact</a>
                      </li>
                      <li class="page-scroll">
                          <a href="logout.php">Logout</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

    <header id = "header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Your Favorite Source of Reserving Tables</h1>
                <hr>
                <p>Start your reservation now....</p>
                <a href="#portfolio" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <!-- <div>
      <input id="txtName" type="text">
    </div>
    <div>
      <button id="btnSend">SEND</button>
    </div>

    <div id="lblMessage">

    </div> -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/inside.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rest1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rest2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rest3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rest4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rest4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ********************************** DETAILS *************************************** -->

    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Details</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 details-item">
                    <a href="#detailmodal1" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-sm-4 details-item">
                    <a href="#detailmodal2" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 details-item">
                    <a href="#detailmodal3" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 details-item">
                    <a href="#detailmodal4" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 details-item">
                    <a href="#detailmodal5" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 details-item">
                    <a href="#detailmodal6" class="details-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/rooftop.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="details-modal modal fade" id="detailmodal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="dataTable" data-example-id="hoverable-table">
                    <div class="col-lg-12 col-lg-offset-0">
                        <div class="modal-body">
                          <table class="table table-striped">
                              <h1>Details</h1>
                              <thead>
                                  <tr>
                                      <th>Reservation ID</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Email</th>
                                      <th>Date</th>
                                      <th>Time</th>
                                      <th>Number of Persons</th>
                                  </tr>
                              </thead>
                              <tbody id="bookingDetailRows">

                              </tbody>
                          </table>
                          <hr class="star-primary">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ********************************** MODALS *************************************** -->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <hr class="star-primary">
                            <h2 class="intro-text text-center">Book
                                <strong>now</strong>
                            </h2>
                            <img src="img/inside.jpg" class="img-responsive img-centered" alt="">
                            <div class="box">
                                <div class="col-lg-12">
                                    <form role="form" action="email.php" method="post">
                                        <div class="row">
                                            <div class="form-group col-lg-3">
                                              <div class="input-group clockpicker" data-placement="left" >
                                                  <input type="text" class="form-control" value="09:30">
                                                  <span class="input-group-addon">
                                                      <span class="glyphicon glyphicon-time"></span>
                                                  </span>
                                              </div>
                                                <!-- <input type="text" name = "partySize" id = "partySize" class="form-control"> -->
                                            </div>
                                            <!-- <div class="form-group col-lg-4">
                                                <label>Email Address</label>
                                                <input type="email" name = "email" id = "email" class="form-control">
                                            </div> -->
                                            <div class="form-group col-lg-3">
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="form-group col-lg-3">
                                                <!-- <label class="form-control">Tables available Tonight!</label> -->
                                                <!-- <div class="dropdown">
                                                  <select id = "dpdTime" class="dropdown_select_element">
                                                    <option value="0:00 AM" selected = "">12:00 AM</option>
                                                    <option value="0:30 AM">12:30 AM</option>
                                                    <option value="1:00 AM">1:00 AM</option>
                                                    <option value="1:30 AM">1:30 AM</option>
                                                  </select>

                                                </div> -->
                                                <!-- <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">

                                                  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                  <li><a href="#">12:00</a></li>
                                                  <li><a href="#">12:30</a></li>
                                                  <li><a href="#">14:00</a></li>
                                                </ul> -->
                                                <!-- <input type="text" class="form-control" name = "time" id = "time"></input> -->
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <input type="hidden" name="save" value="contact">
                                                <!-- <button type="submit" id = "submitEmail" name="submit"class="btn btn-default">Submit</button> -->
                                                <hr>
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                <hr>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="modal-body">
                          <h2>{{Name of Restaurant}}</h2>
                          <hr class="star-primary">
                          <!-- <img src="img/rest1.jpg" class="img-responsive" alt=""> -->
                          <form role = "form" action="email.php" id = "inputFormForDetails" class="form-horizontal">
                            <div class="form-group">
                              <label class = "control-label col-sm-2" for="firstName">First Name: </label>
                              <div class="col-sm-3">
                                <input type="firstName" name="firstName" class="form-control" id = "firstName" placeholder="First Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class = "control-label col-sm-2" for="lastName">Last Name: </label>
                              <div class="col-sm-3">
                                <input type="lastName" name="lastName" class="form-control" id = "lastName" placeholder="Last Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class = "control-label col-sm-2" for="email">Email: </label>
                              <div class="col-sm-3">
                                <input type="email" name="email" class="form-control" id = "email" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class = "control-label col-sm-2" for="date">Date and Time: </label>
                              <div class="col-sm-2">
                                <input type="date" name="date" class="form-control" id = "date">
                                <br>
                                <!-- <div class="input-group clockpicker" data-placement="left" >
                                    <input type="text" class="form-control" id="time">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div> -->
                              </div>
                              <div class="col-sm-1">
                                <input type="text" class="time ui-timepicker-input" id = "time">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class = "control-label col-sm-2" for="count">Number of Seats: </label>
                              <div class="col-sm-3">
                                <input type="number" name="count" class="form-control" id = "count" placeholder="How many seats do you need?">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-2">
                                <button id = "btnAddBooking" type="submit" name="submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                            <audio id="soundUp" src="confirmed.mp3"></audio>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

                          </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>In Portofolio section you can see the details of the place where you want to hang out, and also make a reservation</p>
                </div>
                <div class="col-lg-4">
                    <p>You can also contact us and tell us what do you think about this website, by scrolling to the Contact section</p>
                </div>
            </div>
        </div>
    </section>

    <div id="map"></div>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your booking with us? That's great! Give us a call or send us an email if you have any questions and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:feedback@urban.esy.es">feedback@urban.esy.es</a></p>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src = "tables.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="freelancer.min.js"></script>

    <script>
    var map;

    function initMap() {
      var restaurant = {lat: 55.677464, lng: 12.566273};
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: restaurant
      });
      var marker = new google.maps.Marker({
        position: restaurant,
        map: map
      });
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD92Ez5RWzpAYxWbcaNadq-lS_NEJvcA6U&callback=initMap"
    async defer></script>

</body>
