<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
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

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: Black;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Organization {background-color: beige;}
#HostSupervisor {background-color: beige;}
#AttachmentDetails {background-color: beige;}
#Activities {background-color: beige;}
#Summary {background-color: beige;}

</style>
</head>
<body>

<button class="tablink" onclick="openPage('Organization', this, 'beige')" id="defaultOpen">	Organization</button>
<button class="tablink" onclick="openPage('HostSupervisor', this, 'beige')" >HostSupervisor</button>
<button class="tablink" onclick="openPage('AttachmentDetails', this, 'beige')">AttachmentDetails</button>
<button class="tablink" onclick="openPage('Activities', this, 'beige')">Activities</button>
<button class="tablink" onclick="openPage('Summary', this, 'beige')">Summary</button>

<div id="Organization" class="tabcontent">
  <h3>Organization</h3>
 <form action="/action_page.php">
  <label for="orgname">Organization first name:</label><br>
  <input type="text" id="orgname" name="orgname" value="orgname"><br>
  <label for="Branch">Branch:</label><br>
  <input type="text" id="Branch" name="Branch" value="Branch"><br><br>
  <label for="General Area">General Area:</label><br>
  <input type="text" id="General Area" name="General Area" value="General Area"><br><br>
  <label for="Road">Road/area:</label><br>
  <input type="text" id="Road" name="Road" value="Road"><br><br>
  <label for="Organization description">Organization description:</label><br>
  <input type="text" id="Organization description" name="Organization description" value="Organization description"><br><br>
  <label for="Country">Country:</label><br>
  <input type="Country" id="Country" name="Country" value="Country"><br><br>
  <label for="Constituency">Constituency:</label><br>
  <input type="Constituency" id="Constituency" name="Constituency" value="Constituency"><br><br>
  
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</div>

<div id="HostSupervisor" class="tabcontent">
  <h3>Host supervisor</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="AttachmentDetails" class="tabcontent">
  <h3>Attachment Details</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="Activities" class="tabcontent">
  <h3>Activities</h3>
  <p>Who we are and what we do.</p>
</div>

<div id="Summary" class="tabcontent">
  <h3>Summary</h3>
  <p>Who we are and what we do.</p>
</div>

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

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
