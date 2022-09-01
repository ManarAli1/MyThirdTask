<html>
<body>
<style>
body{
  text-align: center;
  text-transform: uppercase;
  background-color: lightblue;
  font-size: 200%;

}
</style>
</body>
</html>
<?php
$SERVER ="localhost";
$username="root";
$password="";
$dbname="manar";

  $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['number'])){
                    echo " something gone wrong , try again";}
                   else{
                    $num=$_GET['number'];
                    echo "number (" . $_GET['number'];
                    echo ") done submitted";}
 $query= "insert into integers_values values($num)" ;
 $run=mysqli_query($conn,$query)

 ?>
