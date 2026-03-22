<?php
echo "Enter monthly salary:";
$salary=readline();
echo "Enter total leaves:";
$leaves=readline();
$da=$salary*0.09;
$hra=$salary*0.07;
$fa=$salary*0.12;
$ta=1000;
$leaveDeduction= max(0, ($leaves - 2) * 230);
$totalAllowance=$da+$ta+$fa+$hra;
echo "Allowance Calculation"."\n"."DA = ".$da."\n"."Hra = ".$hra."\n"."TA = ".$ta."\n"."FA = ".$fa."\n";
$grossSalary=$salary+$totalAllowance;
echo "Total Allowance (DA+HRA+TA+FA) = ".$totalAllowance."\n";
echo "Leaves Deduction = ".$leaveDeduction;
echo "Gross Salary = ".$grossSalary."\n";

global $tax;
$income=$taxableSalary= $grossSalary-$leaveDeduction;
if($income<20000){
    $tax=0;
}else if($income>=20000 && $income<40000){
    $tax =($income-20000)*0.05;
}else if($income>=40000 && $income<70000){
    $tax =(20000*0.05)+(($income-20000)*0.10);
}else if($income>=70000 && $income<105000){
    $tax =(20000*0.05)+(30000*0.10)+(($income-20000)*0.15);
}else if($income>=105000 && $income<115000){
    $tax =(20000*0.05)+(30000*0.10)+(35000*0.15)+(($income-20000)*0.25);
}else{
    $tax =(20000*0.05)+(30000*0.10)+(35000*0.15)+(10000*0.25)+(($income-115000)*0.35);
}
echo "Tax Calculated = " .$tax ."\n"; 
echo "Net Salary = " .$grossSalary-$tax;
?>
