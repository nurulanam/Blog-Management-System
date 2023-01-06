@extends('backend.master')
@section('content')
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">ADD TAG</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group my-2">
                            <label for="tag_name" class="form-label">Tag Name</label>
                            <input type="text" id="tag_name" class="form-control" placeholder="Tag Name">
                        </div>
                        <div class="form-group my-2">
                            <button type="button" id="add_tag" class="btn btn-primary w-100">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">ALL TAGS</h5>
                    </div>
                    <div class="card-body">
                        <table id="fixed-header" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                            <thead>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Tag Name
                                </th>
                                <th>
                                    Action
                                </th>
                            </thead>
                            <tbody id="tagData">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('ajaxScript')
<script>
    $(document).ready(function () {
        loadTable();

        $(document).on('click', '#add_tag', function (e) {
            e.preventDefault();

            var data = {
                tag_name : $('#tag_name').val(),
            }
            console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "/dashboard/tag",
                data : data,
                dataType : "json",
                success : function (response) {
                    $('#tag_name').val("");
                    $("#tagData").empty();
                    loadTable();
                }
            });
        });

    });


    function loadTable() {
        // var url = {{ route('tag.ajaxShow') }};
            $.ajax({
                url: "tags",
                method: 'GET',
                dataType: 'JSON',
                success:function(result){
                    if (result.status=="success") {
                        $.each(result.allTag, function (key, value) {
                            $("#tagData").append('<tr>\
                                <td>'+value.id+'</td>\
                                <td>'+value.tag_name+'</td>\
                                <td></td>\
                                </tr>')
                        });
                    }
                    else if(result.status==404){
                        alert('404: Data Not Found');
                    }
                }
            })
        }
</script>
@endsection
