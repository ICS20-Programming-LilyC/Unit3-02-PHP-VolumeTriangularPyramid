<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="=Volume of Triangular Pyramid">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest.png">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    
    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css" />

    <!--Title-->
    <title>Calculating the Volume of a Triangular Pyramid in PHP</title>
  </head>
  <body>
    <h1>Calculating the Volume of a Triangular Pyramid in PHP with User Input</h1>
    
    <!--Div-->
    <div id="div">
      <h3>Insert you input:</h3>

    <!--Form for user input-->
      <form action="./calculations.php" method="post" target="display-result">
        <label for="pyramid-height">Pyramid Height (cm)</label>
        <input type="float" name="pyramid-height" placeholder="Pyramid height...">
        <br>
        <br>
        <label for="base-length">Base Length (cm)</label>
        <input type="float" name="base-length" placeholder="Base lenght...">
        <br>
        <br>
        <label for="base-height">Base Height (cm)</label>
        <input type="float" name="base-height" placeholder="Base height ...">
        <br>
        <br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
    </div>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
  </body>
</html>