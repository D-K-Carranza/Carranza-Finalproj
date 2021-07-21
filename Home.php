<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "portfolio_login";

$conn=mysqli_connect($host, $user, $password, $db);
mysqli_select_db($conn,$db);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Author: D.K. Carranza - Final Project.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" href="images/192.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <title>My Portfolio Home</title>
    <style>
      body {
        background-color: #2c2a2a;
        color: white;
        margin-top: 5em;
      }
      #container{
        background-color: gray;
        width: 200px;
        height: 200px;
        padding: 1em;
        color: black;
        font-family: Calibri;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
      input{
        margin: 1em;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }
      .submit_btn{
        background-color: black;
        border: none;
        width: 100px;
        height: 30px;
        color: white;
      }
      #MP{
        display: none;
      }
      h4{
        text-align: center;
      }
    </style>
    <script type="text/javascript">
            function showMP(){

            var log_cont = document.getElementById('container');
            var main_cont = document.getElementById('MP');
            var h4 = document.getElementById('h4');

            log_cont.style.display = "none";
            h4.style.display = "none";
            main_cont.style.display= "block";
        }
        </script>
  </head>
  <body>
    <h4 id="h4">to login please input the letter "a" on as the username and password.</h4>
  <div id="container"><form method="POST" action="Home.php">
  <div class="uname_input"><label for="name">Username</label> <input type="text" name="name" id="name" placeholder="Username"></div>
  <div class="pass_input"><label for="password">Password</label> <input type="password" name="password" id="password" placeholder="Password"></div>
  <input type="submit" value="Login" class="submit_btn" name="submit">
  </form>
  </div>

  <div id="MP">
    <img src="images/192.png" />  

    <h1>Carranza, Dylan Kyle C.</h1>
    <h2>Skillset</h2>
    <ul>
      <li>Basic Guitar</li>
      <li>Singing</li>
      <li>Programming</li>
      <li>Photoshop</li>
    </ul>
    <h3>Sports</h3>
    <ul>
      <li>Soccer</li>
      <li>Badminton</li>
    </ul>
    <h3>Favourite Movie and Music</h3>
    <ul>
      <li>Deadpool 1 and 2</li>
      <li>Supercollide</li>
      <li>Death of a Batchelor</li>
    </ul>
    <h3>Favourite Programming Language</h3>
    <ul>
      <li>C#</li>
      <li>PHP</li>
      <li>Python</li>
    </ul>
    <div>
      <h2 class="bio">Biograpy</h2>
      <p>
        I'm a simple person that can do simple things, just like any other
        person I heve goals and dreams I wish to accomplish oneday. My fathers
        name is Dax Carranza and my Mothers name is Ning Carranza, they are now
        separated, I'm part of a broken family. I also have a sister her name is
        Nicole Ivy Carranza.I was born and raised in Ilagan, Isabela. That's
        where I completed my pre-school 2nd grade elementary years. We moved to
        Laguna at 2009, at that time I was still living with my grandparents so
        my aunts and uncles decided we move here because my grandparents were
        getting old. The 1st school I ever went to here was Nagcarlan Montesory
        Center I only went there for a year. From grades 4-6 I studied at Rizal
        Standard Academy. Highschool for me was a rollercoaster there where good
        and terrible times. I finished my whole 4 years of highscool at St.
        Marys Academy of Nagcarlan, based from the name you it's obvious that it
        was a catholic school so it was much more stricter than regular schools.
        I failed to mention that my grandparents are not catholic. They're
        Iglesia Ni Cristo members. Since I lived with them, I also grew up to be
        and Iglecia Ni Cristo member. Back to when I was still going to SMAN.
        Being and INC had it's benefits, I didn't have to participate in Sunday
        masses where they recorded our attendance and some traditions that
        catholic schools had I was free of. But as I grew older my point of view
        in religion changed. As of now I am a Deist, I don't believe in
        religion, but I do believe in a Supreme Being. I was one of the few who
        first witnessed a major change in the edicational system in the
        Philippines. I was one of the first K-12 students, I spent my Senior
        Highschool days at STI San Pablo, and those were the best years of my
        life, a rollercoaster unlike anyother, plus that is where I met my
        Girlfriend, Maria Erika N. Lauta. Fast forward in time to the present. I
        know study at Laguna State Polytechnic University in San Pablo Laguna. I
        am a 3rd Year College Student and currently taking Bachelor of Science
        Information Technology majoring in Web and Mobile Application
        Development. My life is yet to end I still have centuries ahead of me I
        hope that I spend the rest of them happy and live my life with no
        regret.
      </p>
    </div>
    <script src="style/index.js"></script>
  </div>
  </body>
</html>

<?php
if(isset($_POST['submit'])){
	$uname=$_POST['name'];
	$pword=$_POST['password'];

	$sql="select * from accounts where Username='".$uname."' AND Password='".$pword."' limit 1";

	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
    echo "<script>alert('Welcome');showMP();</script>";
	}
	else{
   
    echo "<script>alert('Goodbye');</script>";
    
	}
}
?>