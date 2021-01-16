<?php



if(!isset($_POST["age"]) AND !isset($_POST["sexe"])){
    
    $message = "";
    
} elseif(!isset($_POST["age"])){
    
    $message = "Vous n'avez pas indiqué l'âge de la personne";
    $messageClass="red";
    
} elseif (!isset($_POST["sexe"])) {
    
    $message = "Vous n'avez pas indiqué le sexe de la personne";
    $messageClass="red";
    
} else {
    
//    if(isset($_POST["age"]) AND isset($_POST["sexe"])){
        
        $age = $_POST["age"]; 
        $sexe= $_POST["sexe"]; 
        if($age < 40 AND $age > 21 AND strtolower($sexe) == "female"){
            
            $message = "Bonjour madame! Vous avez entre 21 et 40 ans";
        }
//    }

    
} 
?>
<html>
	<head>
		<link href="../style.css" rel="stylesheet">
	</head>
	<body>
	<p class="<?php echo $messageClass; ?>"><?php if(isset($_POST["nbr"])) echo $message;?></p>
		<form action="" method="POST">
			<label>Saisissez l'âge de la personne : </label>
			<input type="number" name="age" /><br>
			<label>Choisissez le sexe de la personne: </label>
			<select name="sexe" id="sexe">
				<option value="nothing"></option>
              <option value="female">Female</option>
              <option value="male">Male</option>
            </select><br>
			<input type="submit" value="Soumettre" /> 
		</form>
	</body>
</html>	