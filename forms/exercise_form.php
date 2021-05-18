<fieldset>
    <div class="form-group">
        <label for="title">Title *</label>
          <input type="text" name="title" value="<?php echo htmlspecialchars($edit ? $exercise['title'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Title" class="form-control" required="required" id = "title" >
    </div> 

    <div class="form-group">
        <label for="thumbnail">Thumbnail *</label>
        <input type="text" name="thumbnail" value="<?php echo htmlspecialchars($edit ? $exercise['thumbnail'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Thumbnail" class="form-control" required="required" id="thumbnail">
    </div> 


    <div class="form-group">
        <label for="address">Gif *</label>
        <input  type="text" name="gif" value="<?php echo htmlspecialchars($edit ? $exercise['gif'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Gif" class="form-control" id="gif">
    </div> 
    
    <div class="form-group">
        <label for="email">Seconds *</label>
            <input  type="text" name="seconds" value="<?php echo htmlspecialchars($edit ? $exercise['seconds'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Seconds" class="form-control" id="seconds">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
