@extends('admin.master_admin')
@section('admin')
    @push('head-script')
        <script src="{{asset('global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('global_assets/js/demo_pages/datatables_advanced.js')}}"></script>

    @endpush
    <!-- Highlighting rows and columns -->
    <div class="card">
        <div class="card-body">
            <a href="" style="float: right;"><i class="btn btn-dark btn-sm m-l-15">
                    Create User
                </i></a>
            <h5 class="card-title">Users list </h5>

        </div>


        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
            <tr>

                <th>SL</th>
                <th>Role</th>
                <th>Name</th>
                <th>Email</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alldata as $key =>$user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a></td>

                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                    <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- /highlighting rows and columns -->
@endsection
