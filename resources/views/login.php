<!DOCTYPE HTML>
<html>

<head>
  <title>Website</title>

  <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>WE ARE JAG</h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected">
          <a href="http://localhost:8000/home">HOME</a></li>
          <li><a href="http://localhost:8000/about">ABOUT US</a></li>
           <li><a href="http://localhost:8000/contact">CONTACT</a></li>
           <li><a href="http://localhost:8000/login">LOGIN</a></li>
           <li><a href="http://localhost:8000/register">REGISTER</a></li>
        </ul>
      </div>
    </div>  
    </div>
    </div>

    <style>

  .login{
      border: 2px solid white;
      background-color: #143d52;
      border-collapse: collapse;
      width: 30%;
      padding: 20px;
      font-weight: bold;
      font-family: Arial;
      margin-top: 5px;
      color: white;
  }

  .log{
      padding: 0px; 
      margin-left: 70px;
  }

  h1{
      font-size: 20px;
  }

  a{
      padding: 0px;
      font-size: 15px;
      color: white;
  }

    </style>

  <center>
  

    <div class="login">
  
        <h1>LOGIN</h1> <br>

  <form>

    <p> Username&emsp; 
      <input type="text" name="email" value="" placeholder="Username">
    </p> 

    <p> Password&emsp; 
      <input type="password" name="password" value="" placeholder="Password">
    </p>

    <br>

    <input class="log" type="Submit" name="login" value="Log In">
    <a href="http://localhost:8000/register">Register here</a>

    
  </form>
</div>  
</div>
</center>
</div>
</body>
</html>
