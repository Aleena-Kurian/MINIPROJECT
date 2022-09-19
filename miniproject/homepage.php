<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>homepage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="homepage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>
            <body>
            <div class="header">
            <h1>Cake Boutique</h1>
            <div class="logo">
            <img src="img/logo.png" alt="">
            </div>
            </div>

            <div class="topnav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
			<a href="login.php">Login</a>
			<a href="index.php"alt=""><i class="fa" style="font-size:24px">&#xf07a;</i>
			<?php
			$count=0;
			$count=count($_SESSION["cart"]);
			?>
			<span><?php echo"$count";?></span></a>
            </div>
			
			<section class="home" id="home">
            <div class="homeContent">
            <h2>Order Your Cake </h2>
            <h2>Make Your Day Special </h2>
            <p>Celebrate The Day With Us</p>
            <div class="home-btn">
                <a href="#"><button>Customize Your Own Cake</button></a>
            </div>
        </div>
    </section>
	<div id="gridview">
      <div class="heading">Exclusive Products</div>
	  <?php
	include_once('./connection.php');
	$query="SELECT * FROM `cakes` ORDER BY id ASC";
            if($result=$connect->query($query)){
                while($row = $result->fetch_assoc()) { 
                    ?>
                  <div class="image">
					<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["img"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["name"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]."₹   &nbsp;&nbsp".$row["weight"]."kg"; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>  
                    
        <?php
    
                }
            }
			
       
        ?>
	  
	  
	  
	  
	  
	
    </body>
	</div>
	</form>
</html>