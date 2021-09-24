<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<!doctype html>
<html lang="en-CA" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?php perch_content('Site Description'); ?>" />
<meta name="keywords" content="<?php perch_content('Site Keywords'); ?>" />
<title><?php perch_content('Site Title'); ?> | <?php perch_pages_title(); ?></title>

<link type="text/css" rel="stylesheet" href="/css/styles.css" />

</head>
<body>

<div id="container">

<header id="header">
  <h1><?php perch_content('Site Title'); ?></h1>
  <h2><?php perch_content('Site Subtitle'); ?></h2>
</header>

<nav id="nav">
  <?php
    $opts = array('navgroup' => 'default', 'from_path' => '/', 'levels' => 2);
    perch_pages_navigation($opts);
  ?>
</nav>

<main id="body">
  <h3><?php perch_content('Page Heading'); ?></h3>
  <p>Available in Kindle format as a complete book or in 4 separate parts:</p>
  <ul id="book-list">
    <li>
      <a href="https://www.amazon.ca/Broken-Chain-Sandi-Plewis-ebook/dp/B01LWED38T/ref=sr_1_2?s=digital-text&ie=UTF8&qid=1486312177&sr=1-2">
        <img src="/images/broken-chain-cover.jpg" width="120" height="186" alt="Broken Chain">
        <p>Complete book</p>
      </a>
    </li>
    <li>
      <a href="https://www.amazon.ca/Broken-Chain-Part-One-Seduction-ebook/dp/B01LYG81OX/ref=sr_1_1?s=digital-text&ie=UTF8&qid=1486312177&sr=1-1">
        <img src="/images/seduction-cover.jpg" width="120" height="186" alt="Broken Chain: Seduction">
        <p>Part 1:<br>Seduction</p>
      </a>
    </li>
    <li>
      <a href="https://www.amazon.ca/Broken-Chain-Part-Two-Betrayal-ebook/dp/B01LX5BFZ0/ref=sr_1_5?s=digital-text&ie=UTF8&qid=1486312177&sr=1-5">
        <img src="/images/betrayal-cover.jpg" width="120" height="186" alt="Broken Chain: Betrayal">
        <p>Part 2:<br>Betrayal</p>
      </a>
    </li>
    <li>
      <a href="https://www.amazon.ca/Broken-Chain-Part-Three-Entrapment-ebook/dp/B01LZQU6XZ/ref=sr_1_3?s=digital-text&ie=UTF8&qid=1486312177&sr=1-3">
        <img src="/images/entrapment-cover.jpg" width="120" height="186" alt="Broken Chain: Entrapment">
        <p>Part 3:<br>Entrapment</p>
      </a>
    </li>
    <li>
      <a href="https://www.amazon.ca/Broken-Chain-Part-Four-Revelation-ebook/dp/B01LYRXE9M/ref=sr_1_4?s=digital-text&ie=UTF8&qid=1486312177&sr=1-4">
        <img src="/images/revelation-cover.jpg" width="120" height="186" alt="Broken Chain: Revelation">
        <p>Part 4:<br>Revelation</p>
      </a>
    </li>
  </ul>
  
  <h3>Reviews</h3>
  <?php perch_content('Page Body'); ?>
</main>

<footer id="footer">
  <p><?php perch_content('Site Footer'); ?></p>
</footer>

</div>

</body>
</html>
