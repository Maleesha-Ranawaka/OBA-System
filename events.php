<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  
  <?php
      session_start();

      if( isset($_SESSION['login_user']) ){
        echo "<span id ='login_user' style='visibility:hidden; position:absolute;'>".$_SESSION['login_user']."</span>";
        echo "<span id ='login_user_reg' style='visibility:hidden; position:absolute;'>".$_SESSION['regestration_number']."</span>";
        echo "<span id ='login_user_role' style='visibility:hidden; position:absolute;'>".$_SESSION['admin_role']."</span>";

      }
      else{
        echo "<span id ='login_user' style='visibility:hidden;position:absolute;'>no_data</span>";
      }
  ?>
  <meta charset="UTF-8">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">        
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="template/css/style.css">
	<link rel="stylesheet" type="text/css" href="template/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="template/css/animate.css">
  <link rel="stylesheet" type="text/css" href="template/css/events-style.css">
    
  
	<script type="text/javascript" src="template/js/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="template/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="template/js/lightbox.js"></script> 
	<script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script>
</head>
<body>
<header>     
<section class="container">
<?php include './components/header.php' ?>
</section>
</header>
<div class="row">

<div class="col-4 col-lg-4 col-md-4" style="">
<ul class="main">
  <li class="date">
    <h3>08 / 2019</h3>
    <p>Schedule of Events</p>
  </li>
  <li class= "events">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
       
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
    </ul>  
    
  
  </li>
         
  
  
    <li class="date">
    <h3>09 / 2019</h3>
    <p>Schedule of Events</p>
  </li>
  <li class= "events cf">
    <ul class="events-detail">
      <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
       
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
      
       <li>
        <a href="#">
          <span class="event-time">11th Sunday</span><br>
          <span class="event-name">Annual General Meeting</span><br>
          <span class="event-location">Prince Auditorium</span>
        </a>
      </li>
    </ul>  
    
  
  </li>
         
</ul>  
</div>


<div class="col-8 col-lg-8 col-md-8 eventcontainer">
  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      <span class="card-media-object-tag subtle">Selling Fast</span>
      
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Monday, AUG 09, 7:00 PM</span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Prince Collage Old Boys Association Annual Dinner Dance</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Randiya Hotel, Rathnapura</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; Rs.1500</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Party</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>
  
  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Lorem Ipsum </span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Lorem Ipsum is simply dummy </span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">$25 &ndash; $80</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Performance</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>

  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      <span class="card-media-object-tag subtle">Selling Fast</span>
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Mon, APR 09, 7:00 PM</span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Lorem Ipsum</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Party</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>

  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      <span class="card-media-object-tag subtle">Selling Fast</span>
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Mon, APR 09, 7:00 PM</span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Lorem Ipsum</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Party</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>

  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      <span class="card-media-object-tag subtle">Selling Fast</span>
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Mon, APR 09, 7:00 PM</span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Lorem Ipsum</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Party</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>

  <div class="card-media">
    <!-- media container -->
    <div class="card-media-object-container">
      <div class="card-media-object" style="background-image: url(img/slides_01.jpg);"></div>
      <span class="card-media-object-tag subtle">Selling Fast</span>
    </div>
    <!-- body container -->
    <div class="card-media-body">
      <div class="card-media-body-top">
        <span class="subtle">Mon, APR 09, 7:00 PM</span>
        <div class="card-media-body-top-icons u-float-right">
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
          </svg>
          <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
      </div>
      <span class="card-media-body-heading">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
      <div class="card-media-body-supporting-bottom">
        <span class="card-media-body-supporting-bottom-text subtle">Lorem Ipsum</span>
        <span class="card-media-body-supporting-bottom-text subtle u-float-right">Free &ndash; $30</span>
      </div>
      <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
        <span class="card-media-body-supporting-bottom-text subtle">#Music #Party</span>
        <a href="#/" class="card-media-body-supporting-bottom-text card-media-link u-float-right">VIEW TICKETS</a>
      </div>
    </div>
  </div>

  



</div>
<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<?php include('./components/footer.php') ?>
</footer><!-- site footer end -->
<!-- site content end -->

<script type="text/javascript">jssor_1_slider_init();</script>
<script type="text/javascript" src="template/js/jquery.custom.js"></script>   
<script type="text/javascript" src="template/js/jquery.site.slider.js"></script>   
<script  type="text/javascript" src="template/js/jquery.site.slider.js" ></script>
<script type="text/javascript" src="js/login.js"></script>

</body>
</html>