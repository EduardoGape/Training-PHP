<h1>Types of Errors</h1>

<h3>Parse Error</h3>
<?php echo 'I've been around the block!'; ?>

<p>Parse: Has code terminated?</p>

<h3>Warning Error</h3>
<?php include 'variables.php'; ?>
<p>Warning: Has code terminated?</p>;

<h3>Fatal Error</h3>
<?php echo multiply(3, 2); ?>
<p>Fatal: Has code terminated?</p>

<h3>Notice Error</h3>
<?php echo $x; ?>
<p>Notice: has code terminated?</p>
