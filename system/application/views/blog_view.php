<html>
<head>
<title>Blog</title>

</head>
<body>

<?php $this->lang->load('welcome', 'english'); ?>

<h1><?= $this->lang->line('welcome'); ?></h1>

<p>Blog</p>

<p>pagina inicial</p>

<?php foreach ($linhas as $row): ?>
	<h3><?php echo $row['titulo']; ?></h3>
	<p><?php echo $row['texto']; ?></p>
	<p><?= anchor('blog/index.php/blog/post/' .$row['id'], 'Leia mais...'); ?>
	<hr>	
<?php endforeach;?>

<p>pagina criada em {elapsed_time} segundos</p>
	



</body>
</html>
