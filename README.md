# Description
Simplest mysqli connection class with character set and timezone settings.

# Install
```bash
$ composer require playinteractive/mysqli dev-master
```

# Use
```php
$db = new mysqli_link($username, $password, $database, $offset, $charset, $hostname);

$db->query("SELECT * FROM table");

$db->insert_id();

$db->real_escape_string($str)
```
# Example
```php
$db = new mysqli_link('dbuser', 'dbpass', 'dbname', date('P'), 'utf8', 'localhost');
```
