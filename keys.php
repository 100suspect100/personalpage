
<?php require_once('./assets/layout/header.php'); ?>
  <body>
    
    <hr />
    <h1>Electronic Music</h1>

    <p>My favourite synthesizers:</p>
    <p><!--Table row = Reihe. tr --></p>
    <p><!--Table column = Spalte. td--></p>

    <table border="10x" width="300px">
      <tr>
        <td>Fairlight</td>
        <td>CMI III</td>
        <td><img src="./assets/images/CMI.jpg" alt"" width="100" height="70"></td>
      </tr>

      <tr>
        <td>Yamaha</td>
        <td>DX-1</td>
        <td><img src="./assets/images/DX1.jpg" alt"" width="100" height="70"></td>
      </tr>

      <tr>
        <td>PPG</td>
        <td>Wave 2.2</td>
        <td><img src="./assets/images/PPG.jpg" alt"" width="100" height="70"></td>
      </tr>

      <tr>
        <td>Ensoniq</td>
        <td>ESQ-1</td>
        <td><img src="./assets/images/ESQ.jpg" alt="" width="100" height="90" /></td>
      </tr>
    </table>
    <nav>
    <ul class="nav-links">
             
             <li><a href="about.php">Band info</a></li>
             <li><a href="index.php">Home</a></li>
             <li><a href="login.php">Login</a></li>
         </ul>
  </nav>
  <?php require_once('./assets/layout/footer.php'); ?>
  </body>
</html>
