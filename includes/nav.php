<ul class="mb-5">
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="library.php">Library</a></li>
    <li><a href="trade.php">Trade</a></li>
    <li><a href="userprofile.php">Profile</a></li>
    <li><a href="contact.php">Contact</a></li>
    <?php if ($_SESSION["user"]["role"] == "admin") : ?>
        <li><a href="dashboard.php">Dashboard</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Log out</a></li>
</ul>