<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>pueneh</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">       
 body{
  padding-top: 60px;
    background-color: #0000ff;
    background-image:url(http://res.cloudinary.com/pueneh/image/upload/v1524600731/background.jpg);
    background-size:cover;
}
p{
  color: #ffffff;
}
h1{
  color: #ffffff;
  float: center;
}
h2{
  color: #000000;
}
ul{
  color: #ffffff;
}
h3{
  color: #ffffff;
}

#nav{
  background-color: white;
  color:white;
  float: right;
  width: 100%
  height:100px;
}
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
#bodybox {
  margin: auto;
  max-width: 550px;
  font: 15px arial, sans-serif;
  background-color: white;
  border-style: solid;
  border-width: 1px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 15px;
  padding-left: 15px;
  box-shadow: 3px 3px 3px grey;
  border-radius: 10px;
}

#chatborder {
  border-style: solid;
  background-color: #D2691E;
  border-width: 3px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: 10px;
  margin-right: 20px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 10px;
  padding-left: 5px;
  border-radius:15px;
}

.chatlog {
   font: 10px arial, sans-serif;
}
#chatbox {
  font: 10px arial, sans-serif;
  height: 15px;
  width: 100%;


h2 {
  margin: auto;
}

pre {
  background-color: #f0f0f0;
  margin-left: 15px;
}     
</style>
</head>

<body>
<?php
  require 'db.php';

$select = $conn->query("SELECT * FROM secret_word LIMIT 1");
    $select->setFetchMode(PDO::FETCH_ASSOC);
    $result= $select->fetch();
    $secret_word = $result['secret_word'];


$result2 = $conn->query("SELECT * FROM interns_data WHERE username = 'puenehfaith'");
    $result2->setFetchMode(PDO::FETCH_ASSOC);
    $user = $result2->fetch()

?>
    
<div id="wrapper">
    
  <div id="header">
    <div id="nav"><a href="index.html">Home</a> | <a href="#">About Me</a> | <a href="#">Contact Me</a> | <a href="#">My Photos</a></div>
    <div id="bg"></div>
  </div>
  
  <div id="main-content">
    <div id="left-column">
      <div class="box">
            <h1style="text-align: center;"><strong>WELCOME TO MY PAGE</strong></h1>
          <h1>my name is <span id="me"><?php echo $user["name"]?></span></h1>
<p>This is my space. Here are some of my interests: </p>
        <ul style="margin-top:10px;">
          <li>Am a front end web developer</li>
          <li>I love coding</li>
          <li>Still learning</li>
          <li>want to be good in vue.js,react and angular.js</li>
        </ul>
      </div>
      <h2><strong>MORE ABOUT ME</strong></h2>
      <p>
        <img src="http://res.cloudinary.com/pueneh/image/upload/v1524830779/pix_6.jpg
" width="139" height="150" style="margin: 0 10px 10px 0;float:left;" />
        <em>"Am a foodie"</em><br/>
        <em>"Am easy going."</em><br/> 
        <em>"My fav color is red"</em><br/>
        <em>"i love travelling."</em><br/> 
      </p>
    </div>
    <div id="right-column">
      <div id="main-image"><img src="http://res.cloudinary.com/pueneh/image/upload/v1524830633/pix_5.jpg
" width="160" height="188" /></div>
      <div class="sidebar">     
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </div>
  </div>
    Copyright &copy; 2018 Pueneh Faith. All rights reserved.<br/>
  </div>
</div>
    <div id='bodybox'>
  <div id='chatborder'>
    <p id="chatlog7" class="chatlog">&nbsp;</p>
    <p id="chatlog6" class="chatlog">&nbsp;</p>
    <p id="chatlog5" class="chatlog">&nbsp;</p>
    <p id="chatlog4" class="chatlog">&nbsp;</p>
    <p id="chatlog3" class="chatlog">&nbsp;</p>
    <p id="chatlog2" class="chatlog">&nbsp;</p>
    <p id="chatlog1" class="chatlog">&nbsp;</p>
    <input type="hello" name="Jayo" id="chatbox" placeholder="Heloo am Jayo! can you train me?." onfocus="placeHolder()">
  </div>
  <br>
  <br>
  <h2>jayo</h2>
  <p>i love making beads but i don't know alot about making one can you teach me how to make a beautiful neck piece? to train me use the keyword "train" your question #your answer #password.</p>
  <ul style="list-style-type:disc">
    <li>hello.</li>
    <li>hi dear you are welcome.</li>
  </ul>
  <br><pre><code>if (lastUserMessage === 'hi'){
  botMessage = 'hello!';
}</pre></code>
  <pre><code>if (lastUserMessage === 'what is your name'){
  botMessage = 'My name is' Jayo;
}</pre></code><pre><b>User:</b> I love beadmaking
<b>Chatbot:</b> Tell me more about bead making.</pre>
 </div>
</body>
</html>
