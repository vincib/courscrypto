<?php
require_once("config.php");
if (!isset($_GET["id"]) || !isset($cours[intval($_GET["id"])])) {
  header("HTTP/1.0 404 Not Found");
  exit();
}
$id=intval($_GET["id"]);
$lesson=$cours[$id];

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Cours de Crypto #<?php echo $id." - ".$lesson; ?></title>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/mediaelement/mediaelementplayer.min.css" />
<script src="/mediaelement/mediaelement.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid row-fluid">
  
  <h1>Cours de Crypto #<?php echo $id." - ".$lesson; ?></h1>

  
<video width="800" height="450" id="player1" controls="controls">
 <source src="https://video.octopuce.fr/courscrypto/cours-crypto-1.mp4" type="video/mp4" />  
 <source src="https://video.octopuce.fr/courscrypto/cours-crypto-1.webm" type="video/webm" />  
</video>

  <p>Vous pouvez aussi télécharger les slides, le fichier vidéo ou audio grâce aux liens ci-dessous:</p>
<ul>
<li><a href="https://video.octopuce.fr/courscrypto/cours-crypto-<?php echo $id; ?>.mp4">Télécharger la vidéo au format H264/AAC/MP4</a></li>
<li><a href="https://video.octopuce.fr/courscrypto/cours-crypto-<?php echo $id; ?>.webm">Télécharger la vidéo au format VP8/VORBIS/WEBM</a></li>
<li><a href="https://video.octopuce.fr/courscrypto/cours-crypto-<?php echo $id; ?>.mp3">Télécharger l'audio seul au format MP3</a></li>
<?php
if (isset($slides[$id])) {
?>
<li><a href="<?php echo $slides[$id]; ?>">Télécharger les slides</a></li>
<?php
}
?>
<?php
if (isset($discussion[$id])) {
?>
<li><a href="<?php echo $discussion[$id]; ?>">Participez à la discussion</a> (requiert un compte Github)</li>
<?php
}
?>

<script>
  MediaElement('player1', {success: function(me) {
	me.play();
	/*
	me.addEventListener('ended', function() {
	    // Shall we go to the next lesson automagically?
	  }, false);
	*/
	/* // This may allow us to use a json file telling the TIME to change the slides and show them as pictures? ;) 
	  me.addEventListener('timeupdate', function() {
	  document.getElementById('time').innerHTML = me.currentTime;
	  }, false);
	*/
      }});
</script>

</div>

</body> </html>
