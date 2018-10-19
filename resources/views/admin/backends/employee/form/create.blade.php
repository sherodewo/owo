<div class="row">
<div class="col-md-6">
<div class="container">		
	
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="
glyphicon glyphicon-plus"></i>Karyawan
</button>
<hr>
 
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Create Karyawan</h4>
				</div>
				<!-- body modal -->
				<div class="form-group">
        <form action="{{ route('employee.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">NIK:</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
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
			</div>
		</div>
	</div>
   </div>
        
