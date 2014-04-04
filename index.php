<?
	$string = "kimpaksa";
	$key = "wise";
    $result = '';
    
    //$i = 2;
    //$char = substr($string, $i, 1);
  	//$keychar = substr($key, ($i % strlen($key))-1, 1);
  	
  	//$char = chr(ord($char)+ord($keychar));
  
?>
<html>
<head></head>
<body>
<?=$string ?><br>

<?
	for($i=0; $i<strlen($string); $i++) {
	    $char = substr($string, $i, 1);
?>
i=<?=$i ?><br>
<?=$char ?><br>
<?
	    $keychar = substr($key, ($i % strlen($key))-1, 1);
?>
<?=$keychar ?><br>
<?
	    $char = chr(ord($char)+ord($keychar));
?>
<?=$char ?><br>
<?	
	    $result.=$char;
?>
<?=$result ?><br><br>

<?=ord($char) ?><br>
<?=ord($keychar) ?><br>
<?=chr(ord($char) + ord($keychar)) ?><br><br>
	

<?
    }
?>

<?=chr(378) ?><br><br>
<?=chr(120) ?><br>
<?=chr(164) ?><br>
	<?=chr(376) ?><br>


</body>
</html>
