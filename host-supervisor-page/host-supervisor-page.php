<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #E5E4E2;
    }

    .topnav {
      position: relative;
      overflow: hidden;
      background-color: #fff;
    }

    .topnav a {
      float: left;
      color: #000;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 14px;

    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {

      color: #000;
    }

    .topnav-centered a {
      float: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

    }

    .topnav-right {
      float: right;

    }

    /* Responsive navigation menu (for mobile devices) */
    @media screen and (max-width: 600px) {

      .topnav a,
      .topnav-right {
        float: none;
        display: block;
      }

      .topnav-centered a {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
      }
    }

    .sidebar {
      height: 89.8%;
      width: 170px;
      position: fixed;
      z-index: 1;
      bottom: 0;
      left: 0;
      background-color: #123456;
      overflow-x: hidden;
      padding-top: 16px;
    }

    .sidebar a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 14px;
      color: #fff;
      display: block;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }


    /*@media screen and (max-height: 450px) {
        .sidebar {padding-top: 15px;}
        .sidebar a {font-size: 18px;}
      }*/

    .body {
      margin-left: 160px;
      /* Same as the width of the sidenav */
      padding: 0px 25px;
    }


    .div1 {
      background: lightgrey;
      padding: 10px 25px;
    }

    .div1-1 {

      background: lightblue;
      padding: 10px 25px;
    }

    .div1-2 {

      background: lightblue;
      padding: 10px 25px;
    }

    .div2 {
      background: lightgrey;
      padding: 10px 25px;
    }

    .div2-1 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div2-2 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div2-3 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div3 {
      background: lightgrey;
      padding: 10px 25px;
    }

    .div3-1 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div3-2 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div3-3 {
      background: lightblue;
      padding: 10px 25px;
    }

    .div3-4 {
      background: lightblue;
      padding: 10px 25px;
    }
  </style>
</head>

<body>
  <!-- Top navigation -->
  <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="#name" class="active">Names of the user</a>
    </div>

    <!-- Left-aligned links (default) -->
    <a><img src="Strathmore logo.png" alt="logo" style="width:60px;height:14px;"></a>
    <a>Dashboard</a>

    <!-- Right-aligned links -->
    <div class="topnav-right">
      <a href="#username">Username</a>
      <a href="#logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
    </div>
    <div class="sidebar">
      <a href="#dashboard"><i class="fas fa-chart-line"></i> Dashboard</a>
      <a href="#interns"><i class="fas fa-list-ul"></i> Interns</a>
    </div>
  </div>
  <div class="body">
    <h3>User Details</h3>
    <div class="div1">Assessment scores</div>
    <div class="div1-1">Host supervisor assessment</div>
    <div class="div1-2">Faculty supervisor assessment</div>

    <br /><br />

    <div class="div2">Assigned faculty supervisor</div>
    <div class="div2-1">Supervisor's name</div>
    <div class="div2-2">Supervisor's email</div>
    <div class="div2-3">Date allocated</div>

    <br /><br />

    <div class="div3">Host supervisor</div>
    <div class="div3-1">Host supervisor name</div>
    <div class="div3-2">Host supervisor designation</div>
    <div class="div3-3">Host supervisor email address</div>
    <div class="div3-4">Host supervisor phone</div>
    <br /><br />

  </div>
</body>

</html>