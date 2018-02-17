<?php include 'db.php'; ?>
<?php 
    $totale_result = "SELECT * FROM question";
    $query1 = $db->query($totale_result);
    $total = mysqli_num_rows($query1);
if(isset($_POST['submit'])){
   $question_nember = $_POST['number'];
   $question_text = $_POST['text'];
   $correct = $_POST['correct'];
   
   $choises = array();
   $choises[0] = $_POST['choise1'];
   $choises[1] = $_POST['choise2'];
   $choises[2] = $_POST['choise3'];
   $choises[3] = $_POST['choise4'];
   $choises[4] = $_POST['choise5'];

   $answer = $_POST['answer']; 
   
   $insert_question = "INSERT INTO question (question_id, question, answer) VALUES ('$question_nember','$question_text','$answer')";
   $query = $db->query($insert_question);

   if($query){
      foreach ($choises as $choise => $value) {
          if($choise == $correct){
             $is_corect = 1;
          }else{
            $is_corect = 0;
          }
          $insert_choise = "INSERT INTO choise (question_number, correct, text) VALUES ('$question_nember', '$is_corect','$value')";
          $query4 = $db->query($insert_choise);
          if($query4){
             $msg = '  Question Added By Success !';
          }
      }
   }
}


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
            <div class="text-center">
             <h2>Add Question :</h2>
             <?php
             // if($query4){
              //  echo '<p>'.$msg.'</p>';
             // }
             ?>
            </div>
        <form action="add.php" method="POST" role="form" class="form-horizontal">

            <div class="form-group">
                <label for="" class="control-label col-md-offset-2 col-md-2">Qustion Number :</label>
                <div class="col-md-2">
                   <input type="number" class="form-control" min="0" name="number" value="<?=$total+1; ?>" >
                </div>
            </div>
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Question Test :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control"  name="text" required />
              </div>
           </div> 

           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Choise #1 :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="choise1" required />
              </div>
           </div> 
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Choise #2 :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="choise2" required />
              </div>
           </div> 
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Choise #3 :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="choise3" required />
              </div>
           </div> 
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Choise #4 :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="choise4" required />
              </div>
           </div> 
          
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">Choise #5 :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="choise5" >
              </div>
           </div> 
           <div class="form-group">
                <label for="" class="control-label col-md-offset-2 col-md-2">Correct Answer :</label>
                <div class="col-md-2">
                   <input type="number" class="form-control"  min="0" name="correct" required   />
                </div>
           </div>
           <div class="form-group">
              <label for="" class="control-label col-md-offset-2 col-md-2">answer :</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="" name="answer" >
              </div>
           </div> 
           <div class="form-group">
              <div class="col-md-6 col-md-offset-2">
                <button type="submit" class="btn btn-primary" name="submit">submit</button>
      
              </div>
           </div> 
        
              
           </form>
      </main>
    </div>
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
 </body>
</html>
