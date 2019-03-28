
<table border="1" cellpadding = "5" >
  <tr>
    <th>User ID</th>
    <th>UserName</th>
  </tr>
<?php
require_once("core/autoloader/autoloader.php");
// require_once("core/autoloader/autoloader.php");
// AutoLoader::init( __DIR__ ."/core/classes");
core\autoloader\AutoLoader::init( __DIR__ ."/core/classes");
$database = new core\classes\MySQLDatabase();
$user     = new core\classes\User();
$found_user = $user->select_all_users();
$user_rows = $found_user->fetchAll(PDO::FETCH_CLASS , "core\classes\User");
foreach($user_rows as $user_row):?>
    <tr>
      <td><?php echo $user_row->namespace_user_id ; ?></td>
      <td><?php echo $user_row->namespace_user_name ; ?></td>
    </tr>
<?php endforeach ;#functions::print_hello(); ?>
</table>
