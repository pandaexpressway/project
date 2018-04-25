 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> Moola</title>

    </head>

    <body>
    	<!---NAV-->
		<?php
		  include_once("navigation.php");
		?>


    <!--STUFF-->
<div class="container" style="margin-top:10%;">
  <div class="row">
    <main class="col s8 offset-s2">
      <h1 style="text-align:center">Register for an Account</h1>
      <form class="s12 m4" method="POST" action="accountCreation.php">
            <div class="row">
        <h5><center> View Your Account</h5></center>
         <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
           <input type="text" name="name" id="name">
           <label class="active" for="name">Username</label>
         </div>
         <div class="input-field">
          <i class="material-icons prefix">lock</i>
           <input type="password" name="password" id="password" class="validate">
           <label class="active" for="password">Password</label>
         </div>
         <center><button class="waves-effect waves-light btn teal accent-4" name="submit">Sign On</button><br></center>
          <center><br><p>New to moola? <a href="accountCreation.php">Register here!</a></p></center>
       </form>

    </main>

  </div>
</div>

    	<!---FOOTER-->	
		<?php
		  include_once("footer.php");
		?>

      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".button-collapse").sideNav();
         });  
    </script>



              </body>
  </html>