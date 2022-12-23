<!DOCTYPE HTML>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="My first php page" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="shuang xia" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>My First PHP Page</title>
  </head>
  
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">calculation of pi</span>
        </div>
      </header>
        
      <main class="mdl-layout__content" style="margin-left:75px;">
        <!-- Simple Textfield -->
        
      <?php
        echo "<form method=\"post\" name=\"whoareyou\" action=\"handler.php\">\n";
         echo "<div class=\"mdl-textfield mdl-js-textfield\">\n";
          echo  "<input class=\"mdl-textfield__input\" type=\"text\" id=\"diameter\" name=\"diameter\">\n";
          echo "<label class=\"mdl-textfield__label\" for=\"diameter\"> What is the iteration?</label>\n";
          if (isset($_GET) && $_GET['error'] == 1) {
            echo "<p class=\"variablecolour\">please enter a valid number (should be positive)</p>";
          }
          echo "</div>\n";
      ?>
      <?php
         echo "<div>\n";
            echo "<button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\">
              Submit
            </button>\n";
         echo "</div>\n";
        echo "</form>\n";
            ?>
      </main>

    </div>
  </body>
</html>