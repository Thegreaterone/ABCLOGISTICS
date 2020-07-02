
<!-- <form class="form-inline mr-auto mb-4">
<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
<button class="btn peach-gradient btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Search</button>
</form> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>ABC-Logistics Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<style>
body{
  background-color: whitesmoke;

}
input{
  width:40%;
  height:5%;
  border:1px;
  border-radius:5px;
  padding:8px 15px  8px 15px;
  margin:10px 0px 15px 0px;
  box-shadow:1px 1px 2px 1px grey;
}

</style>

</head>

<body>
  <center>
<h1>Search for Cargo Driver</h1>

<form class="" action="#" method="post">
  <input type="text" name="City" placeholder="Enter City To Search">
<br/>
<input type="submit" name="search" value="Search">
</form>
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'abclogistics');
if(isset($_POST['search'])){
  $City = $_POST['City'];

  $query = "SELECT * FROM cargodriver WHERE City='$City'";
  $query_run = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
  {
    ?>
 <form class="" action="" method="post">

       <input type="text" class="form-control" name="Name" value="<?php echo $row['Name']?>" placeholder=" Name:24 / 7 TRANSPORT & STORAGE, INC" required="required">


       <input type="text" class="form-control" name="Password" value="<?php echo $row['Password']?>" placeholder="Password" required="required">


       <input type="text" class="form-control" name="Street" value="<?php echo $row['Street']?>" placeholder=" Street: 9578 82ND ST SE" required="required">


       <input type="text" class="form-control" name="City" value="<?php echo $row['City']?>"placeholder="City: CLEAR LAKE " required="required">



       <input type="text" class="form-control" name="Zip" value="<?php echo $row['Zip']?>" placeholder="Zip: 55319 " required="required">


       <input type="text" class="form-control" name="State" value="<?php echo $row['State']?>" placeholder="State:MN " required="required">


       <input type="text" class="form-control" name="Country" value="<?php echo $row['Country']?>" placeholder="Country: null " required="required">


       <input type="text" class="form-control" name="Phone" value="<?php echo $row['Phone']?>" placeholder="Phone:(320) 743-5788 " required="required">


       <input type="text" class="form-control" name="PhoneExtension" value="<?php echo $row['PhoneExtension']?>" placeholder="PhoneExtension: ">


       <input type="text" class="form-control" name="Email" value="<?php echo $row['Email']?>"placeholder="Email: 24.7transportstorage@gmail.com " required="required">


       <input type="text" class="form-control" name="Fax" value="<?php echo $row['Fax']?>" placeholder="Fax:(320) 743-5748 " required="required">


       <input type="text" class="form-control" name="Contacts" value="<?php echo $row['Contacts']?>"placeholder="Contacts" >


       <input type="text" class="form-control" name="Website" value="<?php echo $row['Website']?>" placeholder="Website: " required="required">


       <input type="text" class="form-control" name="MCNum" value="<?php echo $row['MCNum']?>" placeholder="MCNum:500989 " required="required">


       <input type="text" class="form-control" name="Status" value="<?php echo $row['Status']?>" placeholder="Status:Active/listess " required="required">

 </form>
    <?php
  }

}
 ?>
</center>
</body>
</html>
