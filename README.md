# mysqli
Simplest mysqli connection class with character set and time zone settings.

# use
$db = new mysqli_link($hostname, $username, $password, $database, $charset, $offset);

$db->query("SELECT * FROM table");

$db->insert_id();

$db->real_escape_string($str)

# example
$db = new mysqli_link('host', 'username', 'pass', 'db', 'utf8', date('P'));
