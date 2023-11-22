<?php
$raw = '22. 11. 1968';
$start = DateTime::createFreomFormat('d. m. Y', $raw);
$end = clone $start;
$end -> add(new DateInterval('PIM6D'));

$diff = $end->diff($start);

if ($start < $end) {
  echo "Start is before the end" . PHP_EOL;
}
echo 'Start date : ' . $start->format('Y-m-d') . PHP_EOL
