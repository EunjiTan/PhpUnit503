<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fruit Directory</title>
<style>
table {
width: 100%;
border-collapse: collapse;
}
th, td {
border: 1px solid black;
padding: 10px;
text-align: left;
}
th {
background-color: #f2f2f2;
}
img {
width: 100px;
}
</style>
</head>
<body>
<h1>My Fruits</h1>
<table>
<tr>
<th>Image</th>
<th>Name</th>
<th>Description</th>
<th>Facts</th>
</tr>
<?php
// Array of fruits
$fruits = [
[
"image" => "banana.jpg",
"name" => "Banana", 
"description" => "Color Yellow",
"facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
],
[
"image" => "apricot.jpg",
"name" => "Apricot",
"description" => "Color Yellow",
"facts" => " Apricots can be enjoyed fresh or in their dried form."
],
[
"image" => "avocado.jpg",
"name" => "Avocado",
"description" => "Color Green",
"facts" => " Avocados creamy texture and numerous health benefits. They can be enjoyed in guacamole, smoothies, or as a topping for salads."
],
[
"image" => "grape.jpg",
"name" => "Grapes",
"description" => "Color Violet",
"facts" => "The skin of grapes contains resveratrol, a type of polyphenol that has antioxidant properties."
],
[
"image" => "strawberry.jpg",
"name" => "Strawberry",
"description" => "Color Red",
"facts" => "Strawberries are a good source of vitamin C, manganese, folate, and potassium."
],
[
"image" => "cherry.jpg",
"name" => "Cherry",
"description" => "Color Red",
"facts" => "Cherries are a natural anti-inflammatory and can help reduce pain and inflammation."
],
[
"image" => "kiwi.jpg",
"name" => "Kiwi",
"description" => "Color Green",
"facts" => "Kiwi is a good source of vitamin C, vitamin K, vitamin E, folate, and potassium."
],
[
"image" => "pineapple.jpg",
"name" => "Pineapple",
"description" => "Color Yellow",
"facts" => "Pineapple is actually a collection of many individual berries that have fused together."
],
[
"image" => "mango.jpg",
"name" => "Mango",
"description" => "Color Yellow",
"facts" => "Mangos are a sweet and creamy fruit that are rich in vitamins A and C. They can be enjoyed fresh or dried."
],
[
"image" => "watermelon.jpg",
"name" => "Watermelon",
"description" => "Color Green",
"facts" => "Watermelon is a member of the Cucurbitaceae family, which also includes cucumbers and squash."
],


];

// Sort fruits alphabetically by name
usort($fruits, function($a, $b) {
return strcmp($a['name'], $b['name']);
});

// Generate table rows
foreach ($fruits as $fruit) {
echo "<tr>";
echo "<td><img src='{$fruit['image']}' alt='{$fruit['name']}'></td>";
echo "<td>{$fruit['name']}</td>";
echo "<td>{$fruit['description']}</td>";
echo "<td>{$fruit['facts']}</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>