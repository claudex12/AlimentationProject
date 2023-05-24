<?php
session_start();
session_destroy();

echo "

   <script>
          alert('click ok to logout');
           window.location.assign('index.php');
   </script>
";

?>