<?php
$f = -50;
$c = 0;
while ( $f <= 50 ) {
     $c = (5/9)*($f - 32);
     echo "F({$f}) = C({$c})\n";
     ++$f;
}