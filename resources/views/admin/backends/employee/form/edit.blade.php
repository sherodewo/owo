<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-{{$id}}"><i class="
glyphicon glyphicon-edit"></i>
</button>
    <div class="modal fade" id="edit-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="editLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="editLabel">Edit Confirmation</h4>
      </div>
<div class="container-fluid">
            <form action="{{ route('employee.update', $id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="table-bordered" style="background:">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="usr" name="name" value="{{ $datas->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="nik">Nik:</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="{{ $datas->nik }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </form>
</div>

    </div>
  </div>
</div>