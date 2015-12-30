# mysqli
Simplest mysqli connection class with character set

# use
define('DATABASE_CHARSET', 'utf8');<br />
define('DATABASE_HOSTNAME', 'localhost');
define('DATABASE_NAME', 'db_name');
define('DATABASE_PASSWORD', 'yourpass');
define('DATABASE_USERNAME', 'root');

$db = new mysqli_link(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME, DATABASE_CHARSET);
