
<!-- Modal -->
 <form action= "insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        


      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="First Name" name="firstname" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Last Name" name="lastname" aria-describedby="basic-addon2">

</div>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Age" name="age" aria-describedby="basic-addon3">

</div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>