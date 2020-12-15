<?php 
echo '<p>Hello World</p>'; 
include 'inc/inc.php';
/*echo date('Y-m-d H:i:s');*/

echo 'Welcome ', $_ENV["TEST_VAR"], '!';

echo '<h2>DB Configuration</h2>';
echo 'db schema: ', $_ENV["DB_SCHEMA"], '<br />';
echo 'db user: ', $_ENV["DB_USER"], '<br />';
echo 'db password: ', $_ENV["DB_PASSWORD"], '<br />';

?> 
<br /><a href="dbquery.php">Query DB</a>
<br /><a href="contactus.php">Contact Us</a>