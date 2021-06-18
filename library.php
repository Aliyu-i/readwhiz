<?php

require "includes/protect.php";
require "includes/connect.php";


// Check if there's a genre filter
if (isset($_GET["filterGenre"]) && $_GET["filterGenre"] !== "") {
  $genre = $_GET["filterGenre"];
  $sql = "SELECT * FROM `book` WHERE genre = :genre ";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":genre", $genre);
} else {
  $sql = "SELECT * FROM `book` ";
  $stmt = $dbh->prepare($sql);
}

$stmt->execute();
$books = $stmt->fetchAll();

if ($books === false) {
  print_r($books);
  // Error?
  exit();
}

$sql = "SELECT * FROM `genre`";
$stmt = $dbh->prepare($sql);

$stmt->execute();
$genres = $stmt->fetchAll();

if ($genres == false) {
  // Error?
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="css/homecss.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<body>
	<br>
	<?php require "includes/nav.php" ?>

	<div class="container mb-5">
		<center>
			<h2>
				Begin your reading journey by selecting a book or an article..
			</h2>
		</center><br>
		<!-- <h2>
			Drama
		</h2> -->

		<form action="">
			<label for="filterGenre">Filter by genre:</label>
			<select name="filterGenre" id="filterGenre">
				<option value="">Choose...</option>
				<?php foreach ($genres as $genre) : ?>
				<option
					value="<?= $genre["name"] ?>"
					<?php if (isset($_GET["filterGenre"]) && $_GET["filterGenre"] === $genre["name"]) {
					echo "selected";
					} ?>
				>
					<?= $genre["name"] ?>
				</option>
				<?php endforeach; ?>
			</select>
			<button type="submit">Filter</button>
			</form>

		<div class="container">

			<div class="row row-cols-1 row-cols-md-2 g-4">

        <?php foreach ($books as $book): ?>
				<div class="col">
					<div class="card mb-3 bg-wheat">
						<div class="row g-0">
							<div class="col-md-4 col">
								<img src="images/bookcovers/<?= $book["isbn"] ?>" alt="..." class="img-fluid">
							</div>
							<div class="col-md-8 col">
								<div class="card-body">
									<h5 class="card-title"><?= $book["title"] ?></h5>
									<p class="card-text"><?= $book["about"] ?> </p>
									<p class="card-text"><small class="text-muted">By <?= $book["author"] ?></small></p>
									<a class="btn btn-outline-secondary" href="<?= $book["link"] ?>">Get Book</a>
									<a href="<?= $book["chatroom_link"] ?>" class="btn btn-outline-secondary">Chat</a>
									<a href="<?= $book["videochat_link"] ?>" class="btn btn-outline-secondary">Video</a>
								</div>
							</div>

						</div>
					</div>
				</div>
        <?php endforeach; ?>


			</div>
		</div><br>

	</div>
</body>

</html>