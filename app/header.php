<div class="navbar">
  <?
  if($_SESSION['loggedin'] == true){
  ?>
  <div class="dropdown">
    <button class="dropbtn">
      <img style="float:left;width: 20px; height: 20px;margin-right: 8px;" src="img/default-profile-pic.png">
      <div style="float:left;vertical-align: text-bottom;"><?= $_SESSION['username'] ?></div>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="dropdown-sec-1">
      <img src="img/default-profile-pic.png"> 
      <br>
      <?= $_SESSION['username'] ?>
      <br>
      <div style="float:left;">
        <hr id="userDropdownHr">
      </div>
    </div>
      <a href="#">Settings</a>
      <a href="logout.php">Log out</a>
    </div>
  </div>
  <a href="forums.php">Forums</a>
  <a href="events.php">Events</a>
  <a href="food.php">Food/Drink</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="index.php">Home</a>
  <?
}else {
  ?>
  <a href="#login">Login</a>
  <a href="#signup">Signup</a>
  <?
}
?>
<img class="smallLogo" src= "img/logo-small.png">
</div>
