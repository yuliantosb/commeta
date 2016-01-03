<?php include('config.php');
include('function.php');?>
<html>
<head>
	<title>Commeta V. 1.0</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<style type="text/css">
	body {
		color: #666;
		font-family: 'Raleway', sans-serif;
	}
	h4 {
		color: #333;
	}
	.media {
		border: 1px solid rgb(221, 221, 221);
		padding: 10px;
	}
	.commeta-option {
		margin: 10px;
	}
	.commeta-reply i {
		margin: 0px 5px;
	}
</style>
</head>
<body>
<div class="container">
	<h1>Commeta V.1.0</h1>

	
		<?php
			$q = "SELECT * FROM comment WHERE parent_id = 0";
			$r = mysql_query($q);
			while($row = mysql_fetch_assoc($r)):
				getComments($row);
			endwhile;
			?>
	
</div>
	<div class="col-md-8">
		<h2> Masukan komentar anda</h2>
		<hr>
		<form class="form-horizontal" id="comment_form" action="post_comment.php" method='post'>
			<div class="form-group">
			    <label for="firstname" class="col-sm-2 control-label">Nama</label>
			    <div class="col-sm-8">
			      <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama anda">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="firstname" class="col-sm-2 control-label">Komentar</label>
			    <div class="col-sm-8">
			      <textarea name="comment_body" id='comment_body' class="form-control" placeholder="Isi komentar"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			  </div>
			  <input type='hidden' name='parent_id' id='parent_id' value='0'/>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-8">
			      <input type="submit" class="btn btn-primary" value="Tambahkan Komentar"/>
			    </div>
			  </div>
		</form>
	</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(function(){
	$("a.reply").click(function() {
		var id = $(this).attr("id");
		$("#parent_id").attr("value", id);
		$("#name").focus();
	});
});
</script>
</body>
</html>