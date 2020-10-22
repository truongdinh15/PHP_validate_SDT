<?php
 function isChecKPhone($str) {
     $regex = '/((09|03|07|08|05)+([0-9]{8})\b)/g;';
     if(preg_match($regex,$str)) {
         echo "Phone Match";
     } else {
         echo " NOt phone match";
     }
 }
 $str = "(84)-(0978489648)";
 echo isCheckPhone($str);