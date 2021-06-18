<?php

require "includes/protect.php";
require "includes/connect.php";


// Check if there's a genre filter
if (isset($_GET["filterGenre"])) {
  $genre = $_GET["filterGenre"];
  $sql = "SELECT * FROM `book` WHERE genre";
} else {
  $sql = "SELECT * FROM `book`";

}


$stmt = $dbh->prepare($sql);

$stmt->execute();
$books = $stmt->fetchAll();

if ($books == false) {
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
        <option value="" selected>Choose...</option>
        <?php foreach ($genres as $genre) : ?>
          <option value="<?= $genre["name"] ?>"><?= $genre["name"] ?></option>
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
<!-- 
    <h2>
      Action
    </h2>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card mb-3 bg-wheat">
          <div class="row g-0">
            <div class="col-md-4 col">
              <img src="images/bookcovers/the_cruel_prince.jpg" alt="..." class="img-fluid">
            </div>
            <div class="col-md-8 col">
              <div class="card-body">
                <h5 class="card-title">The Cruel Prince</h5>
                <p class="card-text">Jude was seven years old when her parents were murdered and 
                  she and her two sisters were stolen away to live in the treacherous High Court of Faerie. 
                  Ten years later, Jude wants to belong there, despite her mortality.
                   But many of the fey despise humans. 
                  Especially Prince Cardan, the youngest and wickedest son of the High King
                </p>
                <p class="card-text"><small class="text-muted">By Holly Black</small></p>
                <a class="btn btn-outline-secondary" href="https://api.freepdfconvert.com/d/ae5a206faea8f59930b4edd41542e882">Get Book</a>
                <a href="http://ridwhizz.chatango.com/" class="btn btn-outline-secondary">Chat</a>
                <a href="#" class="btn btn-outline-secondary">Video</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3 bg-wheat">
          <div class="row g-0">
            <div class="col-md-4 col">
              <img src="images/bookcovers/red_queen.jpg" alt="..." class="img-fluid">
            </div>
            <div class="col-md-8 col">
              <div class="card-body">
                <h5 class="card-title">Red Queen</h5>
                <p class="card-text">This is a world divided
                  by blood—red or silver. The Reds are commoners, ruled by a Silver elite
                  in possession of god-like superpowers. And to Mare Barrow, a
                  seventeen-year-old Red girl from the poverty-stricken Stilts, it seems
                  like nothing will ever change. That is until she finds herself working
                  in the Silver Palace.
                </p>
                <p class="card-text"><small class="text-muted">By Victoria Aveyard</small></p>
                <a class="btn btn-outline-secondary" href="https://api.freepdfconvert.com/d/ae5a206faea8f59930b4edd41542e882">Get Book</a>
                <a href="http://ridwhizz.chatango.com/" class="btn btn-outline-secondary">Chat</a>
                <a href="#" class="btn btn-outline-secondary">Video</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div><br><br><br>
    <h3>
			Non-Fiction Section
		</h3><br>
    <h2>
      Article
    </h2>

    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card mb-3 bg-wheat">
          <div class="row g-0">
            <div class="col-md-4 col">
              <img src="images/bookcovers/econ_polscience.jpg" alt="..." class="img-fluid">
            </div>
            <div class="col-md-8 col">
              <div class="card-body">
                <h5 class="card-title">Economic and Political Studies</h5>
                <p class="card-text">Understanding the China–US trade war: causes, 
                  economic impact, 
                  and the worst-case scenario
                <p class="card-text"><small class="text-muted">By Chong, Terence Tai Leung, Li, Xiaoyang</small></p>
                <a class="btn btn-outline-secondary" href="https://booksc.org/dl/75465057/dfd9e2">Get Article</a>
                <a href="http://ridwhizz.chatango.com/" class="btn btn-outline-secondary">Chat</a>
                <a href="#" class="btn btn-outline-secondary">Video</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3 bg-wheat">
          <div class="row g-0">
            <div class="col-md-4 col">
              <img src="images/bookcovers/psych_mart.jpg" alt="..." class="img-fluid">
            </div>
            <div class="col-md-8 col">
              <div class="card-body">
                <h5 class="card-title">Psychology and Marketing</h5>
                <p class="card-text">Creative Strategies in Social Media Marketing: An Exploratory Study of 
                  Branded Social Content and Consumer Engagement
                </p>
                <p class="card-text"><small class="text-muted">By Ashley, Christy, Tuten, Tracy</small></p>
                <a class="btn btn-outline-secondary" href="https://booksc.org/dl/36936717/cb1f75">Get Article</a>
                <a href="http://ridwhizz.chatango.com/" class="btn btn-outline-secondary">Chat</a>
                <a href="#" class="btn btn-outline-secondary">Video</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div> -->

	</div>
</body>

</html>