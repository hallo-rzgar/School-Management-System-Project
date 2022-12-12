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
        Add Fee Amount
    @endsection
    <div class="content">
        <div class="row">
            <div class="col-lg-12">


                <!-- Basic legend -->
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title">Create New Amount</h5>
                    </div>


                    <div class="add_item">

                    <div class="card-body">
                        <form id="editSettings" class="main_form">
                            @csrf
                            <legend class="font-weight-semibold">Fee Category Name</legend>

                            <div class="form-group">
                                <h5 class="">Fee Category <span class="text-danger">*</span></h5>
                                <select class="form-control" name="fee_category_id" id="">
                                    <option value="">Select Fee Category</option>
                                    @foreach($getCategory as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <h5 class="">Student Class <span class="text-danger">*</span></h5>
                                        <select class="form-control" name="class_id[]" id="">
                                            <option value="" disabled="">Select Student Class</option>
                                            @foreach($getClass as $class)
                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-5" style="margin-top: 10px">
                                    <div class="form-group">
                                        <label>Amount:</label>
                                        <input type="text" name="amount[]" class="form-control"
                                               placeholder="please write name" required>
                                    </div>


                                </div>
                                <div class="col-md-2" style="margin-top: 40px">
                                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                                </div>
                            </div>




                    </div>
                    </div>

                            <div class="text-right">
                                <button type="button" id="save-form" class="btn btn-primary">Submit form <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>


                </div>
                <!-- /basic legend -->

            </div>
        </div>
    </div>
    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
           <div class="form-row">
               <div class="col-md-5">
                   <div class="form-group">
                       <h5 class="">Student Class <span class="text-danger">*</span></h5>
                       <select class="form-control" name="class_id[]" id="">
                           <option value="" disabled="">Select Student Class</option>
                           @foreach($getClass as $class)
                               <option value="{{$class->id}}">{{$class->name}}</option>
                           @endforeach
                       </select>
                   </div>

               </div>
               <div class="col-md-5" style="margin-top: 10px">
                   <div class="form-group">
                       <label>Amount:</label>
                       <input type="text" name="amount[]" class="form-control"
                              placeholder="please write name" required>
                   </div>


               </div>
               <div class="col-md-2" style="margin-top: 44px">
                   <span class="btn btn-success addeventmore "><i class="fa fa-plus-circle"></i> </span>
                   <span class="btn btn-danger removeeventmore "><i class="fa fa-minus-circle"></i> </span>
               </div>
           </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
           let counter = 0;
           $(document).on("click",".addeventmore",function (){
               var whole_extra_item_add = $('#whole_extra_item_add').html();
               $(this).closest(".add_item").append(whole_extra_item_add);
               counter++;

           });
            $(document).on("click",".removeeventmore",function (){
               $(this).closest(".delete_whole_extra_item_add").remove();
                counter-=1;
            });
        });
        $('#save-form').click(function () {

            $.ajax({
                url: '{{route('student.amount.store')}}',
                container: '#editSettings',
                data: $('#editSettings').serialize(),
                success: function (data) {

                    if (data.status == "success") {
                        new PNotify({
                            // title: 'Success notice',
                            text: `${data.message}`,
                            addclass: 'bg-success border-success',
                            delay: 2000
                        });
                    }

                    window.location.replace('/setups/student/amount/view');

                },


            })
        });

    </script>
@endsection
