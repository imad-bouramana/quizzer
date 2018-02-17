
<?php include 'db.php'; ?>
<?php 
   session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
     <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
       <meta name="description" content="">
       <meta name="author" content="">
       <link rel="icon" href="/favicon.ico">
       <link rel="stylesheet" href="style/main.css">
       <title>Quizzer PHP</title>
   
       <!-- Bootstrap core CSS -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   
       <!-- Custom styles for this template -->
      
       <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
       <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
       
       <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
       <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
     </head>
   
     <body>
   
      
   
       <div class="container">
   
         <div class="starter-template">
           <h1 class="text-center">PHP Quizzer</h1>
           <hr>
         </div>
   
       </div><!-- /.container -->
       <div class="container">
          <main>
           
          <div class="text-center">
              <h3>Congratulation : You Are Finish The Quizzer </h3>
             <p class="lead">Your Scor Is : <?php 
             $result = isset($_SESSION['score']) ? $_SESSION['score']: 0;
             echo $result * 4 ." %";
             session_destroy(); ?>
              </p>
             <a href="question.php?n=1" class="btn btn-default" value="" name="submit">Take Again</a>
             <hr>
          </div>
       </main>
       </div>
        <footer class="container">
           <div class="text-center">&copy; 2017 Quizzer</div>
        </footer>
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
     </body>
   </html>
 