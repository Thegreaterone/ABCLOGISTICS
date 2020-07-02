

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ABCLOGISTICS Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="cprocesslogin.php" method="post">
        <h2 class="text-center"> Cargo Driver Login</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="Name" placeholder=" Name:24 / 7 TRANSPORT & STORAGE, INC" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Street" placeholder=" Street: 9578 82ND ST SE" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="City" placeholder="City: CLEAR LAKE " required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="Zip" placeholder="Zip: 55319 " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="State" placeholder="State:MN " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Country" placeholder="Country: null " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Phone" placeholder="Phone:(320) 743-5788 " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="PhoneExtension" placeholder="PhoneExtension: ">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="Email" placeholder="Email: 24.7transportstorage@gmail.com " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Fax" placeholder="Fax:(320) 743-5748 " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Contacts" placeholder="Contacts" >
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Website" placeholder="Website: " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="MCNum" placeholder="MCNum:500989 " required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Status" placeholder="Status:Active/listess " required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="Login" class="btn btn-warning btn-block">Login</button>
        </div>


        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
    </form>
</div>
</body>
</html>
