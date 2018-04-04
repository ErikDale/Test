<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Home</title>

<style type="text/css">
body {
margin: 0;
}

ul {
margin: 0; 
}


#menu ul {
background-color: #999;
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
background-color: #333;
}
.dropbutton   {
background-color: #999;
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
background-color: #999;
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
background-color: #333;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #333;
}

h1  {
font-family: Arial, Helvetica, sans-serif; 
text-align: center; 
font-size: 30px; 	
}
h2  {
font-family: Arial, Helvetica, sans-serif; 
text-align: center; 
font-size: 18px;
line-height: 1.5;  		
}

div.a  {
width:1000px;
height: 170px; 
border-width:1px;
border:solid;
border-color: gray;
background-color: white;
box-shadow: 3px 3px 3px 3px rgb(150,150,150);
margin: auto;
font-color:lightgray; font-family: Arial, Helvetica, sans-serif;
font-size:30px;
text-align: center; 	
}

img.hogwarts  {
width: 1310px; 
height: 700px;
margin-left: 1%; 
margin-right: 1%; 	
}
#table   {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;background-color: #999;
color: white;
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}	

</style>

</head>

<body>

<audio autoplay> 
<source src="Harry-Potter-Theme-Song.mp3">
</audio>
<h1>Hogwarts School of Witchcraft and Wizardry </h1>
<div id="menu"> 
  <ul>
 
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
<img class="hogwarts" src="Hogwarts.jpg">

<br>
<br>
<div class="a">
Hogwarts School of Witchcraft and Wizardry 
<h2>Hogwarts School of Witchcraft and Wizardry is the British wizarding school, located in the Highlands of Scotland, It takes students from the United Kingdom of Great Britain and Norther Ireland, and Ireland.
The castle is located in the mountains near a loch. Established around the 10th century, Hogwarts is considered to be one of the finest magical institutions in the wizarding world.
</h2>
</div>
<br>
<br>


