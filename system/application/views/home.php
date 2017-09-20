
<html>
<head>
<title>Blog</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<?php $this->lang->load('welcome', 'english'); ?>

<h1><?= $this->lang->line('welcome'); ?></h1>

<p>Blog</p>

<p>pagina inicial</p>

<?php foreach ($linhas as $row): ?>
	<h3><?php echo $row['titulo']; ?></h3>
	<p><?php echo $row['texto']; ?>
	<hr>
	
<?php endforeach;?>
	



<p><br />pagina criada em {elapsed_time} segundos</p>

</body>
</html>
