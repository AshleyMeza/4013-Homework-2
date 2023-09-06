<?php
  $pageTitle ="Post Result";
  include "view-header.php";
?>
    <h1>Post Result</h1>
<?php
if(isset($_POST['my-name'])) {
?>
  <p>The Value sent is :</p>
  <?php
  echo $_POST['my-name'];
}else{
  ?>
  <p>Nothing posted to this page</p>
}
  include "view-footer.php";
?>
