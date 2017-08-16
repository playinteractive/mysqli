# mysqli
Simplest mysqli connection class with character set and time zone settings.

# example
$db = new mysqli_link(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME, 'utf8', date('P'));

# use
$db = new mysqli_link($hostname, $username, $password, $database, $charset, $offset);

$db->query("SELECT * FROM table");

$db->insert_id();

$db->real_escape_string($str)
