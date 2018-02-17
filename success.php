<?php include 'db.php'; ?>
<?php 
   session_start();


   if(!isset($_SESSION['score'])){
       $_SESSION['score'] = 0;
   }
   if($_POST){
   	   $number_q = $_POST['number'];
   	   $choise_q = $_POST['choise']; 
   	   $next = $number_q+1;

   	   $question_corect = "SELECT * FROM choise WHERE question_number = '$number_q' AND correct = 1";
       $query = $db->query($question_corect);
       $result = mysqli_fetch_assoc($query);

       $totale_result = "SELECT * FROM question";
       $query1 = $db->query($totale_result);
       $total = mysqli_num_rows($query1);

       $row = $result['choise_id'];
       if($row == $choise_q){
       	   $_SESSION['score']++;
       }
       if($number_q == $total){
           header("LOCATION: final.php");
           exit();
       }else{
       	  header("LOCATION: question.php?n=".$next);
       }
   	}
    ?>
