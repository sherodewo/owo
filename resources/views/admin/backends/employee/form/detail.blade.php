<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn-success" data-toggle="modal" data-target="#detail">
        <i class="glyphicon glyphicon-search"></i>
    </button>
	<!-- Modal -->
	<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="detailLabel">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="detailLabel">Detail</h4>
      </div>
      <table class="table table-bordered">
				  <tr>
				  <td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Nik</td>
				  
				  </tr>
				  @foreach ($data as $index =>$datas)
				  <tr>
                     <td>{{ $index+1 }}</td>
				     <td>{{ $datas->name }}</td>
					 <td>{{ $datas->email }}</td>
                     <td>{{ $datas->nik }}</td>
                     
				  @endforeach
            </tr>
        </tbody>
    </table>
      </div>
    </div>
  </div>
</div>