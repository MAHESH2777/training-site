<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Online Training Classes</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="bgtag">
<div class="bclr">
<div class="container-fluid nav">
  <div class="col-4 text-center home">
  <img src="img/hom.png"> 
   <!-- <span class="fas fa-home iconclr"></span> -->
  </div>

   <div class="col-4 text-center"></div>
     

   <div class="col-4 text-center">
   <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <!-- <i class="fas fa-user"></i> -->
          <img src="img/man.png">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Login </a>
          <a class="dropdown-item" href="#">Sign up</a>
        
        </div>
</div>

</div>

<div class="container text-center bdy">
<h1>Live Sessions</h1>

<button class="btn dpdown dropdown-toggle mr-4" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">Courses</button>

  <div class="container">
    <div class="row">
    <div class="col-6 text-right">
  <button class="btn tablink today"   onclick="openCity(event, 'London')">Today's and  Upcoming</button>
</div>
<div class="col-6 text-left">
  <button class="btn tablinks archive" type="button" onclick="openCity(event, 'Paris')">Archive</button>
</div>
</div>
</div>
<div class="dropdown-menu">
  <a class="dropdown-item" href="#">Java</a>
  <a class="dropdown-item" href="#">Politics</a>
  <a class="dropdown-item" href="#">C#</a>
</div>

<div class="container">
<div class="row">
<div class="col-2"></div>
<div class="col-8">

<div id="London" class="tabcontent" style="display:block">
<table class="table">
  <thead class="black white-text">
    <h2>Today's and Upcoming Live Sessions</h2>
    <tr style="background-color:#3f0140">
      <th scope="col">S.No</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col"> Watch Now</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>27/07/2019</td>
      <td>Java</td>
      <td><button style="background-color:#3f0140;color:white">Watch Now</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>27/07/2019</td>
      <td>.Net</td>
      <td><button style="background-color:#3f0140;color:white">Watch Now</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>27/07/2019</td>
      <td>C#</td>
      <td><button style="background-color:#3f0140;color:white">Watch Now</button></td>
    </tr>
  </tbody>
</table>


</div>
<div id="Paris" class="tabcontent">
<table class="table">
  <thead class="black white-text">
    <h2>Archived Videos</h2>
    <tr style="background-color:#3F0140">
      <th scope="col">S.No</th>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">Watch Now</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>01/08/2019</td>
      <td>java</td>
      <td><button style="background-color:#3f0140;color:white">Watch Now</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>08/07/2019</td>
      <td>.Net</td>
      <td><button style="background-color:#3f0140;color:white">Watch Now</button></td>
    </tr>
   
  </tbody>
</table>
</div>
</div>

</div>
<div class="col-2"></div>
</div>
</div>

</div>
</body>

  <!-- Start your project here-->
  
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <script>
  
  function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
  </script>
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
