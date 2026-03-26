<?php
$no=readline();
$sum=0;
for($i=0;$i<=(($no*2)-1);$i++){
    if($i%2!==0){
        echo $i."\n";
        $sum+=$i;
        
    }
}
echo $sum;


?>
