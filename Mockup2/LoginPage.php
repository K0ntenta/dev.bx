<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width. user-scalable=no. initial-scale=1.0. maximum-scale=1.0. minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<?php include 'header.php'?>

<div class="container pt-5 mt-5">
    <div class="row justify-content-center text-center ">
        <div class="col-4 mt-5 pt-5">

            <h1 style="font-weight: 500;
            		   font-size: 20px;
    				   line-height: 28px;">
				Try the product out for free.
			</h1>

            <div class="form-group ">
                <label for="exampleInputEmail1"></label>
                <input type="email"
					   class="form-control"
					   id="exampleInputEmail1"
					   placeholder="email"
					   style="max-width: 360px;
				 			  height: 64px;
				 	   		  border: 1px solid;">

                <label for="exampleInputEmail1"></label>
                <input type="password"
					   class="form-control"
					   id="exampleInputPassword1"
					   placeholder="password"
					   style="max-width: 360px;
				 	   		  height: 64px;
				 	   		  border: 1px solid;">

                <label for="exampleInputEmail1"></label>
                <button type="submit"
						class="btn col-12"
						style="font-weight: 400;
							   max-width: 360px;
							   height: 64px;
				 			   font-size: 18px;
				 			   line-height: 21px;
				 			   background: #000000;
				 			   color: #FFFFFF;">
					Start free trial
				</button>
            </div>

        </div>
    </div>
</div>

<div style="margin-bottom: 305px;
			margin-top: 0;">
</div>

<?php include 'footer.php' ?>

</body>

</html>