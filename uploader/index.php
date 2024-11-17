<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="medias/css/librairies/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
<link href="medias/css/librairies/animate.min.css" rel="stylesheet" type="text/css">
<link href="medias/css/style.css" rel="stylesheet" type="text/css">
<link href="medias/css/style-modale.css" rel="stylesheet" type="text/css">
<link href="medias/css/style.loading.css" rel="stylesheet" type="text/css">
<title>Projet fullstack: Upload de fichier. Fluchon Sébastien</title>
</head>

<body>
	
	<h1><i class="fas fa-file-import"></i> Envoyer vos fichier</h1>
	
	<section id="section1">
		<i class="fas fa-cloud-upload-alt"></i>
		<h2><span>Glisser & Déposer</span> pour envoyer votre fichier</h2> 
		<p>ou bien </p>
		<label for="fichier">Parcourir vos fichiers</label>
		<input type="file" name="fichier" id="fichier">
	</section>
	<section id="section3">

	</section>
	<section id="section2">
		<h6>Images envoyées</h6>
		<div></div>
		
	</section>
	<div id="modale">
		<div id="modale-content" class="animate__animated">
			<i class="far fa-times-circle"></i>
			<p><i class="fas fa-exclamation-triangle"></i> <span>Une erreur est survenue...</span></p>
		
		</div>
	
	</div>
	<script src="medias/js/script.js"></script>
</body>
</html>
