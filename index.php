<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Cours Introductif à la Cryptographie</title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid row-fluid">
		
		<h1>Cours de Cryptographie</h1>
		<br />
		<p>Bienvenue au site du cours introductif à la cryptographie, proposé par <a href="https://nadim.computer" target="_blank">Nadim Kobeissi</a> à partir de Juin 2015, au <a target="_blank" href="https://leloop.org/">Loop</a>. Le cours est gratuit. Vous pouvez le suivre en ligne ou venir nous joindre chaque Samedi.</p>

		<h2>Nouvelles</h2>
		<p>Le prochain cours se déroule le Samedi 27 Juin, a 12h00, a Loop (20 rue de Reuilly).</p>

		<h2>Matériel</h2>
		<ul>
			<li><a href="https://github.com/kaepora/courscrypto/blob/master/PROGRAMME.md">Programme du cours</a> avec <strong>dates</strong>, <strong>location du cours</strong>, et autres infos importantes.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/slides">Slides</a> de chaque session.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/devoirs">Devoirs</a> pour chaque session.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/projets">Projets</a> du cours et des participants.</li>
			<li><a href="https://github.com/kaepora/courscrypto/issues/">Discussion</a> en-ligne des sessions, devoirs, etc.</li>
		</ul>
		
		<h2>Videos</h2>
		<ul>
			<?php
				require_once("config.php");
				foreach($cours as $id=>$lesson) {
					echo "<li><a href=\"cours-crypto-$id\">Session $id: $lesson</a></li>";
				}  
			?>
		</ul>
		
	</div>

	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
