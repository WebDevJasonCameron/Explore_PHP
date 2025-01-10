<?php
/*
    - 'Y' - The year
    - 'm' - The month
    - 'd' - The day
    - 'D' - The day of the week short name
    - 'l' = The full day of the week name
    - 'H' - The hour
    - 'i' - The minute
    - 's' - The second
    - 'a' - AM/PM
*/

// Get year
$output = date('Y');

// Get year with timestamp
$output = date('Y', 936345600);

// Get timestamp from strtotime
$output = date('Y', strtotime('2020-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('D');
$output = date('l');

// Get month day year
$output = date('Y-m-d');
$output = date('m-d-Y');

// Get hour
$output = date('h:i:s A');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>