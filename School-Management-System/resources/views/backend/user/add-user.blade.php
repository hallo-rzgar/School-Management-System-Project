@extends('admin.master_admin')
@section('admin')
    @push('head-script')
        <script src="{{asset('global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
        <script src="{{asset('global_assets/js/demo_pages/form_layouts.js')}}"></script>
        <script src="{{asset('global_assets/js/plugins/notifications/pnotify.min.js')}}"></script>
        <script src="{{asset('global_assets/js/demo_pages/extra_pnotify.js')}}"></script>
        <script src="{{asset('global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
        <script src="{{asset('global_assets/js/demo_pages/form_validation.js')}}"></script>
    @endpush
    @section('title')
        Add User
    @endsection
<div class="content">
    <div class="row">
        <div class="col-lg-12">

            <!-- Basic legend -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Create New User</h5>
                </div>

                <div class="card-body">
                    <form id="editSettings"  class="form-validate-jquery main_form">
                        @csrf
                             <legend class="font-weight-semibold" >Enter User information</legend>

                            <div class="form-group">
                                <label>Enter name:</label>
                                <input type="text" name="name" class="form-control" placeholder="please write name" required>
                            </div>
                            <div class="form-group">
                                <label>Enter email:</label>
                                <input type="email" name="email" class="form-control" placeholder="please write name" required>
                            </div>

                            <div class="form-group">
                                <label>Enter password:</label>
                                <input type="password" name="password" class="form-control" placeholder="enter strong password" required>
                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>

{{--                            <div class="form-group">--}}
{{--                                <label>Repeat password:</label>--}}
{{--                                <input type="password" class="form-control" placeholder="Repeat password">--}}
{{--                                <div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>--}}

                        <div class="form-group">
                            <label>Select user role:</label>
                            <select data-placeholder="Select user role" name="usertype" id="usertype" class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" data-select2-id="16" tabindex="-1" aria-hidden="true" >
                                <option data-select2-id="18"></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                         </div>

                        <div class="text-right">
                            <button type="button" id="save-form" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /basic legend -->

        </div>
     </div>
</div>
    <script>
        $('#save-form').click(function () {

            $.ajax({
                url: '{{route('user.store')}}',
                container: '#editSettings',
                type: "POST",
                data: $('#editSettings').serialize(),
                success: function (data) {
                    new PNotify({
                        // title: 'Success notice',
                        text: `${data.message}`,
                        addclass: 'bg-success border-success',
                        delay: 2000
                    });
                },


            })
        });

    </script>
@endsection
