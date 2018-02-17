<?php include 'db.php'; ?>
<?php 
   session_start();
   $questions = "SELECT * FROM question";
   $query2 = $db->query($questions);
   $row = mysqli_num_rows($query2);
 
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
       <link href="starter-template.css" rel="stylesheet">
   
       <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
       <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
       <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   
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
          <div class="quizes">
             <p class="lead">Test Your PHP Knowledge</p>
             <p>This Is multipe Quis To Test Your Knowledge PHP </p>
             <p><strong>Number of Question :</strong> <?= $row;?></p>
             <p><strong>Type :</strong> Multipe Choise</p>
             <p><strong>Estimade Time :</strong> <?= $row * .5;?> minutes</p>
             
             
             <hr>
          </div>
          <a href="question.php?n=1" class="btn btn-default quizes">Start Quiz</a>
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
 