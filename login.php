<!DOCTYPE html>
<html lang="de">
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Login</title>
    <link href="./assets/css/style.css" rel="stylesheet"/>
  </head>
  <body>
        <h1>come in:</h1>
        
        <form method="get" target="_blank">
            <input name="mail" type="email" placeholder="please enter mail-adr." required>
            <br><br>
            <input name="password" type="password" placeholder="password" required>
            <br><br>
            <input type="submit" name="submit" value="submit"/>
            <button type="reset">reset</button>                 

        </form>

        <hr>
             
        <nav>
        <ul class="nav-links">
             
             <li><a href="index.php">Home</a></li>
             <li><a href="keys.php">Arne's Electronics</a></li>
             <li><a href="about.php">Band</a></li>
         </ul>
      </nav>
      <section>
        
      </section>
      
      <?php require_once "./layout/footer.php";?>
        
      

    </body>
</html