<?php
    interface ContentInterface {
        public function display();
        public function edit();
    }

    class Article implements ContentInterface {

        // PROPs
        private string $title;
        private string $content;

        // CONs
        public function __construct(string $title, string $content) {
            $this->title = $title;
            $this->content = $content;
        }

        // METHs
        public function display(): void {
            echo "<h2>{$this->title}</h2>";
            echo "<p>{$this->content}</p]>";
        }

        public function edit(): void {
            echo "Editing the article '{$this->title}'...";
        }
    }

    class Video implements ContentInterface {

        // PROPs
        private string $title;
        private string $url;

        // CONs
        public function __construct(string $title, string $url) {
            $this->title = $title;
            $this->url = $url;
        }

        // METHs
        public function display(): void {
            echo "<h2>{$this->title}</h2>";
            echo "<iframe src='{$this->url}'></iframe>";
        }

        public function edit(): void {
            echo "Editing the video '{$this->title}'...";
        }
    }

    $article = new Article("Introduction to PHP", "PHP is a versatile scripting language");
    $video = new Video("PHP for Beginners", "https://www.youtube.com/watch?v=dQw4w9WgXcQ");
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
        <?= $article->display(); ?>
    </div>
  </div>
  <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <?= $video->display(); ?>
  </div>
</body>

</html>