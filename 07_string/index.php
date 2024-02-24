<?php error_reporting(-1);

$str = '<p>Hello 1</p>';
$str2 = "<p>Hello 2</p>";

//var_dump($str);

echo "<p>Hello 1</p>\n";
echo "<p>Hello \ 2</p>";
echo PHP_EOL;
echo "<p>Hello 3</p>\n";

$str3 = "Lorem ipsum dolor sit \"amet\", consectetur 'adipisicing' elit. Ab ad cum delectus, deserunt facere hic itaque iure molestiae non obcaecati possimus quas quos saepe sint sunt ullam unde ut voluptates.";

$name = "Bobbb";
$str4 = <<<"HEREDOC"
<div>
Hello, $name! <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing' elit. Ab ad cum delectus, deserunt facere hic itaque iure molestiae non obcaecati possimus quas quos saepe sint sunt ullam unde ut voluptates.
Пример использования слеша \\ и \
</div>
HEREDOC;

echo $str4;

$str5 = <<<'NOWDOC'
<div>
Hello, $name! <br>
Lorem ipsum dolor sit "amet", consectetur 'adipisicing' elit. Ab ad cum delectus, deserunt facere hic itaque iure molestiae non obcaecati possimus quas quos saepe sint sunt ullam unde ut voluptates.
Пример использования слеша \\ и \
</div>
NOWDOC;

echo $str5;

var_dump((string)1232);
var_dump((string)true);
var_dump((string)false);
?>

