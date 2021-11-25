<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "Olá mundo!";
$code = "<span class='tag'>#BoraProgramar!<span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Falta 2 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";



/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "Upinside",
    "Course" => "FSPHP",
    "Class" => "Comandos de Saída"
];

print_r($array);

echo "<pre>", print_r($array, true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";




/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);