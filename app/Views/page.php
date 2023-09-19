<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HTMX - CI Tabs</title>
	<script src="https://unpkg.com/htmx.org@1.9.5" defer></script>
	<!-- <style>
			.selected {
				color: green;
			}
	</style> -->
	<!-- <script type="module" src="/index.js"></script> -->
</head>

<body>

	<button hx-get="/tabs/1" hx-ext="ajax-header" hx-target="#content" hx-swap="innerHTML">Tab 1</button>
	<button hx-get="/tabs/2" hx-ext="ajax-header" hx-target="#content" hx-swap="innerHTML">Tab 2</button>
	
	<section id="content"></section>
		
	<p>
		<?= $this->include('count') ?>
	</p>
</body>

</html>