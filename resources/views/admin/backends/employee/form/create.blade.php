<div class="row">
<div class="col-md-6">
        <div class="form-group">
        <form action="{{ route('employee.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">NIK:</label>
                    <input type="text" class="form-control" id="usr" name="nik">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="usr" name="nik">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>