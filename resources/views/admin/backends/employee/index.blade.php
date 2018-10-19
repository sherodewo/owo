@extends('admin.layouts.app')
@section('title', 'peresensi')
@section('content')
<div class="col-md-12">
 <h3> Employee </h3>
</div>
<hr>
<div class="col-md-12">
    @include('admin.backends.employee.form.create')
    @include('admin.backends.employee.form.view')
    

</div>
@endsection
