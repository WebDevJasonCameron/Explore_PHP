<?php
$output = null;

$fruits = [
        ['apple', 'red'],
        ['orange', 'orange'],
        ['banana', 'yellow'],
];

$output = $fruits[2][1];

$fruits = ['grape', 'purple'];

$users = [
        ['name' => 'John', 'email' => 'john@example.com', 'password' => 'password'],
        ['name' => 'Mary', 'email' => 'mary@example.com', 'password' => 'password'],
        ['name' => 'Ken', 'email' => 'ken@example.com', 'password' => '123456'],
];

$output = $users[2]['email'];

$users[] = ['name' => 'Mike', 'email' => 'mike@example.com', 'password' => 'smash'];

array_push($users, ['name' => 'Larry', 'email' => 'larry@example.com', 'password' => 'password']);

array_pop($users);

array_shift($users);

unset($users[0]);

$output = count($fruits);
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
      <p class="text-xl">
          <?= $output ?>
      </p>
      <p>
          <pre>
            <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>