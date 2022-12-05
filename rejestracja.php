<html>
<head>
<title>Rejestracja do bazy</title>
</head>
<body>


<form method="POST" action="rejestracja.php">

login:<br><input name="logins"><br>
haslo:<br><input type="haslo" ><br>
Powtorz haslo:<br><input type="haslo" ><br>
Imie:<br><input name="Imie"><br>
Nazwisko:<br><input name="Nazwisko"><br>
<br>
<input type="submit" name="submit" value="Zarejestruj">

</form>





<?php
if(!$db_lnk=mysqli_connect("localhost", "root", "", "rejestracja"))
{
    echo "błąd połączenia";
}
if(isset($_POST['rejestr']))
{
$haslo1 = $_POST['haslo'];
$login1 = $_POST['logins'];
$query = "SELECT * FROM rejestracja WHERE login = '$login1'";
$result = mysqli_query($db_lnk, $query);
if(mysqli_num_rows($result)!=0)
{
    exit("login jest juz zajety");
}
$Imie1 = $_POST['Imie'];
$query = "SELECT * FROM rejestracja WHERE Imie = '$Imie1'";
$result = mysqli_query($db_lnk, $query);
if(mysqli_num_rows($result)!=0)
{
    exit("email jest juz zajety");
}
$query = "INSERT INTO rejestacja (logins, haslo, Imie, Nazwisko, ) VALUES ('$login1', '$haslo1', '$Imie', '$Naziwsko')";
mysqli_query($db_lnk, $query);
mysqli_close($db_lnk);
}
?>



</body>
</html>




