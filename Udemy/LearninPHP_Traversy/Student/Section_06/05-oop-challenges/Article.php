<?php

class Article {

    // PROPs
    public string $title;
    public string $content;
    private bool $published = false;

    // CONs
    public function __construct(string $title, string $content){
        $this->title = $title;
        $this->content = $content;
    }

    // METHs
    public function published(): bool{
        return $this->published = true;
    }

    public function isPublished(): bool{
        return $this->published;
    }
}

$article1 = new Article('Title 1', 'Content 1');
$article2 = new Article('Title 2', 'Content 2');
var_dump($article1);

$article1->published();
var_dump($article1);

//echo $article1->isPublished();
//echo $article2->isPublished();