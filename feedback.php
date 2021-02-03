<?php

include('connect.php');
if(isset($_POST['submit']))
{
  
  //echo "<script> alert('Thank you for your suggestion')</script>";
  $text=$_POST['Textarea'];
  //echo($text);
  $email=$_POST['inputEmail'];
  //echo($email);
  $insert="INSERT INTO `suggestion`(`s_id`, `sugesstion`, `email`) VALUES (null,'$text','$email')";
  $yes=mysqli_query($mycon,$insert);
  if($yes==1){
    ?>
    <script> 
    alert('Thank you for your suggestion');
    window.open('index.html','_self')
    </script>;
    <?php
  }
  else
    {
      ?>
    <script> 
    alert('somthing went wrong');
    window.open('suggestion.html','_self');
    </script>;
    <?php
  }

}

?>