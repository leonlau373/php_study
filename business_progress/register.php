<?php
    session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
    <!--START LOGIN FORM -->
    <div class = "container">
            <div class = "login" style = "height: 50px; padding: 20px; float:right;">
            <?php if (isset($_SESSION['username'])) { ?>
                <p style = "color:#FFF; padding:10px;">
                    Halo, Selamat Datang <?php echo $_SESSION['username']; ?>
                <a href="process/logout_submit.php" style = "background-color:#4f9a00; color:#FFF; text-decoration:none;"> | Log Out &nbsp; </a>
                </p>

            <?php } else { ?>

                <form action = "process/login_submit.php" method = "POST" style = "padding:20px;">
                    <input type = "text" name = "username" placeholder = "username" required>
                    <input type = "password" name = "password" placeholder = "password" required>
                    <input type = "submit" value = "Login">
                    <a href = "register.php">
                        <input type = "button" value = "Register">
                    </a>
            </form>

            <?php } ?>
            </div>
        </div>
        <!--END LOGIN FORM -->
  <div id="header">
        
           <div class="container">
           		<img id="logo" src="images/logo.png">
                <div id="menu">
                	<ul>
                        <li class="nav1"><a href="index.php">HOME</a></li>
                        <li class="nav2"><a href="news.php">NEWS</a></li>
                        <li class="nav3"><a href="products.php">PRODUCTS</a></li>
                        <li class="nav4"><a href="contact.php">CONTACT</a></li> 
                        <li class="nav5"><a href="gallery.php">GALLERY</a></li>
                    </ul>
                </div>
           </div>
            
     </div>
   <!---------------------------------------- END HEADER -------------------------------->
   <div id="greenLine"></div> 
   <div id="content">
        	
            <div class="container">
                <form class = "form_regis" action = "process/register_submit.php" method = "post" enctype = "multipart/form-data">
                    <h1> Register Member </h1>
                        <label>Username: </label>
                        <input type = "text" name = "username" required>
                        <br><br>
                        <label>Password: </label>
                        <input type = "password" name = "password" required>
                        <br><br>
                        <label>Email: </label>
                        <input type = "email" name = "email" required>
                        <br><br>
                        <label>Gender: </label>
                        <input type = "radio" name = "gender" value="male" required> Male
                        <input type = "radio" name = "gender" value="female" required> Female
                        <br><br>
                        <label>City: </label>
                        <input type = "text" name = "city" required>
                        <br><br>
                        <label>Photo: </label>
                        <input type = "file" name = "photo_member" required>
                        <br><br>
                        <label>Address: </label>
                        <textarea name = "address" required></textarea>
                        <br><br>

                        <input type = "submit" value = "Register">
                </form>
            </div><!--- END CONTENT WRAPPER -->
            
       </div> 
<!--------------------------------------- END CONTENT CONTENT--------------------------->
	   <div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
       </div>
<!---------------------------------------- END FOOTER --------------------------------->
</div>
	<script src="lightbox/js/jquery-1.11.0.min.js"></script>
	<script src="lightbox/js/lightbox.js"></script>
</body>
</html>
