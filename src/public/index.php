<?php
  $numbers = [];
  for($i = 1; $i < 10; $i++) {
  $numbers[] = $i;
  }
  $totalNumber = array_sum($numbers);
  echo $totalNumber;
  