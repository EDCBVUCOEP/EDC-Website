<?php

    $error = ""; $successMessage = "";

    if($_POST)

    {

            if(!$_POST["inputFname"]){

                $error .= "Enter first name.<br>";
            }

            if(!$_POST["inputLname"]){

                $error .= "Enter last name.<br>";
            }


            if(!$_POST["email"]){

                $error .= "An email address is required.<br>";
            }

            if(!$_POST["content"]){

                $error .= "The content address is required.<br>";
            }

            if(!$_POST["subject"]){

                $error .= "The subject address is required.<br>";
            }

            if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

              $error .= "Invalid email format.<br>";
                }

            if($error != "")
                {
                        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
                }

                else  {

                    $inputFname= $_POST['inputFname'];
                    $inputLname= $_POST['inputLname'];
                    $emailTo = "edcbvucoep@gmail.com";
                    $subject = $_POST['subject'];
                    //$content = "<strong>Name:</strong>" .($_POST['inputFname']). ($_POST['inputLname']);
                    //$content = $_POST['content'];
                    $content = "First Name :".$inputFname.'  Last Name :'.$inputLname."\n \n".$_POST['content'];
                    $headers ="From: ".$_POST['email'];//.'<'.$_POST['inputFname'].$_POST['inputLname'];


                    if(mail($emailTo, $subject, $content, $headers)) {

                        $successMessage = '<div class="alert alert-success" role="alert">
                            We\'ll get back to you ASAP!
                            </div>';
                        }


                    else
                    {

                        $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later </strong></p></div>';


                    }


                    //echo $inputFname." ".$inputLname." ".$subject." ".$headers." ".$content;
                }
    }

 ?>


<!DOCTYPE html>
<html lang="en">


  <head>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="img/flavcon.png" style="height:128px;width:128px;" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">



  </head>

  <body>




      <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">

      <a class="navbar-brand" href="index.html"> <img src="img/edcpng.png" alt="Mountain View" style="width:120px;height:40px;">   </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active ">
            <a class="nav-link" href="index.html">Home   <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="about-us.html">About Us   </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="initiatives.html">Initiatives   </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.html">Events   </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactus.php">Contact Us   </a>
          </li>
         </ul>
      </div>
    </nav>

      <div class="container">

    <h1 style="padding-top:20px">CONTACT US</h1>
    <div id="error"><? echo $error.$successMessage; ?></div>


<div class="row mt-3">

<div class="col-md-5">

    <form method="post">
        <form>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputFname" class="col-form-label">First Name</label>
                <input type="Name" class="form-control" id="inputFname" name="inputFname" placeholder="First Name">
              </div>

              <div class="form-group col-md-6">
                <label for="inputLname" class="col-form-label">Last Name</label>
                <input type="Name" class="form-control" id="inputLname" name="inputLname" placeholder="Last Name">
              </div>
            </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email-id">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject">
    </div>


  <div class="form-group">
    <label for="content">How can we help you?</label>
    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
  </div>
  <button id="submit" type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Submit</button>
</form>
</div>

<div class="col-md-7">
  <div>
   <iframe width="100%" height="450" frameborder="0" style="border:0"
   src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJXa5GrsfqwjsRhNzgi8wWLvU&key=AIzaSyBipjvit8EJ0O3yuLwDhMAP1QOH6D2OBx4" allowfullscreen></iframe>
  </div>
</div>

</div>
</div>
        
<hr class="style1">
          
          
          
<footer style="background-color:#151515;">
  <div class="container mb-3">
    <div class="row mt-3">
	 <div class="col-md-3 col-xs-3 mt-4">
      <a href="index.html"><img src="img/edc-white.png" height="40px" width="120px"  ></a><br><br>
      <p style="color:white;"> Bhararti Vidyapeeth University,<br>
     College of Engineering,<br>
      Pune-411043.</p>
    </div>

	<div class="col-md-3 col-xs-3 mt-3">

     <h4 style="color: white">Main</h4><br>
      <a href="index.html" style="color:white;">Home</a><br>
      <a href="about-us.html" style="color:white;">About Us</a><br>
      <a href="contactus.php" style="color:white;">Contact Us</a><br>
      <a href="initiatives.html" style="color:white;">Initiatives</a><br>
    
    </div>

    <div class="col-md-3 col-xs-3 mt-3">
    <h4 style="color: white">Events</h4><br>
      <a href="" style="color:white;">Startup Conclave</a><br>
      <a href="" style="color:white;">SEC 17</a><br>
      <a href="" style="color:white;">E-Summit</a><br>
      <a href="" style="color:white;">Internstellar</a><br>
    </div>

    <div class="col-md-3 col-xs-3 mt-3">
    <h4 style="color: white">Social</h4><br>
      <a href="https://www.facebook.com/edcbvucoep/?fref=ts"><img src="img/fb.png" height="20px" width="20px"></a><br>
      <a href="https://twitter.com/edcbvucoep"><img src="img/twi.png" height="20px" width="20px"></a><br>
      <a href="https://plus.google.com/u/0/105610136565320498225"><img src="img/goog.png" height="20px" width="20px"></a><br>
      <a href="https://www.linkedin.com/in/e-cell-bvucoep-a21389107/"><img src="img/li.png" height="20px" width="20px"></a><br>

      <ul class="nav justify-content-start">
          <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-facebook"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-google-plus"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-instagram"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-twitter"></i></a></li>
          <li class="nav-item"><a href="#" class="nav-link pr-0"><i class="fa fa-pinterest-p "></i></a></li>
      </ul>

    </div>
  </div>
  </div>  
<div class="container-fluid mt-2" style="background-color: #020202">
   <div class="row">
     <p class="text-center" style="color: white;">
       Entrepreneurship Development Cell | Bharati Vidyapeeth University College of Engineering, Pune (INDIA)
     </p>
   </div>
</div>
   </footer>

          

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, thens Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



    <script type="text/javascript">

    $("form").submit(function (e) {

var error = "";

if ($("#inputFname").val() == ""){

    error += "First name required.<br>";
}

if ($("#inputLname").val() == ""){

    error += "Last name required.<br>";
}

if ($("#email").val() == ""){

    error += "The email address required.<br>";
}

if ($("#subject").val() == ""){

    error += "The subject field required.<br>";
}

if ($("#content").val() == ""){

    error += "The content field required.";
}

if(error != "") {

$("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

return false;
}

else {

return true;
}

});

    </script>

  </body>
      
</html>
