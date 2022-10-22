@extends('admin.master_admin')
@section('admin')
    @push('head-script')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
        <script src="{{asset('global_assets/js/demo_pages/extra_pnotify.js')}}"></script>
    @endpush
    <!-- Highlighting rows and columns -->
    @section('title')
        View User
    @endsection
    <div class="card">
        <div class="card-title">

     <span class="card-body float-sm-right">
    <a href="{{route('user.add')}}" class="btn btn-dark btn-sm m-l-15"><i
            class="fa fa-plus-circle"></i> Create New</a>
        </span>
            <h5 class="card-body">Users List </h5>

        </div>
        <div class="content">
            <table id="myTable" class="table table-bordered table-hover datatable-highlight table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Create At</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>

        $( document ).ready(function() {

            let table=    $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('user.view') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action'},
                ]
            });

            $('body').on('click', '.sa-params', function () {
                var id = $(this).data('row-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                     showCancelButton: true,
                    confirmButtonColor: '#ef5350',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'User has been deleted.',
                            'success'
                        )
                        var url = "{{ route('user.delete', ':id') }}";
                        url = url.replace(':id', id);

                        var token = "{{ csrf_token() }}";
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                '_token': token,
                                '_method': 'POST'
                            },
                            success: function (data) {
                                table.ajax.reload();

                            }
                        });                    }

                })


            });
         });


    </script>

    <!-- /highlighting rows and columns -->
@endsection
