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
  
  <div class="book-with-info">
    <div>
      <img src="/images/beyond-reach-cover.jpg" width="200" height="309" alt="Beyond Reach">
    </div>
    <div>
      <p>Now available on <a href="https://www.amazon.ca/Beyond-Reach-Sandi-Plewis-ebook/dp/B082HD9Q1F/ref=sr_1_2?dchild=1&qid=1596029150&refinements=p_27%3ASandi+Plewis&s=digital-text&sr=1-2&text=Sandi+Plewis">Amazon</a> and at the following Ontario book stores:</p>
      <ul>
        <li><a href="https://visitportelgin.ca/profile/books-n-strings/291/">Books and Strings</a>, Port Elgin</li>
        <li><a href="https://www.finchers.ca/">Fincher’s</a>, Goderich</li>
        <li><a href="https://www.madeinhuron.com/">Made In Huron</a>, Clinton</li>
        <li><a href="https://www.huroncitizen.ca/local-authors-and-interests-books">Rural Reading Room, North Huron Publishing</a>, Blyth</li>
        <li><a href="https://www.giftchest.ca/">The Gift Chest</a>, Wingham</li>
        <li><a href="https://villagebookshop.ca/">The Village Bookshop</a>, Bayfield</li>
        <li><a href="http://www.treasuresofstratford.ca/">Treasures</a>, Stratford</li>
      </ul>
    </div>
  </div>

  <h3 class="reviews-heading">Synopsis</h3>

  <p><em>Rae McKeon spent most of her life trying to reach her emotionally absent mother, Fern. Now that her mother has died, Rae seeks to discover the reason for Fern’s suffocating silences, the barriers she erected between herself and her family. The only person who could reach Fern was Rae’s daughter Hannah, but Rae has never been able to connect with Hannah either.</em></p>

  <p><em>From unruly child to defiant teenager to unwed mother, Rae always seemed to find the most self-destructive means of coping with her life’s challenges. But even though Rae could defy her strict, disapproving father, protecting herself from her mother’s chronic depression proved to be her toughest challenge. When Rae finds a box of her mother’s diaries, she is suddenly able to decode the path of Fern’s life, even while she tries to sort out her own life, including her strange relationship with her long-term boyfriend and her estrangement from her daughter Hannah.</em></p>

  <p><em>Through three generations, Beyond Reach explores the oppressions that have silenced women for centuries. Fern is crippled by fear, Rae by shame, and Hannah by judgment. Just like the main characters, the answers often seem beyond reach.</em></p>

  <h3 class="reviews-heading">Reviews</h3>
  <?php perch_content('Page Body'); ?>
</main>

<footer id="footer">
  <p><?php perch_content('Site Footer'); ?></p>
</footer>

</div>

</body>
</html>
