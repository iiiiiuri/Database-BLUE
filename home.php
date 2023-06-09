<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  </head>
  <link rel="stylesheet" href="stylesheet/stylesHome.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;700&display=swap" rel="stylesheet">
  <body>
    <header class = "cabecalho">
      <a class = "menuToggle">
      <img src="docs/Toggle.svg"></img></a>
      <div class ="logo">
        <img src="docs/DB-BLUE.svg" alt="logo" width="504" height="400"></img>
      </div>
      <nav class = "menu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="price.php">Price</a></li>
        </ul>
      </nav>
    </header>
    <div class = "main">
      <div class= "left">
        <img src="docs/imgHome1.svg" class="imagem"></img>
      </div>
      <div class = "right">
        <div class = "boxTexto">
          <h1>Upload your files for free!</h1>
          <P>Create your free account now with a storage capacity of up to 500MB.
            This space can be used to store documents, photos, videos and any other type of file,
            which can be accessed from any device connected to the internet.
          </P>
        </div>
        <form action="index.php">
        <button type="submit" name="Upload" id="Upload" a>
          Upgrade <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
          <lord-icon
            src="https://cdn.lordicon.com/udwhdpod.json"
            trigger="loop"
            delay="1000"
            colors="primary:#ffffff,secondary:#ffffff"
            stroke="100"
            style="width:7vw;height:7vh;margin-left:1vw;padding:0;">
          </lord-icon>
        </button>
        </form>
      </div>
    </div>
  </body>
</html>
