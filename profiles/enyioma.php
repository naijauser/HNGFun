<?php 
  require 'db.php';
   $result = $conn->query("Select * from secret_word LIMIT 1");
   $result = $result->fetch(PDO::FETCH_OBJ);
   $secret_word = $result->secret_word;

   $result2 = $conn->query("Select * from interns_data where username = 'enyioma'");
   $user = $result2->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enyioma's Profile</title>

    <!-- Oracle Jet CDN -->
    <link id="css" rel="stylesheet" href="https://static.oracle.com/cdn/jet/v5.0.0/default/css/alta/oj-alta-min.css" type="text/css"/>
    <!-- Awesome font CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
  }
  .content {
    display: block;
    padding-top: 100px;
    padding-left: 500px;
  }
  .about {
          font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          text-align: justify;
          padding: 20px;
      }
  .card{
    box-shadow: 0px 0px 2px #2196f3;
    width: 50%;
  }
  .h2{
      color: #563d7c;
      font-size: 30px;
      align: center;
      padding-left: 130px;
  }
  .h4{
      color: #64b5f6;
      font-size: 20px;
      padding-left: 130px;
  }
  p{
      color: #90caf9;
  }
  .fa {
          padding: 20px;
          font-size: 30px;
           width: 60px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
           border-radius: 60%;
      }
      .fa:hover {
          opacity: 0.7;
      }

      .oj-avatar-image {
          border-radius: 100%;
          display: block;
          max-width: 250px;
          max-height: 200px;
          margin-left: auto;
          margin-right: auto;
          
          
      }

      /* .contacts {
          float: right;
      } */
</style>
</head>

<body class="bg-light">

<div class="oj-flex oj-sm-flex-direction-columno oj-sm-align-items-center content">
  <div class="card mt-5 py-5">
    <div class="my-3">
      <p class="oj-sm-align-items-center h2"><b>Welcome, Everyone!</b></p>
      <p class="oj-sm-align-items-center h4">My name is Enyioma Nwadibia</p>    
      <div class="oj-flex-item oj-xl-align-items-center">
        <img src="https://res.cloudinary.com/dwkzixuca/image/upload/v1524141051/eyo3.jpg" class="oj-avatar-image" alt="Enyioma's photo">
      </div>
      
      <div class= "about">
          I am a budding Web Developer with an intermediate knowledge and experience garnered in a very short while.
          I am a fast learner who is optimistic about any task, situation and life in general. I have working knowledge of the following 
          technologies (The list will keep increasing of course):<br><br>
          <b>Frontend:</b> HTML, CSS, Bootstrap<br>
          <b>Backend:</b> MySQL, PHP<br>
          <b>Server:</b> Laragon, MAMP<br>
          <b>Design:</b> Figma<br>
      </div>
      <div class= "contacts">
          <a href="https://twitter.com/Fynewily" target= "_blank" class="fa fa-twitter"></a>
          <a href="https://www.linkedin.com/in/enyioma-nwadibia-40b59244/" target= "_blank" class="fa fa-linkedin-square"></a>
          <a href="https://github.com/fynewily" target= "_blank" class="fa fa-github"></a>
          <a href="https://hnginternship4.slack.com/account/profile" target= "_blank" class="fa fa-slack"></a>
      </div>
  


    
    </div>
  </div>
</div>


  <!-- RequireJS bootstrap file -->
<script type="text/javascript" src="https://static.oracle.com/cdn/jet/v5.0.0/3rdparty/require/require.js"></script>
<script type="text/javascript" src="https://static.oracle.com/cdn/jet/v@version@/default/js"></script>
<script type="text/javascript" src="https://static.oracle.com/cdn/jet/v@version@/3rdparty"></script>
<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
