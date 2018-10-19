<div class="box-body">
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
                  <table class="table table-bordered">
				  <tr>
				  <td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Nik</td>
					<td colspan="2">Action</td>
				  
				  </tr>
				  @foreach ($data as $index =>$datas)
				  <tr>
				   <td>{{ $datas->id }}</td>
				     <td>{{ $datas->name }}</td>
					 <td>{{ $datas->email }}</td>
                     <td>{{ $datas->nik }}</td>
                     <td>
                     @include('admin.backends.employee.form.detail')
                     <button type="button" class="btn-primary">
                     <i class="glyphicon glyphicon-edit"></i></button>
                     @include('admin.backends.employee.form.delete', ['id' => $datas->id])

                     </td>
				  </tr>
				  @endforeach
            </td>
        </tbody>
    </table>
</div>
