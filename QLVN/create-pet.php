<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form tạo mới vật nuôi</title>
	<style>
		html {
			box-sizing: border-box;
		}
		.container {
			width: 980px;
			max-width: 100%;
			margin-right: auto;
			margin-left: auto;
			border: 2px solid #000;
			padding: 20px;
		}
		.btn {
			display: block;
			margin: 20px 0;
			height: 30px;
			width: 200px;
			background-color: #000;
			color: #fff;
			border-radius: 4px;
			font-size: 18px;
		}

		.btn:hover {
			opacity: .7;
		}
		.color {
			background-color: #6dd9c5;
			color: #fff;
			border: none;
			width: 100px;
		}

		a {
			display: block;
			text-decoration: none;
		}
		input {
			width: 200px;
			height: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<a href="./list-pet.php">
			<button class="btn color">Back</button>
		</a>
		<h1>Form thêm vật nuôi</h1>
		<form action="./tnyc_create.php" method="get">
			<label for="">Mã vật nuôi</label><br>
			<input type="number" name="id" placeholder="Ma vật nuôi" required="true"><br><br>

			<label for="">Tên vật nuôi</label><br>
			<input type="text" name="name" placeholder="Tên vật nuôi" required="true"><br><br>

			<label for="">Kiểu vật nuôi</label><br>
			<input type="text" name="type_id" placeholder="Loại vật nuôi"><br><br>

			<label for="">Tuổi vật nuôi</label><br>
			<input type="number" name="age" placeholder="Tuổi vật nuôi"><br><br>

			<label for="">Cận nặng ? </label><br>
			<input type="number" name="weight" placeholder="Cân nặng vật nuôi"><br><br>

			<label for="">Image(Link)</label><br>
			<input type="text" name="image" placeholder="Hình ảnh vật nuôi">
			<button class="btn">ADD</button>
		</form>
	</div>
	
</body>
</html>