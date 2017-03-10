
	<header>
    <nav>
      <h1> Mon site </h1>
      <ul>
			<?php if ($pageName == 'Home') { echo '<li class="active"><a href="#" style="color:#000000; background-color:#FF0033" >Home</a></li>'; } else { echo '<li><a href="index.php">Home</a></li>'; } 
      ?>
			<?php if ($pageName == 'Imc') { echo '<li class="active"><a href="#" style="color:#000000; background-color:#FF0033">IMC</a></li>'; } else { echo '<li><a href="imc.php">IMC</a></li>'; } 
      ?>
			<?php if ($pageName == 'Users') { echo '<li class="active"><a href="#" style="color:#000000; background-color:#FF0033" >Users</a></li>'; } else { echo '<li><a href="users.php">Users</a></li>'; }
      ?>
			<?php if ($pageName == 'Annuaire') { echo '<li class="active"><a href="#" style="color:#000000; background-color:#FF0033 ">Annuaire</a></li>'; } else { echo '<li><a href="annuaire.php">Annuaire</a></li>'; } ?>
			<?php if ($pageName == 'Help') { echo '<li class="active"><a href="#" style="color:#000000; background-color:#FF0033" >Help</a></li>'; } else { echo '<li><a href="help.php">Help</a></li>'; } 
      ?>
			</ul>
    </nav>
  </header>

  