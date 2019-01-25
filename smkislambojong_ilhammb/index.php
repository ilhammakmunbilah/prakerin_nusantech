<html>
<head>
	<title> ilham | Prakerin Nusantech </title>
</head>

<body>
<?php
	if (isset($_POST['btnHitung'])){
		$nill = $_POST['nill'];
		$nil2 = $_POST['nil2'];
		$nil3 = $_POST['nil3'];
	
		$operasi = $_POST['cbHitung'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $nill+$nil2+$nil3;
			break;
			case 'kurang':
				$hasil = $nill-$nil2-$nil3;
			break;
			case 'kali':
				$hasil = $nill*$nil2*$nil3;
			break;
			case 'bagi':
				$hasil = $nill/$nil2/$nil3;
			break;
		}
	}
	?>
<form action="" method="POST">
	<table border="0" align="center">
		<tr> <td><input type="number" name="nill" class="bil" size="15" placeholder="nilai 1"></td> </tr>
		
		<tr> <td><input type="number" name="nil2" class="bil" size="15" placeholder="nilai 2"></td> </tr>
		
		<tr> <td><input type="number" name="nil3" class="bil" size="15" placeholder="nilai 3"></td> </tr>
		
		<tr>
			<td>
				<input type="radio" name="cbHitung" value="tambah">+
				<input type="radio" name="cbHitung" value="kurang">-
				<input type="radio" name="cbHitung" value="kali">x
				<input type="radio" name="cbHitung" value="bagi">/
			</td>
		</tr>
		<tr>		
			<td><input type="submit" name="btnHitung" value="HITUNG"></td>
			
		</tr>
	</table>
</form>
	<table border="0" align="center">
		<tr>
			<td>
		<?php if(isset($_POST['btnHitung'])){ ?>
			Hasil : <input type="number" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			Hasil : <input type="number" value="0" class="bil">
		<?php } ?>
			</td>
		</tr>
	</table>
</body>
</html>