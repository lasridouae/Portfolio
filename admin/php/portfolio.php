<h2>Edit Portfolio Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Project Successfully Added !
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
  <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Project Name</label>
      <input type="name" name="projectname" class="form-control" id="name" placeholder="Project name">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" class="form-control" id="email" placeholder="github link">
    </div>
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtoportfolio" class="btn btn-primary" value="Add To Portfolio">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
<?php
$sql = "SELECT * from `portfolio`";
$result = mysqli_query($conn, $sql);
 while ($row = mysqli_fetch_assoc($result)) :?>
     <tr>
         <div class="modal fade" id="modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Portfolio</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $row['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?php echo $row['projectpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  
   <div class="form-group col-md-6 mt-auto">
      <label for="name">Project Name</label>
      <input type="name" name="projectname" value="<?php echo $row['projectname']?>" class="form-control" id="name" placeholder="project-name">
    </div>

    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" value="<?php echo $row['projectlink']?>" class="form-control" id="email" placeholder="lien-github">
    </div>

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
          </form>
      </div>
    </div>
  </div>
</div>   

              <td><img src="../assets/img/<?php echo $row['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?php echo $row['projectname']?></td>
         <td>
             <a href="<?php echo $row['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?php echo $row['id']?>">
  Edit
</button> <a href="php/uportfolio.php?del=<?php echo $row['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
             <?php endwhile; ?>    
        