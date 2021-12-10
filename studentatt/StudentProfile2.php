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
  color: black /*#f2f2f2*/;
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
  background-color: #191f1d;
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
  background-color: #f1f1f1;
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

* {box-sizing: border-box}


body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 20%;
}

.tablink:hover {
  background-color: #777;
}


.tabcontent {
  color: Black;
  display: none;
  padding: 100px 20px;
  height: 120%;
}

#Organization {background-color: #f0f8ff;}
#HostSupervisor {background-color: #f0f8ff;}
#AttachmentDetails {background-color: #f0f8ff;}
#Activities {background-color: #f0f8ff;}
#Summary {background-color: #f0f8ff;}

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
  <a href="#logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
  </div>
</div>


<section>
  <nav>
    <div class="nav">
  <a href="#Dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
  <a href="#STUDENT MENU">STUDENT MENU</a>
  <a href="studentProfile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
  <a href="#Attachment.php"><i class="fa fa-fw fa-envelope"></i> My attachments</a>
</div>
</nav>

 <article>
    <h1>New Attachment</h1>
    <button class="tablink" onclick="openPage('Organization', this, '#f0f8ff')" id="defaultOpen"> Organization</button>
<button class="tablink" onclick="openPage('HostSupervisor', this, '#f0f8ff')" >HostSupervisor</button>
<button class="tablink" onclick="openPage('AttachmentDetails', this, '#f0f8ff')">AttachmentDetails</button>
<button class="tablink" onclick="openPage('Activities', this, '#f0f8ff')">Activities</button>
<button class="tablink" onclick="openPage('Summary', this, '#f0f8ff')">Summary</button>

<div id="Organization" class="tabcontent">
  <h3>Organization</h3>
 <form action="/action_page.php">
  <label for="orgname">Organization first name:</label><br>
  <input type="text" id="orgname" name="orgname" value="eg.orgname"><br>
  <label for="Branch">Branch:</label><br>
  <input type="text" id="Branch" name="Branch" value="eg.Branch"><br><br>
  <label for="General Area">General Area:</label><br>
  <input type="text" id="General Area" name="General Area" value="eg.General Area"><br><br>
  <label for="Road">Road/area:</label><br>
  <input type="text" id="Road" name="Road" value="Road"><br><br>
  <label for="Organization description">Organization description:</label><br>
  <input type="text" id="Organization description" name="Organization description" value="eg.Organization description"><br><br>
  <label for="country">Country</label><br>
    <select id="country" name="country">
      <option value="Kenya">Kenya</option>
      <option value="Uganda">Uganda</option>
      <option value="Tanzania">Tanzania</option>
    </select><br><br>
  <label for="Constituency">Constituency:</label><br>
  <input type="Constituency" id="Constituency" name="Constituency" value="eg.Constituency"><br><br>
  
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</div>

<div id="HostSupervisor" class="tabcontent">
  <h3>Host supervisor</h3>
  <p></p> 
</div>

<div id="AttachmentDetails" class="tabcontent">
  <h3>Attachment Details</h3>
  <p></p>
</div>

<div id="Activities" class="tabcontent">
  <h3>Activities</h3>
  <p></p>
</div>

<div id="Summary" class="tabcontent">
  <h3>Summary</h3>
  <p></p>
</div>

<input type="submit" value="Host Supervisor>>">
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}


document.getElementById("defaultOpen").click();
</script>

    
  </article>
</section>

</body>
</html>

