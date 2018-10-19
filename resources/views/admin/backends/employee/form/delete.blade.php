<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="
glyphicon glyphicon-trash"></i>
</button>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="deleteLabel">Delete Confirmation</h4>
      </div>
      <div class="modal-body text-center">
        Are you sure you want to delete this project?
      </div>
      <div class="modal-footer">
      <form action="{{ route('employee.destroy', $id) }}" method="post">
{{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-default" >Yes</button>
</form>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>