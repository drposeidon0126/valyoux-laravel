@extends('layouts.master')
@section('title') {{ $title ?? '' }} @endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') {{ $title ?? '' }} @endslot
        @slot('li_1') User Management @endslot
        @slot('li_2') {{ $title ?? '' }} @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right">
                        @can('user_delete')
                            <button type="button" class="btn btn-v-pink" id="delete_all">{{ trans('global.datatables.delete')  }}</button>
                        @endcan
                        @can('user_create')
                            <a class="btn btn-v-green" href="{{ route('admin.'.request()->segment(1).'.create') }}">{{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}</a>
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
                            <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','last_name'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','dob'))}}</th>
                            <th>{{ucwords(str_replace('_',' ','role'))}}</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
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
                                <th>{{ucwords(str_replace('_',' ','first_name'))}}</th>
                                <td id="first_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','last_name'))}}</th>
                                <td id="last_name" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','email'))}}</th>
                                <td id="email" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','dob'))}}</th>
                                <td id="dob" align="center"></td>
                            </tr>
                            <tr>
                                <th>{{ucwords(str_replace('_',' ','roles'))}}</th>
                                <td id="roles" align="center"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            var source = `{{ route('admin.'.request()->segment(1).'.index') }}`;
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
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'dob',
                        name: 'dob'
                    },
                    {
                        data: 'roles',
                        name: 'roles'
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
                    url: `{{url(request()->segment(1).'/')}}/${id}`,
                    dataType: "json",
                    success: function (data) {
                        let roles = '';
                        data.roles.forEach(data => roles += `<span class="badge badge-info">${data.title}</span>&nbsp;`)
                        let image = (data.avatar != undefined) ? `{{asset('/')}}${data.avatar}` : `{{asset('assets/images/users/avator.png')}}`;
                        document.getElementById('image').innerHTML = `<img width="100" src="${image}" alt="${data.image}">`;
                        document.getElementById('first_name').innerText = data.first_name;
                        document.getElementById('last_name').innerText = data.last_name;
                        document.getElementById('dob').innerText = data.dob;
                        document.getElementById('email').innerText = data.email;
                        document.getElementById('roles').innerHTML = roles;
                        $("#viewModal").modal('show');
                    }
                })
            })
            var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                $.ajax({
                    type: "delete",
                    url: `{{url(request()->segment(1).'/destroy/')}}/${delete_id}`,
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
                        await fetch(`{{route('admin.'.request()->segment(1).'.delete_all')}}`, {
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
        })
    </script>
@endsection
