# mysqli
Simplest mysqli connection class with character set

# use
$db = new mysqli_link($hostname, $username, $password, $database, $charset);

$query = $db->query("SELECT * FROM table");
