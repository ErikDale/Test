<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Ravenclaw</title>

<style type="text/css">
body {
margin: 0;
background-color:#1B3779; 
}

ul {
margin: 0; 
}


#menu ul {
background-color: #7C5C34;
height: 50px;
position: relative;   	
}

#menu ul li {
font-family:Arial, Helvetica, sans-serif;
font-size: 14px;
line-height: 50px;
color:#FFF;
display: inline;
margin: 0px 46.5px;
}

#menu ul li a {
color: #FFF;
text-decoration: none;
}



#menu ul li a:hover {
background-color: #009;  
}
.dropbutton   {
background-color: #7C5C34;
height: 50px;
width: 120px; 
position: relative; 
color: #FFF;
cursor: pointer; 	
}
.dropdown  {
position: relative;
display: inline-block; 
width: 120px; 
}
.dropdown-content  {
display: none;
position: absolute;	
background-color: #7C5C34;
height: 50px;
width: 120px; 
float: left;
z-index: 1;
text-align: center; 
}

.dropdown-content a  {
color: #FFF;
text-decoration: none; 
}
.dropdown-content a:hover  {
background-color: #009;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #009;
}

h1  {
font-family: Arial, Helvetica, sans-serif; 
text-align: center; 
font-size: 30px; 
color: #FFF;	
}
h2  {
font-family: Arial, Helvetica, sans-serif; 
text-align: center; 
font-size: 18px; 
line-height: 1.5;		
}

div.a  {
width: 700px;
height: 270px; 
border-width:1px;
border:solid;
border-color: gray;
background-color: white;
box-shadow: 3px 3px 3px 3px rgb(150,150,150);
display: inline-block;
font-color:lightgray; font-family: Arial, Helvetica, sans-serif;
font-size:30px;
text-align: center; 	
}

img.ravenclaw  {
width: 500px; 
height: 600px;
float: right;	
}
</style>

</head>
 

<body>
<h1>
Hogwarts School of Witchcraft and Wizardry 
</h1>
<div id="menu">  <ul>
 
<li><a href="Home.php">Home</a>
</li>
    <li><a href="Gryffindor.php">Gryffindor</a></li>
    <li><a href="Slytherin.php">Slytherin</a></li>
    <li><a href="Hufflepuff.php">Hufflepuff</a></li>
    <li><a href="Ravenclaw.php">Ravenclaw</a></li>
    <li><a href="Regulations.php">Regulations</a></li>
    <li><a href="Quidditch.php">Quidditch</a></li> 
<div class="dropdown">
  <button class="dropbutton">Teacher/Student</button>
  <div class="dropdown-content">
    <a href="Student.php">Student</a>
    <br>
    <a href="Teacher-login.php">Teacher</a>
   
  </div>
</div>
</ul>
</div>  

<br>
<br>
<div class="a">
Ravenclaw
<h2>Ravenclaw is one of the four houses of Hogwarts, founded by Rowena Ravenclaw. Members of this house are characterized by their wit, learning and wisdom. Its house colours are blue and bronze, and its symbol is an eagle. The House Ghost, the Grey Lady, was the daughter of the founder Rowena Ravenclaw. The house colours blue and bronze were chosen to represent the sky and eagle feathers respectively, both having much to do with air.</h2>
</div>
<img class="ravenclaw" src="Ravenclaw.jpg">
</body>
</html>
