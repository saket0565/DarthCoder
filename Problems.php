<!DOCTYPE html>
<html>
<head>
	<title>Darth_Coder.github.io</title>
	<link rel="stylesheet" type="text/css" href="css/problems.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<header>
		<nav>
			<div class="main">
				<div class="logo">
					<img src="images/darth_logo.png">
				</div>
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					<li><a href="Index.html">Home</a></li>
					<li><a href="Explore.html">Explore</a></li>
					<li class="active"><a href="Problems.html">Problems</a></li>
					<li><a href="About.html">About</a></li>
					<li><a href="Contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="algo">
			<a href="Problems.php"><img src="images/iridescent.png" alt="Algorithms" style="width:10%;"></a>
			<div class="text-head"><a href="Problems.php">Algorithms</a></div>
		</div>
		<table class="content-table">
			<thead>
			    <tr>
			    	<th>#</th>
			        <th>Title</th>
			        <th>Difficulty</th>
			        <th>Solution</th>
			    </tr>
			</thead>
			<?php 
				$conn = mysqli_connect("localhost", "id15826699_root", "B%143AvsK83T", "id15826699_dsa");
				if(!$conn){
					echo "Not Connected";
				}
				$sql = "SELECT * FROM dsa";
				$result = $conn-> query($sql);
				if($result-> num_rows>0){
					while($row = $result-> fetch_assoc()){
						echo "<tr><td>".$row["id"]."</td><td><a href='".$row["link"]."' target='_blank'>".$row["title"]."</a></td><td>".$row["diff"]."</td><td><a href='".$row["sol"]."' target='_blank'>Solution</a></td></tr>";
					}
					echo "</table>";
				}
				else {
					echo "0 result";
				}
				$conn-> close();
			?>
		</table>
	</header>
</body>
</html>