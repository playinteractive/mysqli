# Description
Simplest mysqli connection class with character set and timezone settings.

# Install
```bash
$ composer require playinteractive/mysqli dev-master
```

# Use
```php
$db = new mysqli_link($hostname, $username, $password, $database, $charset, $offset);

$db->query("SELECT * FROM table");

$db->insert_id();

$db->real_escape_string($str)
```
# Example
```php
$db = new mysqli_link('host', 'username', 'pass', 'db', 'utf8', date('P'));
```
