<link rel="stylesheet" href="css/style.css">
<div class="nav">
<ul>
	<?php
		foreach ($navItems as $item) {
			echo "<li><a class='btn' href=\"$item[slug]\">$item[title]</a>&nbsp</li>";
		}//for each loop to dynamically load menu items for desktop site
	?>
</ul>
</div>
		
<div class="nav2">
	<ul>
	<?php
		foreach ($navItems as $item) {
			echo "<li><a class='btn' href=\"$item[slug]\">$item[title]</a></li>";
		}//for each loop to dynamically load menu items for desktop site
	?>
</ul>
</div>
