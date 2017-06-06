<?php

// $tab = [];

//   for ( $x = 1; $x <= 10; $x++) {
//     $tab[$x] = [];
//     $key = $tab[$x];
//     for ( $y = 1; $y <= $x; $y++){
//         echo '*';
        
//     }
// echo '</br>';
//   }    

for ($i = 1, $sp = 70; $i <= 72; $i++, $i++, $sp--, $sp--) {
            echo str_repeat('/', $sp);
            echo str_repeat("+",$i);
            echo str_repeat('\\',$sp);
            echo '</br>';
        }


  ?>