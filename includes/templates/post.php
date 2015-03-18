<div class="container">
    <div class="row">
            <div class="col-md-12">
                <form action="post.php" method="post" class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Post a business</legend>

                    <!-- Text input-->
                    <div class="control-group1">
                      <label class="control-label" for="name_of_business">Name of Business</label>
                      <div class="controls">
                        <input id="name_of_business" name="name_of_business" type="text" placeholder="Enter the name of the Business here" class="input-xlarge">

                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group1">
                      <label class="control-label" for="postcode">Postcode</label>
                      <div class="controls">
                        <input id="postcode" name="postcode" type="text" placeholder="Please enter the postcode of the Business" class="input-xlarge">

                      </div>
                    </div>
                    
                    <!-- Textarea -->
                    <div class="control-group2">
                      <label class="control-label" for="description">Description</label>
                      <div class="controls">
                        <textarea id="description" name="description" placeholder="Type a description of the business here, do they offer student discounts" class="text-box"></textarea>
                      </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                      <label class="control-label" for="category">Category</label>
                      <div class="controls">
                        <select id="category" name="category" class="input-xlarge1">
                          <option>Food</option>
                          <option>Night Clubs</option>
                          <option>Clothes</option>
                          <option>Gyms</option>
                          <option>Electronics</option>
                          <option>Other</option>
                        </select>
                      </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="control-group">
                      <label class="control-label" for="rating">Rating</label>
                      <div class="controls">
                        <select id="rating" name="rating" class="input-xlarge1">
                          <option>One Star</option>
                          <option>Two Stars</option>
                          <option>Three Stars</option>
                          <option>Four Stars</option>
                          <option>Five Stars</option>
                        </select>
                      </div>
                    </div>


                        <!-- Button -->
                    <div class="control-group">
                      <label class="control-label" for="post"></label>
                      <div class="controls">
                        <button id="post" name="post" class="btn btn-primary">Post</button>
                      </div>
                    </div>


                </fieldset>
                </form>
        </div>
    </div>
</div>
