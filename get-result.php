<?php
  $pageTitle ="Get Result";
  include "view-header.php";
?>
    <h1>Get Result</h1>
<?php
if(isset($_GET['my-name'])) {
?>
  <p>The Value sent is :</p>
  <?php
  echo $_GET['my-name'];
}else{
  ?>
  <p>Nothing was sent to this page</p>
  <?php
}
  include "view-footer.php";
?>
