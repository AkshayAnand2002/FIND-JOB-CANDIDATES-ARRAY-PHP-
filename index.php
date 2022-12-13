<?php
/*LIST OF PEOPLE'S INFORMATION WITH NAME AND AGE IS GIVEN.
COUNT NO. OF ADULTS(18+ YRS OLD) AND CHILDREN
(2+).
WE WANT A LIST OF PEOPLE WHO CAN APPLY FOR JOB OPENING.
*/
$people=[
    ['name'=>'ak1','age'=>2],
    ['name'=>'ak2','age'=>6],
    ['name'=>'ak3','age'=>23],
    ['name'=>'ak4','age'=>24],
    ['name'=>'ak5','age'=>25],
    ['name'=>'ak6','age'=>26],
    ['name'=>'ak7','age'=>20],
    ['name'=>'ak8','age'=>27],
    ['name'=>'ak9','age'=>28],
    ['name'=>'ak10','age'=>29],
    ];
$adultCount=0;
$childCount=0;
$canApplyForJob=[];
foreach($people as $person){
    $age=$person['age'];
    if($age>=18){
        $adultCount++;
        if($age>=22 && $age<=30){
            $canApplyForJob[]=$person;
        }
    }else{
        $childCount++;
    }
}
echo "THERE ARE $adultCount ADULTS IN THE COMMUNITY.".PHP_EOL ;
echo "THERE ARE $childCount CHILDREN IN THE COMMUNITY.".PHP_EOL  ;
echo "LIST OF PEOPLE WHO CAN APPLY FOR JOB OPENING." .PHP_EOL ;
print_r($canApplyForJob);
//.PHP_EOL REPRESENTS END OF LINE AND MOVES TO NEW LINE.
?>
