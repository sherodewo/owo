@push('scripts')

@endpush
<script type="text/javascript">
    $(function() {
    $('#datatables').datatables({
        processing: true,
        serverSide: true,
        ajax: '{{ route('employee.index') }}',
        columns: [
            { data: 'nik', name: 'nik' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' }
        ]
    });
});
</script>