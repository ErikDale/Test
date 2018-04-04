<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Slytherin</title>

<style type="text/css">
body {
margin: 0;
background-color: #21613c;
}

ul {
margin: 0; 
}


#menu ul {
background-color: #C2C2C2;
height: 50px;
position: relative;   	
}

#menu ul li {
font-family:Arial, Helvetica, sans-serif;
font-size: 14px;
line-height: 50px;
color:#000;
display: inline;
margin: 0px 46.5px;
}

#menu ul li a {
color: #000;
text-decoration: none;
}



#menu ul li a:hover {
background-color: #030;  
}
.dropbutton   {
background-color: #C2C2C2;
height: 50px;
width: 120px; 
position: relative; 
color: #000;
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
background-color: #C2C2C2;
height: 50px;
width: 120px; 
float: left;
z-index: 1;
text-align: center; 
}

.dropdown-content a  {
color: #000;
text-decoration: none; 
}
.dropdown-content a:hover  {
background-color: #030;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #030;
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
height: 320px; 
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

img.slytherin  {
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
Slytherin
<h2>Slytherin is one of the four houses at Hogwarts, founded by Salazar Slytherin. Salazar instructed the Sorting Hat to pick students who had particular characteristics he most valued: cunning, resourcefulness and ambition.
The emblematic animal of the house is a snake and its colours are green and silver. There were two notable heads of the house, Horace Slughorn and Severus Snape.
Slytherin won the first ever House Cup, the rivalry of Gryffindor vs. Slytherin is defined by two major people: Draco Malfoy and Harry Potter, who competed against eachother every year.

</h2>
</div>
<img class="slytherin" src="Slytherin.jpg">

</body>
</html>
