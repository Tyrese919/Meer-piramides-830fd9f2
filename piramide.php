<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bit Academy Priamide</title>
      <link rel="stylesheet" href="Piramide.css">
  </head>
  <body>

    <table>

      <?php

        for ($i=0; $i < 10 ; $i++) {

          ?><tr><?php

          for ($j=1; $j <= $i ; $j++) {
            ?><td class="cell black"></td><?php
              }

            ?></tr><?php
          	  }
            ?>

    </table>

  </body>
</html>
