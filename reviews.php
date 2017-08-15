
<html>
<form action="check_addreviews.php" method="POST" accept-charset="utf-8">
<fieldset><legend>Review</legend>	
    <p> rtitle <input type ="text" name ="rtitle" ></p>
    <p><label for="rating">Rating</label>
    <!-- <p> rating <input type ="text" name ="rating"></p> -->
       <input type="radio" name="rating" value="5" /> 5 
       <input type="radio" name="rating" value="4" /> 4
       <input type="radio" name="rating" value="3" /> 3 
       <input type="radio" name="rating" value="2" /> 2 
       <input type="radio" name="rating" value="1" /> 1</p>
    <p><label for="review">Comments</label><textarea name="comments" rows="8" cols="40">
       </textarea></p>
    
    <p><input type="submit" value="Submit Review"></p>
    
    <input type="hidden" name="product_id" value="actual_product_id" id="product_id">
   <?php
    echo "<input type='hidden' name='rid' value=".$_GET['rid']." id='product_type'>";
   ?>

</fieldset>
</form>
</html>