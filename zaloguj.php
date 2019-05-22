<?php
session_start();

 	$user=$_POST['inputLogin']; // login z formularza
	$pass=$_POST['inputPassword']; // hasło z formularza

	$_SESSION['inputLogin'] = $user;
	$link = mysqli_connect('zdunowski.com.pl', '29409810_testcrm' ,'1995ZQ12WR#', '29409810_testcrm'); // połączenie z BD – wpisać swoje parametry !!!
	if(!$link) { echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error(); } // obsługa błędu połączenia z BD
	mysqli_query($link, "SET NAMES 'utf8'"); // ustawienie polskich znaków
	$ip = $_SERVER['REMOTE_ADDR'];
	$result = mysqli_query($link, "SELECT * FROM users WHERE login='$user'"); // pobranie z BD wiersza, w którym login=login z formularza
	$rekord = mysqli_fetch_array($result); // wiersza z BD, struktura zmiennej jak w BD
	if(!$rekord) //Jeśli brak, to nie ma użytkownika o podanym loginie
	{
			mysqli_close($link); // zamknięcie połączenia z BD
			echo "Brak użytkownika o takim loginie !"; // UWAGA nie wyświetlamy takich podpowiedzi dla hakerów
			echo "blad 1 ";
	}
	else
	{ // Jeśli $rekord istnieje
		if($rekord['password']==$pass) // czy hasło zgadza się z BD
		  {
	
			header('Location: portal.php');
			//$_SESSION['user1'] = '$user';
			$_SESSION['logged'] = true;
			echo "dwa"; 
		}
		else
		{
			$_SESSION['blad'] = '<span style="color:red">The username or password you entered is incorrect, please try again.</span>';
			unset($_SESSION['utworzenie']);
		   	unset($_SESSION['utworzenie2']);	
			header('Location: logowanie.php');
			echo "trzy";

		}
	}
?>
