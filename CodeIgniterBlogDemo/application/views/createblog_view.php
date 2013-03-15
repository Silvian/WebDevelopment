<html>
	<head>
		<title><?= $title ?></title>
		
	</head>
	<body>
		
		
		<?=form_open('blog/blog_insert');?>
		
		<?=form_hidden('id', $this->uri->segment(3));?>
		
		<p>Title:</p>
		<p><input type="text" name="title"/></p>
		<p>Content:</p>
		<p><textarea name="body" rows="10"></textarea></p>
		<p><input type="submit" value= "Submit Blog" /></p>
		
	
	
		<p><?=anchor('blog', 'Back to Blog');?></p>
		</form>	
		
	</body>
	
</html>