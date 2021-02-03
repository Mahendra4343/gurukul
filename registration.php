<?php
if (isset($_POST['submit']))
{
//include("connect.php");
require("connect.php");
$Select=($_POST['inputSelect']);
//echo $Select;
$Email=($_POST['inputEmail']);
//echo $Email;
$Name=($_POST['inputName']);
//echo $Name;
$Fname=($_POST['inputFname']);
//echo $Fname;
$Mname=($_POST['inputMname']);
//echo $Mname;
$Mobileno=($_POST['inputMobileno']);

$Address=($_POST['inputAddress']);
//echo $Address;
$Address2=($_POST['inputAddress2']);
//echo $Address2;
$City=($_POST['inputCity']);
//echo $City;
$State=($_POST['inputState']);
//echo $State;
$Zip=($_POST['inputZip']);
//echo $Zip;



$insert="INSERT INTO `registration`(`s_id`, `class`, `email`, `student_name`, `father_name`, `mother_name`, `mobile_no`, `adress`, `adress2`, `city`, `state`, `zip`) VALUES (Null,'$Select','$Email','$Name','$Fname','$Mname','$Mobileno','$Address','$Address2','$City','$State','$Zip')";


mysqli_close($mycon);

$yes=mysqli_query($mycon,$insert);
if ($yes==1) {
	?>
	 <script> 
	 alert('Data enter sucessfully');
	 window.open('index.html','_self');
	 </script>
	 <?php
	 }
else
    {
    	?>
	<script> 
    alert('somthing went wrong');
    window.open('registration.html','_self');
   </script>;
   <?php
   }

}

?>