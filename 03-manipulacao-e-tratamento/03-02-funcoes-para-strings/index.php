<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string =  "O último show do AC~m/DC foi incrível!";

var_dump([[
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "mb_substr" => mb_substr($string, "9"),
    "strtoupper" => strtoupper($string),
    "mb_strtupper" => mb_strtoupper($string),

]]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);


/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);