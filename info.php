<html>
<body>
    Benvenuto <?php echo $_POST["name"]." ".$_POST["surname"];?>
    <br></br> 
    Altri dati <?php  echo "<br></br>Sesso: ".$_POST["sesso"]."<br></br>Descrizione: ".$_POST["descrizione"]."<br></br>Data di nascita: ".$_POST["datadinascita"];?>
</body>

</html>