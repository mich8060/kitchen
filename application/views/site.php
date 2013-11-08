<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/grid.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800" />
<link rel="stylesheet" href="css/screen.css" />
</head>
<body>
<article>
	<form action="" method="post" accept-charset="utf-8">
	<div class="boxgrid">
		<div class="prefix_2 grid_6">
			<h4>Summary</h4>
		</div>
		<div class="prefix_3 grid_5">
			<p>
				<strong>Name</strong>
				<input type="text" placeholder="Add recipe name" />
			</p>
			<p>
				<strong>Photo</strong>
				<input type="file" />
			</p>
			<p>
				<strong>Description</strong>
				<textarea name="" placeholder="A short description of the final product"></textarea>
			</p>
		</div>
		<div class="clear"></div>
		<div class="prefix_3 grid_2">
			<p>
				<strong>Prep Time</strong>
				<div class="ui-selector">
					<select>
						<option value="0">5 Minutes</option>
						<option value="1">10 Min.</option>
						<option value="2">15 min.</option>
						<option value="3">30 min.</option>
						<option value="4">45 min.</option>
						<option value="5">1 hr.</option>
					</select>
					<div class="ui-selector-value">5 Minutes</div>
				</div>
			</p>
		</div>
		<div class="grid_2">
			<p>
				<strong>Cook Time</strong>
				<div class="ui-selector">
					<select>
						<option value="0">5 Minutes</option>
						<option value="1">10 Min.</option>
						<option value="2">15 min.</option>
						<option value="3">30 min.</option>
						<option value="4">45 min.</option>
						<option value="5">1 hr.</option>
					</select>
					<div class="ui-selector-value">5 Minutes</div>
				</div>
			</p>
		</div>
		<div class="grid_1">
			<p>
				<strong>Serves</strong>
				<div class="ui-selector">
					<select>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
					<div class="ui-selector-value">1</div>
				</div>
			</p>
		</div>
		<div class="clear"></div>
		<div class="prefix_2 grid_6">
			<h4>Ingredients</h4>
		</div>
		<div class="clear"></div>
		<div class="ingredients">
			<div class="prefix_3 grid_3">
				<strong>Ingredients</strong>
				<input type="text" placeholder="Name" />
			</div>
			<div class="grid_1">
				<strong>Qty</strong>
				<div class="ui-selector">
					<select>
						<option value="0">0</option>
						<option value="0">1/8</option>
						<option value="0">1/4</option>
						<option value="0">1/2</option>
						<option value="0">1/3</option>
						<option value="0">2/3</option>
						<option value="0">1</option>
					</select>
					<div class="ui-selector-value">0</div>
				</div>
			</div>
			<div class="grid_1">
				<strong>Units</strong>
				<div class="ui-selector">
					<select>
						<option value="0">Cups</option>
					</select>
					<div class="ui-selector-value">Cups</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="prefix_3 gird_5">
			<p>
				<a href="#">Add Another</a>
			</p>
		</div>
		<div class="prefix_2 grid_6">
			
			<h4>Steps</h4>
		</div>
		<div class="clear"></div>
		<div class="prefix_3 grid_5">
			<strong>Step Instructions</strong>
			<textarea name="" placeholder="Any instructions needed to make this recipe"></textarea>
			<a href="#" class="ui-btn ui-green">Add Recipe</a>
		</div>
		<div class="clear"></div>
		</form>
	</div>
</article>
<script src="js/zepto.min.js"></script>
<script src="js/zepto.kitchen.js"></script>
</body>
</html>