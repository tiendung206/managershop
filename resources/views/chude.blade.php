<table border="1">
	<tr>
		<th>Tên</th>
		
	</tr>
	<?php 
	foreach ($list_chude as $val) {
		
	
	?>
	<tr>
		<td><?php echo $val['chude_name']?></td>
		
	</tr>
	<?php
	}
	?>
</table>