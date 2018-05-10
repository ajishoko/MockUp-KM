<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blibli.com</title>
		<link rel="stylesheet" href="libs/bootstrap/dist/css/bootstrap.min.css">
		
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="beranda.html"  id="websiteName">
                    	<img src='img/Blibli-logo.png' height='35px' id='logoF' style='margin-top:-8px;'>
                    </a>
                </div>
            	<ul class="nav navbar-nav">
			      	<li class="active"><a href="beranda.html">Utama</a></li>
					<li><a href="forum-portal.html">Forum</a></li>
			    </ul>
                 <script type="text/javascript">
                    function pindah()
                    {
                        var username = document.getElementById("username").value;
                        var password = document.getElementById("password").value;
                        if(username=="username00" && password=="password"){
                            alert("Login Sukses, klik button OK untuk dialihkan ke halaman Anda.");
                            window.location.href="beranda.html";
                        }
                        else{
                            alert("Login Gagal, silahkan periksa username atau password anda.");
                        }
                    }
                </script>
                <form class="navbar-form navbar-right">
                    <form class="navbar-form navbar-right" method="post" action="./index.php">
                        <div class="form-group">
                            <input class="form-control input-sm" type="text" name="username" id="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input class="form-control input-sm" type="password" name="password" id="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="button" class='btn btn-primary' value="Masuk" id="tombol-login" onclick="pindah()">
                        </div>
                    </form>
                </form>
            </div>
        </nav>
		<br>
        <div class="jumbotron" style="background-image: url(img/Blibli-logo.png); height: 55vh; width:100vw; background-position: center center; background-repeat: no-repeat;">
        </div>
        <div class="footer" id="footerWeb" style='text-align: center;'>
            <hr>
            <h4><b>&copy; 2018 - Kelompok 7 KM-A</b></h4>
            <br>
            <h6>Alham Febian Rinaldy / 1506757636</h6>
            <h6>Irfin Handiliastawan / 1506689704</h6>
            <h6>Yudistira Ramadhan / 1506689635</h6>
           	<br>
        </div>
	</body>
</html>