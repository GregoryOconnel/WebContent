<?php
$menu_links = '<a class="link" href="search_result.php">Resultado de búsqueda</a>
				<a class="link" href="index.php">Volver al inicio</a>';
require_once("inc/head.inc");
require_once("inc/headers.inc");
require_once("inc/nav.inc");
?>
<h3>Buscar fotos...</h3>

<form action="search_results.php" method="get">
	<div class="entryBox">
		<label for="title">Título:</label>
		<input type="text" class="inputWidth" id="title" name="title" />
	</div>
	<div class="entryBox">
		<label for="photo_id">Foto Id:</label>
		<input type="number" class="inputWidth" id="photo_id" name="photo_id" />
	</div>
	<div class="entryBox">
		<label for="photo_date_from">Fecha entre:</label>
		<input type="date" class="inputWidth" id="photo_date_from" name="photo_date_from" />
	</div>
	<div class="entryBox">
		<label for="photo_date_to">y:</label>
		<input type="date" class="inputWidth" id="photo_date_to" name="photo_date_to" />
	</div>
	<div class="entryBox">
		<label for="country">País:</label>
		<input type="text" class="inputWidth" id="photo_país" name="photo_país" />
	</div>
	<div class="entryBox">
		<label for="album">Álbum:</label>
		<input type="text" class="inputWidth" id="album" name="album" />
	</div>
	<div class="entryBox">
		<label for="user_name">Usuario que lo ha subido:</label>
		<input type="text" class="inputWidth" id="user_name" name="user_name" />
	</div>
	<div class="entryBox submissionButtons">
		<input type="submit" id="submitSearch" name="submitSearch" value="Buscar">
		<input type="Reset" value="Limpiar datos de búsqueda">
	</div>

</form>

<?php
	require_once("inc/footers.inc");
?>