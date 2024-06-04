<?php
class Text {
    public static $dir = 'Text';

    static function reading(string $name_file): void {
        $f = file_get_contents(self::$dir . '/' . $name_file . '.txt');
        echo $f;
    }

    static function writingInFile(string $name_file, string $line): void {
        file_put_contents("./text/{$name_file}.txt", $line);
    }

    public function clearFile($name_file): void {
        file_put_contents("./" . self::$dir . "/{$name_file}.txt", '');
    }
}

@mkdir(Text::$dir);
file_put_contents("./" . Text::$dir . "/text1.txt", '');
file_put_contents("./" . Text::$dir . "/text2.txt", '');
file_put_contents("./" . Text::$dir . "/text3.txt", '');

$string = "Hello, World!";

$file = new Text;
$file->writingInFile('text1', $string);
$file->reading('text1');
$file->clearFile('text1');