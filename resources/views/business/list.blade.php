@extends('layouts.master')
@section('title') {{ $title ?? '' }} @endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ $title ?? '' }} @endslot
        @slot('li_1') Add Account @endslot
        @slot('li_2') {{ $title ?? '' }} @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        @can('business_delete')
                            <button type="button" class="btn btn-v-pink" id="delete_all">{{ trans('global.datatables.delete')  }}</button>
                        @endcan
                        @can('business_create')
                            <a class="btn btn-v-green" href="{{ route(request()->segment(1).'.'.request()->segment(2).'.create') }}">{{ trans('global.add') }} Business</a>
                        @endcan
                    </div>
                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th width="10">
                                <input type="checkbox" id="select_all">All
                            </th>
                            <th>Id</th>
                            <th>{{ucwords(str_replace('_',' ','image'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','brand'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','occupation'))}}</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    @can('business_show')
    <div id="viewModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content v-modal">
                <div class="modal-header">
                    <h4 class="modal-title">View {{ucwords(str_replace('_',' ',request()->segment(2)))}}</h4>
                    <button type="button" class="close" data-dismiss="modal" style="    color: #fff;">&times;</button>

                </div>
                <div class="modal-body">

                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','image'))}}</th>
                                <td id="image" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','business_type'))}}</th>
                                <td id="business_type" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','brand'))}}</th>
                                <td id="brand" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','occupation'))}}</th>
                                <td id="occupation" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','website'))}}</th>
                                <td id="website" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','instagram'))}}</th>
                                <td id="instagram" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','facebook'))}}</th>
                                <td id="facebook" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','twitter'))}}</th>
                                <td id="twitter" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','youtube'))}}</th>
                                <td id="youtube" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','otherlink'))}}</th>
                                <td id="otherlink" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','about'))}}</th>
                                <td id="about" align="center"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
    @can('business_delete')
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content v-modal">
                <div class="modal-header">
                    <h2 class="modal-title">Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin: 0;">Are you sure you want to delete this ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" id="ok_delete" name="ok_delete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection

@section('script')
    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
@endsection
@section('script-bottom')
    <script>
        $(function(){
            var source = `{{ route(request()->segment(1).'.'.request()->segment(2).'.index') }}`;
            var DataTable = $("#example1").DataTable({
                dom: "Blfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdfHtml5",
                    className: "btn-sm"
                }, {
                    extend: "colvis",
                    className: "btn-sm"
                }],
                responsive: true,
                processing: true,
                serverSide: true,
                pageLength: 10,
                ajax: {
                    url: source,
                },
                columns: [
                    {
                        data: 'checkbox',
                        name: 'checkbox',
                        orderable: false
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false
                    },
                    {
                        data: 'brand',
                        name: 'brand'
                    },
                    {
                        data: 'occupation',
                        name: 'occupation'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });
            // View Records
            $(document, this).on('click', '.view', function () {
                let id = $(this).attr('id');
                $.ajax({
                    url: `{{url(request()->segment(2).'/show/')}}/${id}`,
                    dataType: "json",
                    success: function (data) {
                        let image = (data.photo != undefined) ? `{{asset('/')}}${data.photo}` : `{{asset('assets/images/users/avator.png')}}`;
                        document.getElementById('image').innerHTML = `<img width="100" src="${image}" alt="${data.image}">`;
                        document.getElementById('business_type').innerText = data.business_type;
                        document.getElementById('brand').innerText = data.brand;
                        document.getElementById('occupation').innerText = data.occupation;
                        document.getElementById('website').innerText = data.website;
                        document.getElementById('instagram').innerText = data.instagram;
                        document.getElementById('facebook').innerText = data.facebook;
                        document.getElementById('twitter').innerText = data.twitter;
                        document.getElementById('youtube').innerText = data.youtube;
                        document.getElementById('otherlink').innerText = data.otherlink;
                        document.getElementById('about').innerText = data.about;
                        $("#viewModal").modal('show');
                    }
                })
            })

            "@can('business_delete')"
            var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                $.ajax({
                    type: "delete",
                    url: `{{url(request()->segment(1).'/'.request()->segment(2).'/')}}/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled", true);
                    },
                    success: function (data) {
                        DataTable.ajax.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled", false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });

            document.getElementById('select_all').addEventListener('click', event =>
                (event.target.checked === true) ? Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = true
                ) : Array.from(document.querySelectorAll('.delete_checkbox')).forEach(checkbox =>
                    checkbox.checked = false
                )
            );
            document.getElementById('delete_all').addEventListener('click', () => {
                let checkboxes = Array.from(document.querySelectorAll('.delete_checkbox:checked'));
                if (checkboxes.length > 0) {
                    var checkboxValue = [];
                    checkboxes.forEach((e) => {
                        checkboxValue.push(e.getAttribute('value'));
                    });
                    let ajax = async () => {
                        await fetch(`{{route(request()->segment(1).'.'.request()->segment(1).'.delete_all')}}`, {
                            method: "post",
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({checkboxValue: checkboxValue}),
                        })
                            .then(r => r.json())
                            .then((r) => {
                                js_success(r);
                                DataTable.ajax.reload();
                            });
                    };
                    ajax();
                } else {
                    js_error("Select atleast one record");
                }
            });
            "@endcan"
        })
    </script>
@endsection
