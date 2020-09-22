<h2>Edit Home Section</h2>
<?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
<div class="alert alert-success text-center" role="alert">
    Successfully Updated !
</div>
<?php
  }  
  if($_GET['msg']=='error'){
      ?>
<div class="alert alert-danger text-center" role="alert">
    something wrong with your image please check type or size !
</div>
<?php
  } } 
?>
<form method="post" action="php/uhome.php" enctype="multipart/form-data">
    <div class="form-row">


        <div class="form-group col-md-6">
            <label for="twitter">Twitter</label>
            <input type="text" class="form-control" value="<?=$data['twitter']?>" name="twitter" id="twitter"
                placeholder="https://twitter.com/MohanGo94273231">
        </div>

        <div class="form-group col-md-6">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook"
                placeholder="https://facebook.com/MohanGo94273231">
        </div>


        <div class="form-group col-md-6">
            <label for="linkedin">Linkedin</label>
            <input type="text" class="form-control" value="<?=$data['linkedin']?>" name="linkedin" id="linkedin"
                placeholder="https://linkedin.com/MohanGo94273231">
        </div>
        <div class="form-group col-md-6">
            <label for="github">Github</label>
            <input type="text" class="form-control" value="<?=$data['github']?>" name="github" id="github"
                placeholder="https://github.com/MohanGo94273231">
        </div>
    </div>


    <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>