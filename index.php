<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Cours Introductif à la Cryptographie</title>
	<style type="text/css">
		p.license {
			margin-top: 50px;
			opacity: 0.8;
			color: #555;
			font-size: 0.7em;
		}
	</style>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
	<div class="container-fluid row-fluid">
		
		<h1>Cours de Cryptographie</h1>
		<br />
		<p>Bienvenue au site du cours introductif à la cryptographie, proposé par <a href="https://nadim.computer" target="_blank">Nadim Kobeissi</a> à partir de Juin 2015, au <a target="_blank" href="https://leloop.org/">Loop</a>.
		<br />
		Le cours est gratuit. Vous pouvez le suivre en ligne ou venir nous joindre chaque samedi.</p>

		<h2>Nouvelles</h2>
                <p>
                	Le troisième cours s'est bien passé! Les slides sont en ligne, le devoir vient dans quelques heures.<br />
                	Le prochain cours se déroule le samedi 11 juillet, à <strong style="color:red;font-size:2em;text-decoration:blink;">13h00</strong>, au Loop (20, rue de Reuilly).</p>

		<h2>Matériel</h2>
		<ul>
			<li><a href="https://github.com/kaepora/courscrypto/blob/master/PROGRAMME.md">Programme du cours</a> avec <strong>dates</strong>, <strong>lieu du cours</strong>, et autres infos importantes.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/slides">Slides</a> de chaque session.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/devoirs">Devoirs</a> pour chaque session.</li>
			<li><a href="https://github.com/kaepora/courscrypto/tree/master/projets">Projets</a> du cours et des participants.</li>
			<li><a href="https://github.com/kaepora/courscrypto/issues/">Discussion</a> en ligne des sessions, devoirs, etc.</li>
		</ul>
		
		<h2>Vidéos</h2>
		<ul>
			<?php
				require_once("config.php");
				foreach($cours as $id=>$lesson) {
					echo "<li><a href=\"cours-crypto-$id\">Session $id: $lesson</a></li>";
				}  
			?>
		</ul>
		
		<p class="license">
			<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
				<img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
			</a>
			<br />
			<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Cours de Cryptographie</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://nadim.computer" property="cc:attributionName" rel="cc:attributionURL">Nadim Kobeissi</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/kaepora/courscrypto" rel="dct:source">https://github.com/kaepora/courscrypto</a>.
		</p>

	</div>

	<script src="/js/bootstrap.min.js"></script>
</body>
</html>
