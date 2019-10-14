<?php
$a = 10;
$b = 15;
$obdelnikobsah = $a * $b;
$strana = 6;
$uhel = 60;
$vyska = $strana * sin (deg2rad($uhel));
$obsahtrojuhelniku = ($vyska * $strana)/2;
?>
<html>
<div>
Obsah obdelníku o stranách a= <?php echo $a; ?> cm a b= <?php echo $b; ?>cm je <?php echo ($obdelnikobsah); ?>cm2
</div>

<div>
Rovnostranný trojúhelník o straně délky <?php echo $strana; ?> cm a úhlu <?php echo $uhel; ?>° má obsah <?php echo round($obsahtrojuhelniku); ?>cm2
</div>

</html>