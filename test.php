<?php
include('init.php');


// Keeping logic in header http://www.unieauction.com/platinum-demo/users/signup
$query = "select * from auction_products";
$res = $db->getAll($query);

include('header.php');

?>



   <script type="text/javascript" language="javascript">
   $(document).ready(function() {
      $("#driver").click(function(event){
          $('#stage').load('result.html');
      });
   });
   </script>

 <p>Click on the button to load result.html file:</p>
   <div id="stage" style="background-color:blue;">
          STAGE
   </div>
   <input type="button" id="driver" value="Load Data" />



<?php include('footer.php'); ?>