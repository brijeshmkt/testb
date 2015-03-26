<nav class="navbar navbar-inverse" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Logo</a>
   </div>
   <div>
      <ul class="nav navbar-nav">
         
       <li><a href="">Live Auctions</a></li>
       <li><a href="">Live Auctions</a></li>
       <li><a href="">Live Auctions</a></li>

       <li><a href="">Live Auctions</a></li>

       <li><a href="">Live Auctions</a></li>


      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
              <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               Select Category <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               
                  <li><a href="index.php">All</a></li>

               <?php foreach ($category->getIdValueArray() as $key => $value): ?>
                  <li><a href="?catid=<?= $value['id'] ?>"><?= $value['category'] ?></a></li>
               <?php endforeach ?>
               
               

               
               
              
              
            </ul>
         </li>

               




      </ul>
   </div>
</nav>
