<?php
  function __autoload($class) {
    require_once $class . '.php';
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	  <title>Assignment 3</title>
	  <link rel="stylesheet" href="assignment3.css">
  </head>

  <body>
    <h1>RITIKA'S ICE CREAM PARLOR</h1>
	<h3>home of the most delectable ice creams in all the world!</h3>
    <section id="introSection">
      <p class="paragraph-one">
        Welcome! Are you in the mood to devour the dessert of a lifetime?!<br>
    	Well, you came to the right ice cream parlor!<br>
    	Take a look at our exquisite menu. Choose whatever your heart desires!<br>
      </p>
    </section>

	<?php
	  $Menu[] = new IceCream("vanilla", "rainbow sprinkles", "caramel", "M&M waffle");
      $Menu[] = new IceCream("chocolate", "crushed oreo", "melted marshmellow", "M&M waffle");
	  $Menu[] = new IceCream("strawberry", "frozen strawberries", "strawberry juice", "M&M waffle");
	  $Menu[] = new IceCream("mint chocolate chip", "brownie", "hot fudge", "M&M waffle");
	  $Menu[] = new WeeklySpecial("green tea", "spicy salmon sushi roll", "soy sauce", "M&M waffle", "hat", "1.00");
	  $Menu[] = new WeeklySpecial("pumpkin pie", "thanksgiving turkey chunks", "gravy", "M&M waffle", "snowboard", "1.00");
	  $Menu[] = new WeeklySpecial("avocado", "chipotle burrito", "guac(free of charge)", "M&M waffle", "watch", "1.00");
	  $Menu[] = new WeeklySpecial("champagne", "50-carat diamond", "melted 24k gold", "M&M waffle", "whistle", "1.00");
	  foreach ($Menu as $iceCream) {
	    if ($iceCream instanceof WeeklySpecial) {
		  echo "<br/>WEEKLY SPECIAL!";
		}
		echo "<br/>$iceCream";
		$iceCream->characteristics();
		$iceCream->diet();
	  }
	  echo "<br/><br/>";
	  IceCream::enjoy();
	?>

	<h3>enjoy your ice cream!!!</h3>
	<footer>
  	  2016 &copy; Copyright. All rights reserved.
  	</footer>
  </body>
</html>
