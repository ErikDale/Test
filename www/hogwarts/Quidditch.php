<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Quidditch</title>

<style type="text/css">
body {
margin: 0;
background-color: #FFEFD5;
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
height: 1280px; 
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

img.quidditch  {
width: 1310px; 
height: 600px;
margin-left: 1%; 
margin-right: 1%; 	
}
</style>

</head>

<body>
<h1>
Hogwarts School of Witchcraft and Wizardry 
</h1>
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
<h1>Quidditch</h1> 
<br>

<img class="quidditch" src="Quidditch.jpg">

<br>
<br>
<div class="a">
Quidditch
<h2> <img src="Quidditch-rules.jpg">
<br>
The object of the game of Quidditch is to score more points than your opponents. Players do this by scoring goals which is done by placing a slightly deflated volleyball called the Quaffle into the opposition's baskets giving them 10 points, and by capturing the Golden Snitch which is worth 30 points.
<br>
<br>
There are two ways to score during a game of Quidditch. Firstly, the Chasers can score a goal by getting possession of the Quaffle, then entering the opposition's scoring area and throwing it successfully through one of the three hoops. This gives the team 10 points. The second way to score points is for the Seeker to gain possession of the Golden Snitch. Doing so, scores the team 30 points and immediately ends the game.
<br>
<br>
There is a common misunderstanding in Quidditch that the team that captures the Golden Snitch is the team that wins the match. This is technically incorrect, as the winner of the match is the team with the most points.
Because the Snitch is worth 30-points and the game ends as soon as it is captured, the winner is almost always the team that captured it. This is not always the case, however, as technically, a team can still win the game even if they haven’t captured the Golden Snitch just as long as they have more points than the opposing team.
<br>
<br>
A game of Quidditch begins with the Quaffle and Bludgers all placed in the centre of the field.
Each team’s seven players start in their keeper zone, all with their eyes closed, this is to prevent them seeing where their Golden Snitch is.
Once the Golden Snitch is a sufficient distance away in the judgement of the referee, then the referee will begin the game by shouting ‘brooms up!’
Each team must then attempt to score more points than their opposition by scoring more goals by placing the Quaffle through one of the opposition nets and by capturing the Golden Snitch which also immediately ends the game.
There is no set time limit to the game because of this, but the Golden Snitch is usually caught within an hour, although this can depend upon the fitness and experience of participants.
During gameplay, any player that is hit by a Bludger is required to dismount their broom and run back and touch their on nets before resuming play.
Quidditch is a full contact game and players can use force against each other in an attempt to capture the Quaffle or prevent other players scoring a goal.
Throughout the game, the Seeker from each team’s sole duty is to capture the Golden Snitch and once this is done, the game ends.
The winner of the match is the team with the most points at the end of the game.
</h2>
</div>

</body>
</html>
