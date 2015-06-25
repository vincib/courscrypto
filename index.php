<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Cours de Crypto par Nadim Kobeissi</title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
<div class="container-fluid row-fluid">
  
  <h1>Cours de Crypto</h1>
  
  <p>Cette page présente les cours de crypto proposés par <a href="https://twitter.com/@kaepora" target="_blank">Nadim Kobeissi</a> à partir de Juin 2015, au <a target="_blank" href="https://leloop.org/">Loop</a>.</p>
  
  <p>Chaque session dure une heure, <a href="https://github.com/kaepora/courscrypto">les slides sont disponibles, ainsi que des exercices et un lieu de discussion sur GitHub </a>. Les cours sont ensuite disponibles en vidéo et audio sur ce site.</p>

  <p>Utilisez un des liens ci-dessous pour accéder à un cours en particulier</p>
<ul>
<?php

   require_once("config.php");
foreach($cours as $id=>$lesson) {
  echo "<li><a href=\"cours-crypto-$id\">Lesson $id: $lesson</a></li>";
}  
?>
</ul>
<p>Pour suivre les prochaines sessions, <a href="https://github.com/kaepora/courscrypto/blob/master/PROGRAMME.md">rendez-vous sur le github à la page Programme</a></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

<script src="/js/bootstrap.min.js"></script>
</body> </html>
