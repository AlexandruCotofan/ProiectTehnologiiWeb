    <form method="POST" action="get_pdf_id.php" target="_blank">
	<input type="text" name="id1">
	<input type="submit" name="pdf" id="pdf" value="PDF">
	</form>



	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>NR</th>
			<th>PREF</th>
			<th>CALORII</th>
		</tr>
		
	<?php


 
 include 'functii_php/connect.php';
 $select="SELECT * FROM clasament";

 $query=mysqli_query($conn,$select);
 while($row=mysqli_fetch_array($query)){


 

	?>

<tr>
	<td><?php echo $row['nr_crt']; ?></td> 
	<td><?php echo $row['user_name']; ?></td> 
	<td><?php echo $row['email']; ?></td> 
	<td><?php echo $row['nr_antrenamente']; ?></td> 
	<td><?php echo $row['antrenament_pref']; ?></td> 
	<td><?php echo $row['calorii']; ?></td> 
</tr>

<?php
}
?>

</table>
<form method="POST" action="pdf.php" target="_blank">
	<input type="submit" name="pdf_creater" value="PDF">
</form>