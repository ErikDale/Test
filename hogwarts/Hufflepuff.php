<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Hogwarts</title>

<style type="text/css">
body {
margin: 0;
background-color: #E0BC5C; 
}

ul {
margin: 0; 
}


#menu ul {
background-color: #383838;
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
background-color: #FC0;  
}
.dropbutton   {
background-color: #383838;
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
background-color: #383838;
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
background-color: #FC0;
}
.dropdown:hover .dropdown-content {
display: block;
}
.dropdown:hover .dropbutton {background-color: #FC0;
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
width: 700px;
height: 250px; 
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

img.hufflepuff  {
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
    <a href="#">Student</a>
    <br>
    <a href="#">Teacher</a>
   
  </div>
</div>
</ul>
</div>  

<br>
<br>
<div class="a">
Hufflepuff
<h2>Hufflepuff is one of the four houses of Hogwarts. Its founder was the medieval witch Helga Hufflepuff. Hufflepuff is the most inclusive among the four houses; valuing the traits hard work, dedication, patience, loyalty and fair play. The emblematic animal is a badger, and yellow and black are its colours. The head of Hufflepuff is Pomona Sprout, and the Fat Friar is the House’s patron ghost.</h2>
</div>
<img class="hufflepuff" src="Hufflepuff.jpg">

</body>
</html>
