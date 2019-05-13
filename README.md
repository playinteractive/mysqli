# Description
Lightweight MySQLi connection class with character set and timezone settings.

# Install
```bash
$ composer require playinteractive/mysqli dev-master
```

# Example
```php
$db = new mysqli_connect($username, $password, $database, array('offset' => date('P')));

$db->query("SELECT field FROM table");

$db->insert_id();

$db->real_escape_string($str)
```
# Options
```php
$options = [

'host' => 'localhost',
'port' => 3306,
'persistent' => FALSE,
'charset' => 'utf8mb4',
'offset' => '+00:00'

];
```
