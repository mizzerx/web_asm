<?php
// Define the connect elements
define('host', 'localhost');
define('dbname', 'studentdb');
define('username', 'root');
define('passwd', '');
define('port', '3306');

// Create connect
$conn = new mysqli(host, username, passwd, dbname, port);

// Check the connection
if ($conn->connect_error) { ?>
  <script>
    alert("Failed to connect MySQL!");
  </script>
<?php } ?>