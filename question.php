<?php include 'db.php'; ?>
<?php 
   session_start();

    $question_id = (int)$_GET['n'];
    $question = "SELECT * FROM question WHERE question_id = '$question_id'";
    $query = $db->query($question);
    $quest = mysqli_fetch_assoc($query);

    $choise = "SELECT * FROM choise WHERE question_number = '$question_id'";
    $query1 = $db->query($choise);

    $totale_result = "SELECT * FROM question";
    $query2 = $db->query($totale_result);
    $total = mysqli_num_rows($query2);

    

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
   
       <title>Quizzer PHP</title>
   
       <!-- Bootstrap core CSS -->
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   
       <!-- Custom styles for this template -->
       <link rel="stylesheet" href="style/main.css">

   
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
            <main class="col-md-12">
               <h1 class="text-center">Start Question</h1>
               <hr>
               <form action="success.php" method="POST">
                   <div class="quiz">Quetion <?=$quest['question_id'] ?> OF <?=$total; ?> :</div>
                   <p class="quiz1"><?php echo $quest['question']; ?></p>
                    <ul class="list">
                    <?php 
                    $i =1;
                     while($choises = mysqli_fetch_assoc($query1)): ?>
        
                      <li> <?=$i++;?> <input type="radio" name="choise" value="<?=$choises['choise_id']; ?>"> <?=$choises['text']; ?></li>
                    <?php endwhile; ?>
                    </ul>
                    <input type="submit" name="click"  class="btn btn-default" value="Next >>"> 
                    <input type="hidden" name="number" value="<?=$question_id; ?>">
                     
                </form>
                <button class="btn btn-default pull-right answer">Show Answer</button>
                
                <div class="corect_answer bg-success"><?=$quest['answer']; ?></div>
                  
            </main>
         
   
       </div><!-- /.container -->
       <hr>
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
       <script>
       $(document).ready(function(){
            'use strict';
         $(function(){
          
           $(".answer").click(function(){
             $('.corect_answer').show();
           });
         });

});
       </script>
     </body>
   </html>
 