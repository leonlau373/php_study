<?php
    session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>News</title>
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
            <form id="search" name="search" method="GET" action="news_search.php">
            <label for="search"></label>
            <input type="text" name="search" id="search">
            <input type="submit" name="submit" id="submit" value="Search">
        	<?php
                include "config/config.php";
                $view = 3;
                if(isset($_GET['page']))
                {
                    $page_aktif = $_GET['page'];
                }
                else
                {
                    $page_aktif = 1;
                }

                $awal_data = ($page_aktif - 1) * $view;

                $sql = "SELECT * FROM news_tbl LIMIT $awal_data, $view";

                $data = mysqli_query($koneksi, $sql);
                

                /*
                $data = $koneksi->query($sql);
                $rownews = $qnews->fetch_assoc();

                */
            ?>
            

            <div class="container">
            <?php
                while($rows = mysqli_fetch_array($data))
                {
                    ?>
                    <div class="newsitem">
                        <div class="date_circle"><p class="day">28<span class="month">06</span></p></div>
                        <h2 class="news_title"><?php echo $rows['title']; ?></h2>
                        <div class="clear"></div>
                        <img src="news_images/<?php echo $rows['images'] ;?>" class="news_image" style = "width: 200px">
                        <p class="news_synopsis"><?php echo substr($rows['description'],0,250), "..."; ?></p>
                        <a href="news_detail.php?id_news=<?php echo $rows['id_news']?>" class="link_detail">Read More</a>
                    </div>
                <?php
                }
            ?>

            <?php
                $sql_total = "SELECT * FROM news_tbl";
                $qtotal = mysqli_query($koneksi, $sql_total);
                $total_data = $qtotal->num_rows; //11
                $total_page = ceil($total_data / $view);
                echo $total_data;
            ?>
            <div class = "pembungkuslink" style = "padding-top: 20px; height: 30px; border: 1px solid red">
                <?php
                for($i = 1; $i <= $total_page; $i++)
                {
                    if($i == $page_aktif)
                    {
                        ?>
                        <span class = "pagelinkactive"><?php echo $i; ?></span>

                        <?php
                    }
                    else
                    {
                        ?>
                        <a href = "news.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php
                    }
                }
                ?>
            </div>
            </div><!--- END CONTENT WRAPPER -->
            
        </div>
<!---------------------------------------- END CONTENT ------------------------------->
		<div id="footer">
        
        	<div class="container">
            	<p> Copyright &copy; Your Company All Right Reserved</p>
            </div>
        
        </div>
<!---------------------------------------- END FOOTER --------------------------------->  
</div>
</body>
</html>
