<?php
    require('p2logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sam's Sandwich shop lunch special</title>
    <!-- Links to styling CSS" -->
    <link rel="stylesheet" href="p2dwa.css">
    <meta charset="utf-8"/>
</head>
<body>
    <h1>Sam's Sandwich shop</h1>
    <h2>Menu and order form - lunch special $6.50/- with complimentary drink</h2>
    <img src="sw.jpg" alt="Sandwich"/>
    <p>Enter the order information for your Sandwich below:</p>

    <form method="post" action="p2logic.php">
        <fieldset>
            <strong>Customer name</strong>
            <br>
            <input type="text" name="order[Name]" id="Customer">
            <br>
            <input type="radio" name="order[Place]" id="ToStay" value="ToStay" />
            <label for="Stay">Stay</label>
            <br>
            <input type="radio" name="order[Place]" id="Togo" value="Togo"/>
            <label for="Togo">To go</label>
            <br>
        </fieldset>
        <br>
        <fieldset>
            <strong>Choice of bread</strong>
            <br>
            <input type="radio" name="order[Bread]" id="Bread_S" value="Sourdough" />
            <label for="Bread_S">Sourdough Bread</label>
            <br>
            <input type="radio" name="order[Bread]" id="Bread_R" value="Rye" />
            <label for="Bread_R">Rye Bread</label>
            <br>
            <input type="radio" name="order[Bread]" id="Bread_W" value="Wholewheat" />
            <label for="Bread_W">Wholewheat</label>
            <br>
        </fieldset>
        <fieldset>
            <br>
            <strong>Choice of protein</strong>
            <br>
            <input type="radio" name="order[Protein]" id="Protein_H" value="Ham" />
            <label for="Protein_H">Ham</label>
            <br>
            <input type="radio" name="order[Protein]" id="Protein_S" value="Smoked Salmon" />
            <label for="Protein_S">Smoked Salmon</label>
            <br>
            <input type="radio" name="order[Protein]" id="Protein_C" value="Cheddar" />
            <label for="Protein_C">Cheddar</label>
            <br>
        </fieldset>
        <fieldset>
            <br>
            <strong>Choice of Salad</strong>
            <br>
            <input type="radio" name="order[Salad]" id="Salad_L" value="Lettuce" />
            <label for="Salad_L">Lettuce</label>
            <br>
            <input type="radio" name="order[Salad]" id="Salad_T" value="Tomato" />
            <label for="Salad_T">Tomato</label>
            <br>
            <input type="radio" name="order[Salad]" id="Salad_A" value="Arugula" />
            <label for="Salad_A">Arugula</label>
            <br>
        </fieldset>
            <br>
        <fieldset>
            <strong>Drinks</strong>
            <br>
            <br>
            <select name="order[Drink]">
            <optgroup label ="Choice of drink">
                <option value="Icedtea">Iced Tea</option>
                <option value="Orangej">Orange Juice</option>
                <option value="Applej">Apple Juice</option>
                <option value="Minwater">Mineral Water</option>
            </optgroup>
            </select>
        </fieldset>
            <br>
            <input type="submit" name="Todo" value="Place Order"/>
            <br>
    </form>
</body>
</html>

