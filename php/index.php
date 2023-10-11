<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 Laboratory Exercise 2</title>
</head>

<body>
  <?php
    echo "<h2>Know Your Healthful Food!</h2>";

    // Available inputs for food (Almond, Oatmeal, Broccoli, Apple, Avocados, Chicken)
    $food = "Broccoli";

    switch(strtolower($food)) {
      case "almond":
        echo "<h2>Almond has magnesium, vitamin E, iron, calcium, and fiber.</h2>";
        break;
      case "oatmeal":
        echo "<h2>Oats contain complex carbohydrates, as well as water-soluble fiber.</h2>";
        break;
      case "broccoli":
        echo "<h2>Broccoli provides good amounts of fiber, calcium, potassium, folate, and phytonutrient.</h2>";
        break;
      case "apple":
        echo "<h2>Apples are an excellent source of antioxidants, which combat free radicals.</h2>";
        break;
      case "avocados":
        echo "<h2>Avocados provide healthful fats, as well as B vitamins, vitamin K, and vitamin E.</h2>";
        break;
      case "chicken":
        echo "<h2>Chicken is cost-effective meat that is an excellent source of protein.</h2>";
        break;
      default:
        echo "Data for ". $food . " is not available. Please try again!";
        break;
    }
  ?>

</body>

</html>