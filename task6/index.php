<?php

define('TABLE_LENGTH',6);

echo "<table>";
for($i=0; $i<TABLE_LENGTH; $i +=  1){
    echo "<tr><td>Some Value</td></tr>";
}

echo "</table>";
$x = 9;
$y = 10;

echo "output";
var_dump($x == $y) ;
var_dump($y);
$g = "abc";
var_dump($g);


echo "<br>";
echo "<br>";
echo "=============================";
echo "<br>";
echo " comparison operator";
echo "<br>";
echo " ===";
echo "<br>";
echo "<br>";
?>

<pre>
    comparison of x = 9 and y = 9; 
</pre>


<?php


$x = 9;
$y = 9;

echo $x === $y;
?>

<pre>
    comparison of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '9';

    var_dump($x === $y);

?>

<pre>
    comparison == of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '9';

    var_dump($x == $y);

?>


<pre>
    ===================================
    comparison X!=Y of x = 9 and y = 9; 
</pre>


<?php

    $x =  9;
    $y = 9;

    var_dump($x != $y);

?>

<pre>
    ===================================
    comparison x!=y of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '9';

    var_dump($x != $y);

?>

<pre>
    ===================================
    comparison x!==y of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '9';

    var_dump($x !== $y);

?>



<pre>
    ===================================
    comparison x>y of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '9';

    var_dump($y > $x);

?>


<pre>
    ===================================
    comparison x<y of x = 9 and y = '9'; 
</pre>


<?php

    $x =  9;
    $y = '10';

    var_dump($y > $x);

?>


<pre>
    ===================================
    comparison x >= y of x = 10 and y = 10; 
</pre>


<?php

    $x =  10;
    $y = '10';

    var_dump($x >= $y);

    

?>


<pre>
    ===================================
    Increment X = X +1; x = 10; ++$x;
    Decrement Y = Y -1;

    Unary Operator : need one operand called x or y or z
    Types:
       Pre Increment :    ++$i;
       Post Increment:    $i++;


       Pre Decrement:      --$i;
       Post Decrement:     $i--;

       for($i=0; $i<10; ++$i)
       for($i=0; $i<10; $i++)

       $y = ++$x;  
       $y = $x++;

       $z = ($y + $x+ $z++);
</pre>


<?php

    $x =  10;
    $y = 10;

    ++$x;
    echo $x;
    echo "<br>";
    --$x;
    echo $x;
    echo "<br>";


    ++$y;
    echo $y;
    echo "<br>";

    

?>

<pre>
    ===================================
        LOGICAL OPERATORS
    ===================================
    
</pre>

<?php

/**
 * Write a program to evaluate evens and odds in an array, print tables of even numbers which are 4, 10, 24, 30
 */

 $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
 $length = count($numbers);


 
for($j=0; $j<$length; ++$j){


    if( ($numbers[$j] % 2== 0) and  ($numbers[$j] == 4 || $numbers[$j] == 10 || $numbers[$j] == 24 || $numbers[$j] == 30 ) ){

        echo "<table>";
        for ($i = 1; $i < 21; $i = $i + 1) {
            echo "<tr><td>";
            echo $numbers[$j]." x " . $i . "= " . ($i * $numbers[$j]);
            echo "<br>";
            echo "</td></tr>";
        }
        echo "</table>";
        
    }
    else{

        if($numbers[$j] == 23){

            echo "<table>";
        for ($i = 1; $i < 21; $i = $i + 1) {
            echo "<tr><td>";
            echo $numbers[$j]." x " . $i . "= " . ($i * $numbers[$j]);
            echo "<br>";
            echo "</td></tr>";
        }
        echo "</table>";

        }

    }

}


$arr = array('one' => 1,'two' => 2, 'three' => 3);

