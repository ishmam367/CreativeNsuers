<?php
  include ('../../config/config.php');

  $sqlq="SELECT * FROM skill";
  $result=mysqli_query($con, $sqlq);
?>

<!DOCTYPE html>
<html>
<head>
<title> NSU CREATIVE COMMUNITY</title>

<link rel="stylesheet" type="text/css" href="../../css/style3.css"/>

</head>

<body>




<div id="main">


  <nav>

    <a href="HOME.php"><img src="../../img/01.PNG" height="170" width="400" ></a>
  
    <ul class="menu">
    <li> <a href="fform.php "> BE a Freelancer </a> </li>
    <li> <a href=" ../../employer/pages/e_signup.php  "> Be an Employer </a> </li>
    <li> <a href="../../how.php      "> How it works </a> </li>
    <li> <a href="../../HOME.php"> Log In </a> </li>

  </nav>




<div class="form">

   <header>
  <div class="text-box"><h1 id="title" class="title">Please fill up the form</h1>
  <hr>
   <p id="description">
  Your details will help us to create your account
  </p>
  </div>
   </header>

<div class="container">
  <form id="survey-form" method="POST"  action="finsert.php">
<div class="labels">
  <label id="name label" for="name">*Full Name</label></div>

    <div class="input-tab">
      <input class="input-field" type="text" id="name" name="name" placeholder="enter your name" required autofocus></div>
    
    <div class="labels">
      <label id="email-label" for="phone">* Email Id</label></div>
    
    <div class="input-tab">
      <input class="input-field" type="phone" id="phone" name="email" placeholder="*****@northsouth.edu" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@northsouth.edu" required/></div>

    <div class="labels">
      <label id="email-label" for="phone">* Pass</label></div>
    
    <div class="input-tab">
      <input class="input-field" type="phone" id="phone" name="password" placeholder="password" required></div>
    <div class="labels">
      <label id="email-label" for="phone">* Contact Number</label></div>
    
    <div class="input-tab">
      <input class="input-field" type="phone" id="phone" name="phone" placeholder="01*********" required></div>
      
    
    <div class="labels">
      <label id="number-label" for="number">* Age</label></div>
      
    <div class="input-tab">
      <input class="input-field" type="number" id="number" name="age" min="1" max="145" placeholder="your age" required></div>
    
       <div class="labels">
          <label for="dropdown">Your Profession or Skill</label></div>
          
        <div class="input-tab">
          <select id="dropdown" name="skill">
            <?php
              while ($row=mysqli_fetch_array($result)):;?>
                <option value="<?php echo $row["skill_name"] ?>"><?php echo $row["skill_name"] ?></option>

            <?php endwhile; ?>
          </select>
        </div>
    
    <div class="labels">
          <label>How expert are you</label></div>
          
        <div class="input-tab">
          <select id="dropdown" name="expertise">
            <option value="Professional">Professional</option>
            <option value="Semi-Professional">Semi-Professional</option>
            <option value="Amateur">Amateur</option>
            <option value="Beginner">Beginner</option>
          </select>
            
            
        </div>
    
    <div class="labels">
      <label for="dropdown">Your rate-per-hour?</label></div>
      
    <div class="input-tab">
      <select id="dropdown" name="rate">
        <option disabled value selected>Select an option</option>
        <option value="10$-40$">10$-40$</option>
        <option value="40$-75$">40$-75$</option>
        <option value="75$-130$">75$-130$</option>
        <option value="130-250$">130-250$</option>
        <option value="Negotiation">will be decided over negotiation</option>
      </select>
    </div>



      <div class="labels">
      <label id="number-label" for="number">* Employment history</label></div>
      
    <div class="input-tab">
      <input class="input-field" type="text" id="number" name="history" min="1" max="145" placeholder="If you dont have any just write NONE" required></div>
    
   <!-- <div class="labels">
          <label>Who do you drink the beers with?<br>(Check all that apply):</label></div>
    <div class="input-tab">
      <input type="checkbox" name="apu" value="apu">Apu<br>
          <input type="checkbox" name="Moe" value="Moe">Moe<br>
          <input type="checkbox" name="Homer" value="Homer">Homer<br>
          <input type="checkbox" name="other" value="other">Other<br>
        </div>   -->
  
  <div class="labels">
          <label for="comments">Give a description of yourself and you'r skill</label></div>
          
        <div class="input-tab">
          <textarea class="input-field" id="comments" name="comments" rows="10" cols="40" placeholder="Your description here..."></textarea></div>
  
  <div class="btn">
          <button id="submit" type="submit">Submit</button>
        </div>
    <hr>

  </form>
</div>                                              
                                                                                                       
                
</div>






