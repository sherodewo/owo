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
                  <table class="table table-bordered datatables" id="datatables">
				  <tr>
				  <td>No</td>
					<td>Nama</td>
					<td>Email</td>
					<td>Nik</td>
					<td colspan="2">Action</td>
				  
				  </tr>
				  @foreach ($data as $index =>$datas)
				  <tr>
				     <td>{{ $index+1 }}</td>
				     <td>{{ $datas->name }}</td>
					 <td>{{ $datas->email }}</td>
                     <td>{{ $datas->nik }}</td>
                     <td>
                     @include('admin.backends.employee.form.detail')
                     @include('admin.backends.employee.form.edit', ['id' => $datas->id])
                     @include('admin.backends.employee.form.delete', ['id' => $datas->id])

                     </td>
				  </tr>
				  @endforeach
            </td>
        </tbody>
    </table>
</div>
