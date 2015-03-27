
<form id="categoryform" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >

        <div class="form-group required">

            <label for="name" class="control-label col-xs-2">Product Title</label>

            <div class="col-xs-2">

               <input type="text" class="form-control" name="name" id="name" value="<?= $auction['name'];  ?>">

            </div>

       
            <label for="category_id" class="control-label col-xs-2">Product Category</label>

            <div class="col-xs-2">

 

                <select name="category_id">
                    <?php $categories = $category->getIdValueArray(); ?>
                   <?php foreach ($categories as $key => $value): ?>
                        <option <?= ($auction['category_id'] == $value['id']) ? "selected":"";  ?>value='<?= $value['id']; ?>' 
                            
                        > <?= $value['category']; ?> </option>
                    <?php endforeach; ?>

                </select>

            </div>

        </div>

  
        <div class="form-group required">

            <label for="description" class="control-label col-xs-2">Product Description</label>

            <div class="col-xs-10">

                <textarea name="description" id="description"><?= $auction['description'];  ?></textarea>

            </div>

        </div>

        <div class="form-group required">
            <label for="description" class="control-label col-xs-2">Product Short Description</label>
            <div class="col-xs-2">
                <input type="text" name="short_description" id="short_description" value="<?= $auction['short_description']; ?>">
            </div>
        

            <label for="image" class="control-label col-xs-2">Upload Image</label>

              <div class="col-xs-2">
                <img width="100" src="../files/products/<?= $auction['image'];  ?>">
                <input type="file" id="image" name="image">
            <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>
        </div>


        <div class="form-group required">
            <label for="opening_price" class="control-label col-xs-2">Opening Price</label>
            <div class="col-xs-2">
                <input type="text" name="opening_price" id="opening_price" value="<?= $auction['opening_price'];  ?>">
            </div>
        
        
        
            <label for="lowest_bid_price" class="control-label col-xs-2">Lowest bid Price</label>
            <div class="col-xs-2">
                <input type="text" name="lowest_bid_price" id="lowest_bid_price" value="<?= $auction['lowest_bid_price'];  ?>">
            </div>
        </div> 
        
        <div class="form-group required">
            <label for="bid_price" class="control-label col-xs-2">Incremental Value (bid price)</label>
            <div class="col-xs-2">
                <input type="text" name="bid_price" id="bid_price" value="<?= $auction['bid_price']; ?>">
            </div>
            
             <label for="buy_now_price" class="control-label col-xs-2">Buy Now Price</label>
            <div class="col-xs-2">
                <input type="text" name="buy_now_price" id="buy_now_price" value="<?= $auction['buy_now_price']; ?>">
            </div>

        </div>           

        <div class="form-group required">
            <label for="start_date" class="control-label col-xs-2">Start Date</label>
            <div class="col-xs-2">
                <input type="text" name="start_date" id="start_date" value="<?= $auction['start_date']; ?>">
            </div>

             <label for="end_date" class="control-label col-xs-2">End Date</label>
            <div class="col-xs-2">
                <input type="text" name="end_date" id="end_date" value="<?= $auction['end_date']; ?>">
            </div>

        </div> 

       

         <div class="form-group required">
            <label for="buy_now_price" class="control-label col-xs-2">Payment Mode</label>
            <div class="col-xs-2">
                <select id="payment_method" name="payment_method">
                    <option value="paypal">PayPal</option>
                    <option value="wire_transfer">Wire Transfer</option>
                    <option value="mailing">By Cheque</option>
                    <option value="cash">Cash</option>
                </select>
            </div>

            <label for="shipping_amount" class="control-label col-xs-2">Shipping Amount</label>

            <div class="col-xs-2">

                <input type="text" class="form-control" id="shipping_amount" name="shipping_amount" value="<?= $auction['shipping_amount']; ?>">

            </div>


        </div>  

         <input type="hidden" name="editproduct">

    

        <div class="form-group ">

            <label for="shipping_information" class="control-label col-xs-2">Shipping Information</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" id="shipping_information" name="shipping_information" value="<?= $auction['shipping_information']; ?>">

            </div>

        </div>

 
       

        

        
       

        <div class="form-group">

            <div class="col-xs-offset-2 col-xs-10">

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

    </form>
