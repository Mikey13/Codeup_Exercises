<!DOCTYPE html>
<?php
  var_dump($_POST);
?>
<html>
    <head>

    </head>

    <body>

    <header>
    	<h1>Biscuits and Gravy </h1>
    </header>

    	<main>

    		<h2>Ingredients</h2>
    			<ol>
    				<li>Water</li>
    				<li>Flour</li>
    				<li>Salt</li>
    			</ol>

    	</main>

    	<form method="POST" action="/favorite_meal.php">
			<p>
			    <label for="Suggestion">Suggestions:</label>
			    <input id="suggestion" name="suggestion" type="text">
			</p>
			<p>
			    <input type="submit" value="Send">
			</p>
		</form>

    		<aside>

    			<h3>Other Foods You May Like</h3>

    			<ul>
    				<li><a href="#" title="How to make Cornbread">Cornbread</a></li>
    				<li><a href="#" title="How to make Pancakes">Pancakes</a></li>
    				<li><a href="#" title="How to make Tortillas">Tortillas</a></li>
    			</ul>

    		</aside>

    </body>
</html>