$data = [
    'tm_lcdv' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'LCDV'
    ],
    'pk_tyypkood' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Type code'
    ],
    'tm_eunr' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'EU nr.'
    ],
    'mr_mootor' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'no',
        'column_header_name' => 'Engine'
    ],
    'tm_lisad' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'no',
        'column_header_name' => 'Equipment'
    ],
    'keret_keretyyp' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Type'
    ],
    'v_nimi' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Colour'
    ],
    'tm_user_id' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Orderer'
    ],
    'ki_omahind' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Cost price'
    ],
    'ki_diilerihind' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Dealer price'
    ],
    'ku_transport' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Transport'
    ],
    'tm_tmyygihind' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Sales price'
    ],
    'ki_soodushind' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Discounted price'
    ],
    'ki_invoice' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Invoice price EUR'
    ],
    'ki_invoice-7' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Invoice price'
    ],
    'ki_kerenr1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Body nr. 1'
    ],
    'ki_kerenr2' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Body nr. 2'
    ],
    'sk_skoht' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Arrival location'
    ],
    'ki_lattu-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Arrival date'
    ],
    'ki_lattu-2' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Arrival month'
    ],
    'lk_lattu_koht' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Location (stock)'
    ],
    'ak_asukoht' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Location (region)'
    ],
    'ss_data' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'State'
    ],
    'am_kpv-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Stock date'
    ],
    'am_kpv-2' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Stock month'
    ],
    'ki_invoice_nr' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Invoice nr.'
    ],
    'ki_invoice_kpv-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'no',
        'column_header_name' => 'Invoice date'
    ],
    'ki_invoice_kpv-2' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Invoice month'
    ],
    'ki_invoice_kpv-3' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Age'
    ],
    'ki_arvenr' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Billing nr.'
    ],
    'ki_diilerile_kpv' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Dealer date'
    ],
    'ps_data' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'PDI Status'
    ],
    'pd_aeg-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'PDI order date'
    ],
    'pd_kinnitus-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'PDI confirmation date'
    ],
    'pd_valmis-1' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'PDI completion date'
    ],
    'br_central_user_id-7' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Broker'
    ],
    'tm_myyk-2' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Sale'
    ],
    'br_central_client_id' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Klient_ID'
    ],
    'tm_std_lisad' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Standard equipment'
    ],
    'ark_regnr' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Registration nr.'
    ],
    'tm_supportinvoice' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Support invoice'
    ],
    'tm_supportdelivery' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Support delivery'
    ],
    'kk_data' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Transmission'
    ],
    'tm_vinsid' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'AMW VINSID'
    ],
    't_place' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => '*typecodePlace'
    ],
    'tm_web' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Web'
    ],
    'centralWeb' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Central web'
    ],
    'ki_arvenr_paymentdue' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Payment terms'
    ],
    'soodustus' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Discount'
    ],
    'bookingUserCountry' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Broker'
    ],
    'tm_co_nedc' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'CO2 NEDC'
    ],
    'tm_co_wltp' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'CO2 WLTP'
    ],
    't_category' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Category'
    ],
    'ki_sfin' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'SFin'
    ],
    'tm_dinfo' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Distributor'
    ],
    'sc_data' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Deposit agreement'
    ],
    'tm_fleet_code' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Fleet code'
    ],
    'tm_support_special_b2b' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Support Special no B2B'
    ],
    'tm_coc_variant' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Variant'
    ],
    'tm_coc_version' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Version'
    ],
    'dw_site_id' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Dealer web'
    ],
    'tm_Tellimus_ID' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'no',
        'column_header_name' => 'Tellimus_ID'
    ],
    'mu_mudel' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Model'
    ],
    'tm_tellimuse_nr' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'no',
        'column_header_name' => 'Order nr.'
    ],
    'a_info' => (array)[
        'status' => 'visible',
        'allow_global_search' => 'yes',
        'column_header_name' => 'Info'
    ]
];

foreach($data as $key => $value){
    echo "<h2>".$key."</h2>";
    echo "<div>";
    foreach($value as $innerKey => $innerValue){
        echo $innerKey.' : '.$innerValue;
        echo "<br>";
    }

    echo "</div>";

    // exit;
}












 





?>
