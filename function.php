<?php
function getComments($row) {
	echo "<div class='media'>";
	echo "<div class='media-body'>
			<h4 class='media-heading'>".$row['author']."</h4>";
	echo $row['comment'];
	echo "<div class='col-md-12 commeta-option'>
			<span class='pull-left commeta-reply'>
			<a class='reply' href='#comment_form' id='".$row['id']."'> Reply </a>
			</span>
			<span class='pull-right'>
				".$row['created_at']."
			</span>
			";

	echo "</div>";
	$q = "SELECT * FROM comment WHERE parent_id = ".$row['id']."";
	$r = mysql_query($q);
	if(mysql_num_rows($r)>0)
		{
		
		while($row = mysql_fetch_assoc($r)) {
			getComments($row);
		}
		
		}
	echo "</div></div>";
}
?>