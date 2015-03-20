<form id="categoryform" class="form-horizontal" method="post" action="" enctype="multipart/form-data" >

        <div class="form-group required">

            <label for="name" class="control-label col-xs-2">Product Name</label>

            <div class="col-xs-10">

               <input type="text" class="form-control" name="name" id="name" value="<?php if(isset($editproduct)) echo $editproduct['name'] ?>">

            </div>

        </div>



         <div class="form-group required">

            <label for="category_id" class="control-label col-xs-2">Product Category</label>

            <div class="col-xs-10">

 

                <select name="category_id">
                    <?php $categories = $category->getIdValueArray(); ?>
                   <?php foreach ($categories as $key => $value): ?>
                        <option value='<?= $value['id']; ?>' > <?= $value['category']; ?> </option>
                    <?php endforeach; ?>

                </select>

            </div>

        </div>

        <div class="form-group required">

            <label for="tags" class="control-label col-xs-2">Tags</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" id="tags" name="tags">

            </div>

        </div>

      

        <div class="form-group">

            <label for="image" class="control-label col-xs-2">Upload Image</label>

              <div class="col-xs-10">
                <input type="file" id="image" name="image">
            <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>
        </div>

       <!--  <div class="form-group">

            <label for="exampleInputFile" class="control-label col-xs-2">More Images</label>

              <div class="col-xs-10">
                <input type="file" id="exampleInputFile">
                <input type="file" id="exampleInputFile">
                <input type="file" id="exampleInputFile">
                <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
              </div>
        </div> -->

        <div class="form-group required">

            <label for="description" class="control-label col-xs-2">Product Description</label>

            <div class="col-xs-10">

                <textarea name="description" id="description"></textarea>

            </div>

        </div>

         <div class="form-group required">

            <label for="inputName" class="control-label col-xs-2">Product Tags</label>

            <div class="col-xs-10">

                <input type="radio" name="product_tags" id="product_tags" value="featured">Featured
                <input type="radio" name="product_tags" id="product_tags" value="normal">Normal

            </div>

        </div>

        <div class="form-group ">

            <label for="shipping_amount" class="control-label col-xs-2">Shipping Amount</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" id="shipping_amount" name="shipping_amount">

            </div>

        </div>

        <div class="form-group ">

            <label for="shipping_information" class="control-label col-xs-2">Shipping Information</label>

            <div class="col-xs-10">

                <input type="text" class="form-control" id="shipping_information" name="shipping_information">

            </div>

        </div>

 
        <?php $action = isset($editproduct) ? "editProduct" : "addProduct" ; ?>

        <input type="hidden" name="<?= $action ?>">

        
       

        <div class="form-group">

            <div class="col-xs-offset-2 col-xs-10">

                <button type="submit" value="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

    </form>
