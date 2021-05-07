<?php
echo("Акция скоро закончиться!")."\n";
$nextWeek = time() + (10 * 12 * 60 * 50);
echo date("Осталось: d дней g часов i минуты", $nextWeek) ."\n";
