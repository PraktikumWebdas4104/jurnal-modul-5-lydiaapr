<form action="" method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<td>
			<td>Login</td>
			<td>:</td>
			<td><input type="submit" name="Login"></td>
		</td>
</table>
</form>

<?php 
if(isset($_POST['SUBMIT'])){
	include ("koneksi.php");

	$nim=$_POST['nim'];
	$nim=$_POST['nama'];
	$email=$_POST['email'];
	$status=true;
	echo $nama;

	if(!is_int($nim) and strlen(nim)<10 or strlen(nim)>10) ){
		echo"nim harus 10 karakter";
		$status=false;
	}

	if(is_string('/^[a-z]$/',$nama)>25){
		echo"nama harus dengan huruf dan maks 25 karakter";
		$status=false
	}

	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo"email is not valid";
		$status=false;
		}
		if(status){
			$sql=mysql_query($koneksi,"INSERT INTO mahasiswa)
			VALUES('$nim','$nama','$email')
		}
	} 
?>
