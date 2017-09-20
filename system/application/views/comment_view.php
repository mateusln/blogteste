<html>

<body>

<p>Comentarios_view</p>

<?php  if ($query->num_rows() > 0 ):?>

	<?php foreach ($query->result() as $row): ?>
		<h3><?php echo $row->id; ?></h3>
		<p><?php echo $row->conteudo; ?></p>
		
		<hr>	
	<?php endforeach;?>
<?php endif;?>

<?=form_open('blog/index.php/blog/comment_insert');?>

<?=form_hidden('post_id', $this->uri->segment(3)); ?> 

<p><textarea name="conteudo" rows="10"></textarea></p>
<p><input type ="submit" value="Enviar comentario"/></p>

</form>

</body>
</html>