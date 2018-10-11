<?php
use Builder\VehiculeDirector;
use Builder\Automobile;

ini_set("display_errors", true);
error_reporting(E_ALL^E_NOTICE);

/**
* Utiliser les Writer de manière KISS (Keep It Simple and Stupid)


$writer = new PlainWriter();
$writer->text("Hello PHP");
echo $writer->afficher();
echo "<br><!-- poor break line -->\n";

$writer = new RichWriter();
$writer->text("Hello Rich PHP");
echo $writer->afficher();
*/

/**
 * Utiliser une usine abstraite

$factory = new WriterFactory();
$plainWriter = $factory->createPlainWriter("Hello PHP");
$richWriter = $factory->createRichWriter("Hello Rich PHP", "h2");

echo $plainWriter->afficher() . "<br>\n";
echo $richWriter->afficher();
 */
require_once(__DIR__ . "/Classes/Abstract/Writer/Factory.php");
//$factory = new Factory();
$plainWriter = Factory::create("plain", ["Hello PHP"]);

$richWriter = Factory::create("rich", ["Hello Rich PHP", "strong"]);
echo $plainWriter->afficher();
echo $richWriter->afficher();

/**
 * Pattern Prototype
 */
require_once(__DIR__ . "/Classes/Prototype/StagiairePrototype.php");
require_once(__DIR__ . "/Classes/Prototype/FormateurPrototype.php");

// On instancie une seule fois
$stagiairePrototype = new StagiairePrototype();
for($i = 0; $i < 10; $i++) {
	$stagiaire = clone $stagiairePrototype;
	$stagiaire->name("Stagiaire : " . $i);
	echo $stagiaire;
}

/**
 * Pattern Pool
*/
require_once(__DIR__ . "/Classes/Pool/WorkerPool.php");
$workerPool = new WorkerPool();
$worker1 = $workerPool->get();
$worker2 = $workerPool->get();

echo $worker1->getDate() . "<br />";
echo $worker1->run("azerty") . "<br>\n";
echo $worker2->getDate() . "<br />";
echo $worker2->run("qwerty") . "<br>\n";
echo "\n<br>\nInstances courantes : " . $workerPool->count();

$workerPool->dispose($worker1);
echo "\n<br>\nInstances courantes : " . $workerPool->count();
$worker3 = $workerPool->get();
echo $worker3->getDate() . "<br>";
echo $worker3->run("hola") . "<br>\n";

echo "\n<br>\nInstances courantes : " . $workerPool->count();

/**
 * Builder : Construire des objets complexes
 */
require_once(__DIR__ . "/Classes/Builder/VehiculeDirector.php");
require_once(__DIR__ . "/Classes/Builder/Automobile.php");

$carBuilder = new Builder\Automobile(); // Définir un builder d'Automobile
$maVoiture = (new VehiculeDirector())->build($carBuilder);
var_dump($maVoiture);

