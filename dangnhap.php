<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Meta tag Keywords -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193116547-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193116547-1');
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- main -->
    <div class="center-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Đăng nhập</h1>
			
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <form action="" method="post">
                    <div class="pom-agile">
                        <input placeholder="E-mail" name="email" class="user" type="email" required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input placeholder="Password" name="Password" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    </div>
                    <div class="sub-w3l">
                        <h6 style="margin-right: 10px;"><a href="#">Forgot Password?</a></h6>
                        <div class="right-w3l">
                            <input type="submit" name="submit_dn" value="Đăng nhập">
                        </div>
                    </div>
                </form>
                <?php

				if (isset($_POST['submit_dn'])) {
					$email = $_POST['email'];
					$pass = $_POST['Password'];
                    include "conn.php";
					$result = $conn->query("SELECT * FROM member where email = '" . $_POST["email"] . "'");
					if($email	== "admin@123" && $pass == "admin"){
					    ?><script><?php echo("location.href = ' quanli/material-dashboard-dark-edition-v2.1.0/examples/dashboard.php';");?></script><?php
					}
					else if ($result->num_rows > 0) //kiểm tra số dòng
					{
						while ($row = $result->fetch_assoc()) //đọc dữ liệu
						{
							$pass = $row['password'];
							$email = $row['email'];
							if ($pass == $_POST['Password'] && $email == $_POST['email']) {
								header('Location: index2.php?id='.$row['id'].'');
							} else {
								echo "	<SCRIPT>alert('Tai khoan hoac mat khau khong chinh xac')</SCRIPT>";
							}
						}
					}
					else{
						echo "	<SCRIPT>alert('Tai khoan hoac mat khau khong chinh xac')</SCRIPT>";
					}
					
					
				}
				?>
            </div>
        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">
            <p>&copy; 2017 Online Login Form. All rights reserved | Design by <a
                    href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <!--//footer-->
    </div>
</body>

</html>