<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump($appTemplate, $webTemplate);

use App\Template;
use Web\Template As webTemplate;

$appUseTemplate = new Template();
$wevUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $wevUseTemplate
);
/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 *
 *
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__. "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->firstName = "Marcelo";
//$user->lastName = "Leite";

//$user->setFirstName("Robson");
//$user->setLastName("Leite");

var_dump($user, get_class_methods($user));

echo "<p>O email de {$user->getFirstName()} é {$user->getEmail()}!</p>";

fullStackPHPClassSession("manipulação", __LINE__);


$robson = $user->setUser(
    "Marcelo",
    "Leite",
    "cursos@upinside.com.br"
);

if (!$robson) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$kaue = new \Source\Qualifield\User();
$kaue->setUser(
    "Kaue",
    "Cardoso",
    "cursos@upinside.com.br"
);

$gau = new \Source\Qualifield\User();
$gau->setUser(
    "Gau",
    "Morandi",
    "cursos@upinside.com.br"
);

var_dump(
    $user,
    $kaue,
    $gau
);


