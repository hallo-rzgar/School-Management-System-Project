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
        edit Group
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
                        <form id="editSettings"  class="main_form">
                            @csrf
                            <legend class="font-weight-semibold" >Enter Class name</legend>
                            <input type="hidden" id="id" name="id" value="{{$data->id}}">

                            <div class="form-group">
                                <label>Enter name:</label>
                                <input value="{{$data->name}}" type="text" name="name" class="form-control" placeholder="please write name" required>
                            </div>




                            <div class="text-right">
                                <button type="button" id="edit-form" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic legend -->

            </div>
        </div>
    </div>
    <script>
        $('#edit-form').click(function () {
            var id =$('#id').val();
            $.ajax({
                url: '{{route('student.class.update')}}',
                container: '#editSettings',
                redirect:false,
                data: $('#editSettings').serialize(),
                id:id,
                success: function (data) {
                    new PNotify({
                        // title: 'Success notice',
                        text: `${data.message}`,
                        addclass: 'bg-success border-success',
                        delay: 2000
                    });
                    window.location.replace('/setups/student/group/view');

                },


            })
        });

    </script>
@endsection
