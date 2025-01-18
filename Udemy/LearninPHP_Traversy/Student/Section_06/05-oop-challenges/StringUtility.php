<?php

class StringUtility {
    public static function shout(string $string): string {
        return strtoupper($string) . '!<br />';
    }

    public static function whisper(string $string): string {
        return strtolower($string) . '.<br />';
    }

    public static function repeat(string $string, int $times = 2): string {
        return str_repeat($string . '<br />', $times);
    }
}

echo StringUtility::shout('Hello World!');
echo StringUtility::whisper('Hello World!');
echo StringUtility::repeat('Hello World! ', 5);