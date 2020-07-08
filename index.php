<?php
include('figuur.php');
include('vierkant.php');
include('cilinder.php');

$figuur = new Cilinder(3, 3);
echo $figuur->berekenOppervlakte();

?>