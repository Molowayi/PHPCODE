<?php
if(isset($_POST["nbr"])){
    
    $nbr = $_POST["nbr"];
    
    if($_POST["nbr"] % 3 == 0 && $_POST["nbr"] % 5 == 0){
       
        $message = "$nbr est multiple de 3 et de 5";
    }
    else {
        
        $message = "$nbr n'est pas multiple de 3 et 5";
        $messageClass="red";
    }
}
?>
<html>
	<head>
		<link href="../style.css" rel="stylesheet">
	</head>
	<body>
	<p class="<?php echo $messageClass; ?>"><?php if(isset($_POST["nbr"])) echo $message;?></p>
		<form action="" method="POST">
			<label>Saisissez un nombre : </label>
			<input type="number" name="nbr" />
			<input type="submit" value="Vérifier" /> 
		</form>
	</body>
</html>	