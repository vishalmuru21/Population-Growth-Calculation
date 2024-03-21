<!doctype html>
<html lang="en">
<head>
  <title>Population Growth Results</title>
  <link rel="stylesheet" href="hw05.css"> 
</head>
<body>
<?
// Read User Inputs
$years = $_POST['years'];
$population = $_POST['population'];
$growth_rate = $_POST['growth_rate'];

// Heading
echo "<h1>hw05 - Population Growth</h1>";

// Provide link back to input form
echo "<div class='user-input'>";
echo "<p>Starting Population: $population</p>";
echo "<p>Growth rate: $growth_rate%</p>";
echo "<p>To perform another calculation<a href='hw05-input.html'> click here</a></p>";
echo "</div>";

// Print table header
echo "<table>";
echo "<tr><th>Year</th><th>Population</th><th>Change</th></tr>";

// Loop to calculate and print projected population growth
for ($i = 1; $i <= $years; $i++) {
    $current_year = 2019 + $i;
    $change = $population * $growth_rate / 100;
    $population += $change;
    echo "<tr><td>$current_year</td><td>" . number_format($population) . "</td><td>" . number_format($change) . "</td></tr>";
}

// Close table
echo "</table>";

?>
</body>
</html>
