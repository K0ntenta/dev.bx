<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width. user-scalable=no. initial-scale=1.0. maximum-scale=1.0. minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<?php include "header.php"?>

<div class="container-fluid text-left">
    <div class="row justify-content-center align-items-start" style="padding-top: 128px; background: #F2F2F2;">
        <div class="col-md-5" style="max-width: 707px;">
            <h1 style="font-weight: 700;
                       font-size: 48px;
                       line-height: 140%;">
                Feature that is amazing
            </h1>
            <p class="text3"
               style="margin-top: 61px;
                      font-weight: 500;
			          font-size: 20px;
			          line-height: 28px;
			          color: #000000;">
                Lorem ipsum dolor sit amet, consectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </p>
            <ul>
                <li style="margin-top: 25px; font-weight: 500; font-size: 20px; line-height: 28px;">Benefit of Feature</li>
                <li style="margin-top: 24px; font-weight: 500; font-size: 20px; line-height: 28px;">Benefit of Feature</li>
                <li style="margin-top: 24px; font-weight: 500; font-size: 20px; line-height: 28px;">Benefit of Feature</li>
            </ul>
            <button class="btn col-4"
                    style="background: #F2C94C;
                           margin-left: 15px;
			               margin-top: 78px;
			               max-width: 310px;
			               height: 64px;
			               color: #000000;
			               font-weight: 500;
			               font-size: 18px;
			               line-height: 21px;">
                Buy
            </button>
            <div style="margin-bottom: 110px; margin-top: 0"></div>
        </div>
        <div class="col-md-3">
            <img src="Images/moto4.png"
                 class="img-fluid"
                 alt="moto"
                 style="display: block;
			            margin-left: auto;
			            margin-right: auto;
			            border-radius: 8px;">
        </div>
    </div>
</div>


<div class="container-fluid text-left" style="margin-top: 150px;">

    <div class="row justify-content-center">

        <div class="col-8">
            <h1 style="margin-left: 56px;
                       font-weight: 700;
                       color: #000000;
			           font-size: 48px;
			           line-height: 140%;">
                Value Proposition
            </h1>
            <table class="table table-bordered"
                   style="max-width: 1173px;
			              margin-top: 19px;
			              margin-left: 56px">
                <thead style="background: #F2F2F2;">
                <tr>
                    <th scope="col" style="width: 306px; text-align: center;
					 font-size: 18px; line-height: 21px; color: #000000; font-weight: 500;">Value Name</th>
                    <th scope="col" style="width: 861px;
					 font-size: 18px; line-height: 21px; color: #000000; font-weight: 500;">Property</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">First value proposition</td>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">First Property proposition</td>
                </tr>
                <tr>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">Second value proposition</td>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">Second Property proposition</td>
                </tr>
                <tr>
                    <th class="text-center" colspan="2" style="background: #F2F2F2;
					font-size: 18px; line-height: 21px; color: #000000; font-weight: 500;">Addinational Property</th>
                </tr>
                <tr>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">First value proposition</td>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">First Property proposition</td>
                </tr>
                <tr>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">Second value proposition</td>
                    <td style="font-size: 18px; line-height: 21px; color: #333333; font-weight: 400;">Second Property proposition</td>
                </tr>
                </tbody>
            </table>
            <button class="btn col-4"
                    style="background: #F2C94C;
                    margin-left: 56px;
			        margin-top: 78px;
			        max-width: 310px;
			        height: 64px;
			        color: #000000;
			        font-weight: 500;
			        font-size: 18px;
			        line-height: 21px;">
                Buy
            </button>
        </div>
    </div>
</div>

<div style="margin-bottom: 130px; margin-top: 0"></div>

<?php include 'links.php' ?>

<?php include 'footer.php' ?>

</body>
</html>