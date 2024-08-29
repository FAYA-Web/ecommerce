<!DOCTYPE html>
<html>
<head>
	<title>MENU DU SITE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- NAVIGATION -->
    <div class="navbar">
        <div class="logo">
            <a href="index.html"><img src="images/logo.PNG"  style="height: 70px;width:90px;"></a> 
        </div>
        <nav>
            <ul id="menuItems">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="products.html">Boutique</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="account.html">contact</a></li>
            </ul>
        </nav>
        <a href="#"><img src="images/cart.png" alt="" style="width: 30px;height: 30px;"></a>
        <img src="images/menu.png" class="menu-icon" alt="" onclick="menutoggle()">
    </div>
	<!-- js -->
		<script>
        var menuItems=document.getElementById("menuItems");
        menuItems.style.maxHeight="0px";
        function menutoggle(){
            if (menuItems.style.maxHeight=="0px"){
                menuItems.style.maxHeight="200px";
            }
            else{
                menuItems.style.maxHeight="0px";
            }
        }
    </script>
</body>
</html>