<html>
<body>

<h1>UPC Wexford Cable Service - 3 Year Financial Projection</h1>

<?php 
$connectionCharge=53;
$cableCost=38;
$cableLength=4100;
$expectedUsers=3000;
$totalCost=$cableLength*$cableCost;
$totalRevenue=$expectedUsers*$connectionCharge;
$net=$totalRevenue-$totalCost;

echo 'Infrastructure investment cost: €' .$totalCost. '<br>';
echo 'Expected customer revenue: €'.$totalRevenue. '<br>';
echo 'Net profit/loss: €'.$net. '<br>';

?>

</body>
</html> 