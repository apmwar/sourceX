<?php
if ( empty( $_POST ) ){
?>
  <form name='registration' action='adduser.php' method='POST'/>
    <label for 'id'>Registration ID: </label>
    <input type="text" name="id" />
    <label for 'password'>New Password: </label>
    <input type="password" name="password" />
    <button type="submit">Submit</button>
  </form>
<?php
} else {
  $user = 'aruna';
  $pass = '2048';
  $db = new PDO( 'mysql:host=localhost;dbname=users', $user, $pass );
  $form = $_POST;
  $id = $form[ 'id' ];
  $password = $form[ 'password' ];
  $sql = "UPDATE users SET password = :password WHERE id = $id";
  $query = $db->prepare( $sql );
  $query->execute( array ( ":password" => $password ) );
}
?>
