<?php
require_once('book.php');
require_once('ebook.php');
require_once('bookTitleDecorator.php');
require_once('bookTitleExclaimDecorator.php');
require_once('bookTitleStarDecorator.php');

$eBook = new EBook("  Mastering PHP Design Patterns  ", "Junade Ali", "Some contents.");
$decorator = new BookTitleDecorator($eBook);
$starDecorator = new BookTitleStarDecorator($decorator);
$exclaimDecorator = new BookTitleExclaimDecorator($decorator);

echo $decorator->showTitle()."\n";

$exclaimDecorator->exclaimTitle();
echo $decorator->showTitle()."\n";

$decorator->resetTitle();

$starDecorator->starTitle();
echo $decorator->showTitle()."\n";

?>