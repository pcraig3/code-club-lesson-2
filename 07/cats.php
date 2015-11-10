<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cats!</title>
    <link rel="stylesheet" href="cats.css">
    <script src="utils.js"></script>
    <script src="cats.js"></script>
  </head>
  <body>
    <h1>All about <?php // echo 'CATS'; ?>!</h1>
    <p>Cats are cute.  Moreover, cats like things.</p>
    <div id="list_container">
      <h3>What things do cats like?</h3>
      <ul>
      <?php 

        // $things_cats_like = array('boots', 'suits', 'fruits', 'roots', 'flutes', 'beirut');
        // foreach ($things_cats_like as $thing) {
        //   echo '<li>Cats like ' . $thing . '</li>';
        // }

      ?>
        <li>Cats like boots</li>
        <li>Cats like suits</li>
        <li>Cats like fruits</li>
        <li>Cats like roots</li>
        <li>Cats like flutes</li>
        <li>Cats like beirut</li>
      </ul>
    </div>
  </body>
</html>