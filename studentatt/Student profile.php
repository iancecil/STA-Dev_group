<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


.topnav {
  overflow: hidden;
  background-color: ghostwhite;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 0%;
  left: 45%;
  /*transform: translate(-50%, -50%);*/
}

.topnav-right {
  float: right;
}


@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: absolute;
    top: 50;
    left: 50;
    transform: none;
  }
}

.nav {
  float: left;
  width: 15%;
  height: 650px;
  background-color: #192841;
  padding: 10px;
}
.nav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
}

.nav a:hover {
  color: #f1f1f1;
}

article {
  float: left;
  padding: 20px;
  width: 85%;
  background-color: #f0f8ff;
  height: 550px;
}
section::after {
  content: "";
  display: table;
  clear: both;
}
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}


</style>
</head>
<body>

  <div class="topnav">

  <div class="topnav-centered">
  <a href="#Student Name">Student Name</a>
  </div>

  <img src="strath.jpeg" alt="strathmore" width="40" height="40">
  <a href="#Dashboard">Dashboard</a>
  
  <div class="topnav-right">
  <a href="#Student">Student</a>
  <a href="#logout"><i class="fas fa-sign-out"></i> Log out</a>
  </div>
</div>


<section>
  <nav>
    <div class="nav">
  <a href="#Dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="#STUDENT MENU">STUDENT MENU</a>
  <a href="studentProfile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
  <a href="StudentProfile2.php"><i class="fa fa-fw fa-envelope"></i> My attachments</a>
</div>
</nav>

 <article>
    <h1>Student Profile</h1>
    
  </article>
</section>

</body>
</html>

