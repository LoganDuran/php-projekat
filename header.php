<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dudlaj.me</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2 class="logo">dudlaj.me</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <button class="loginBtn-popup">Login
                <?php 
                    if(isset($_SESSION["userid"])){
                      
                     ?> 
                     <button class="loginBtn-popup"><?php echo $_SESSION["useruid"]; ?> </button>
                     <?php              
                    }
                    else
                    {
                        ?>
                        <button class="loginBtn-popup">Login </button>
                        <?php              
                    }
                
                ?>
            </button>
        </nav>
    </header>
</body>
