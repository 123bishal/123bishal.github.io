<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
      <title> Final Project</title>

      <!--Callings for CSS and JS files.-->
      <link rel="stylesheet" type="text/css" href="website.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <script src="jquery.js"></script>
        <script src="bootstrap.js"></script>

  </head>

<body>
    <h1> Anushaj Chhatkuli </h1>
          <h4> Content Creator</h4>
              <img src="finalimages/logo.png" width="auto" height="auto" class="center">
            <br></br>
  <!--Bootstrap navbar starts here-->

  <nav class="navbar navbar-expand-sm justify-content-center sticky-top bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
     </button>

      <!-- Links -->
       <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ">
        <li class="nav-item px-5">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="Edited Pictures.html">Edited Pictures</a>
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="About.html">About</a>
        </li>
        <li class="nav-item px-5">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
      </ul>
    </div></nav>

  <!--bootstrap navbar ends here-->
      <br>
      <br>


      <form class="contact-form" action="Contact.php" method="post">
        <div class="form-group">
          <label for="Contactname"> Full Name</label>
              <input type="text" class="form-control" id="Contactname" placeholder="Enter Full Name">

        </div>

        <div class="form-group">
          <label for="Contatctemail">Email Address</label>
              <input type="email" class="form-control" id="Contatctemail" placeholder="Enter valid email address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="ContactSubject">Subject</label>
              <input type="text" class="form-control" id="ContactSubject" placeholder="Enter Subject">
        </div>

         <div class="form-group">
           <label for="Contatctmessage">Message</label>
           <textarea class="form-control" id="Contatctmessage" rows="7"></textarea>

           </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </body>
</html>
