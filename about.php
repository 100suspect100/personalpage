<?php
require_once "./layout/header.php";
?>

<head>
</head>

<body>
  <!-- so geht ein Kommentar -->
  <h1>About the band: </h1>
  <h3>We are sometimes unusual and<u> sometimes</u> suspect!</h3>
  <p>
    Check out the forthcoming album:<br>
    Turning Corners, available on:
    <a href="https://www.amazon.de/This-Train/dp/B0C4G2P1YR" target="_blank">
      <h3>amazon</h3>
    </a>
    <a href="https://open.spotify.com/intl-de/artist/3dU95kTX9vnhxNwV5DkvXr" target="_blank">
      <h3>spotify</h3>
    </a>
    <a href="https://music.apple.com/de/album/turning-corners/1686646187" target="_blank">
      <h3>apple music</h3>
    </a>
  </p>

  <img src="./assets/images/usp.jpg" width="265" height="400" alt="sorry, no pic">
  <br><br>

  <form method="get">
    <label>Incredible!</label><input type="radio" name="u like it" value="super!">
    <label>Awsome!</label><input type="radio" name="u like it" value="buy"><br><br>
  </form>


  <nav>
  <ul class="nav-links">
             
             <li><a href="index.php">Home</a></li>
             <li><a href="keys.php">Arne's Electronics</a></li>
             <li><a href="login.php">Login</a></li>
         </ul>
  </nav>
  <?php require_once "./layout/footer.php"; ?>
</body>

</html>