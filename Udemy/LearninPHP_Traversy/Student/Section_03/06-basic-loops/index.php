<?php

// For Loop
/*
    for($i = 0; $i < 10; $i++)
    {
        echo $i . '<br />';
    }
*/

// Basic While Loop
/*
$i = 0;
while($i < 10) {
    echo $i . '<br />';
    $i++;
}
*/

// Basic Do-While Loop
/*
$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i <= 10)
*/

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
            <ul>
                <?php // For Loop in HTML
                    /*
                    <?php for ($i = 0; $i <= 10; $i++): ?>
                        <li>
                            Number: <?= $i ?>
                        </li>
                    <?php endfor; ?>
                */?>
                <?php // While Loop in HTML
                    /*
                    <?php $i = 0; while ($i <= 10): ?>
                    <?php echo "Number " . $i . "<br />"; ?>
                    <?php $i++; endwhile; ?>
                */?>
                <?php // Do While Loop
                    /*
                    <?php $i = 0;
                        do { ?>
                            <li> number: <?= $i ?></li>
                    <?php $i++;
                        } while($i < 10) ?>
                    */
                ?>
            </ul>
        </div>
    </div>
</body>

</html>