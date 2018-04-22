<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Gryffindor</title>

<style type="text/css">
body {
margin: 0;
background-color: #DD252D;
}

ul {
margin: 0; 
}


#menu ul {
background-color: #FDCB3C;
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
background-color: #C00;  
}
.dropbutton   {
background-color: #FDCB3C;
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
background-color: #FDCB3C;
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
background-color: #C00;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #C00;
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
height: 290px; 
border-width:1px;
border:solid;
border-color: gray;
background-color: white;
box-shadow: 3px 3px 3px 3px rgb(150,150,150);
align: left; 
font-color:lightgray; font-family: Arial, Helvetica, sans-serif;
font-size:30px;
text-align: center; 
display: inline-block;	
}

img.gryffindor  {
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
Gryffindor
<h2>Gryffindor is one of the four houses of Hogwarts, and was founded by Godric Gryffindor.
Gryffindor favours traits from students like courage, determination and chivalry.
Gryffindor had marvelous students such as Albus Dumbledore, Minerva McGonagall, Hermoine Granger and Harry Potter, all of which defined the traits.
The head of the house before and during the legendary Harry Potter’s time was Minerva McGonagal. Minerva became the head of the house in 1956, when she was appointed Transfiguration proffersor at Hogwarts.
</h2>
</div>
<img class="gryffindor" src="Gryffindor.jpg">

</body>
</html>
