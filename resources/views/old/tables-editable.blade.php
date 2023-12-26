@extends('layouts.master')

@section('title') @lang('translation.Editable_Table') @endsection

@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


    @component('common-components.breadcrumb')
        @slot('title') Editable Table @endslot
        @slot('li_1') Tables @endslot
        @slot('li_2') Editable Table @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Datatable Editable</h4>

                    <div class="table-responsive">
                        <table class="table table-editable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Age (AutoFill)</th>
                                    <th>Qty (AutoFill and Editable)</th>
                                    <th>Cost (Editable)</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>1</td>
                                <td data-original-value="11">11</td>
                                <td data-original-value="1"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">1</a></td>
                                <td data-original-value="1.99"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">1.99</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td data-original-value="22">22</td>
                                <td data-original-value="2"><a href="#" data-type="text" data-pk="2" class="editable"
                                        data-url="" data-title="Edit Quantity">2</a></td>
                                <td data-original-value="2.99"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">2.99</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td data-original-value="33">33</td>
                                <td data-original-value="3"><a href="#" data-type="text" data-pk="3" class="editable"
                                        data-url="" data-title="Edit Quantity">3</a></td>
                                <td data-original-value="3.99"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">3.99</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td data-original-value="44">44</td>
                                <td data-original-value="4"><a href="#" data-type="text" data-pk="4" class="editable"
                                        data-url="" data-title="Edit Quantity">4</a></td>
                                <td data-original-value="4.99"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">4.99</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td data-original-value="55">55</td>
                                <td data-original-value="5"><a href="#" data-type="text" data-pk="5" class="editable"
                                        data-url="" data-title="Edit Quantity">5</a></td>
                                <td data-original-value="5.99"><a href="#" data-type="text" data-pk="1" class="editable"
                                        data-url="" data-title="Edit Quantity">5.99</a></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>

    <script src="{{ URL::asset('assets/libs/bootstrap-editable/bootstrap-editable.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/table-editable.init.js') }}"></script>

@endsection
