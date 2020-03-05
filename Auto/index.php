<?php $items = array("Volvo", "BMW", "Toyota", "Chrysler", "Ford", "Buick");?>
<style>
	<?php include 'css/styles.css'; ?>
</style>
<html>
	<body>
	<?php $welcome = "Welcome to the Auto Parts Store"; ?>
	<div class='top'>
		<h1 id="title"><?php echo $welcome ?></h1>
	</div>
	<div class='mid'>
		<ul>
		<?php foreach($items as $i) {
			?><li class="items">
			<?php echo $i; ?>
			</li>
		<?php } ?>
		</ul>
	</div>
	<div class='bot'>
	
	</div>
	</body>
</html>
