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
  <?php perch_content('Page Body'); ?>
</main>

<footer id="footer">
  <p><?php perch_content('Site Footer'); ?></p>
</footer>

</div>

</body>
</html>
