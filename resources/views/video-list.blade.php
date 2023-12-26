@section('pageCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/projects-list.css?v0.2') }}">
@endsection

<style>
.font-size-14{
    font-size: 14px;
}
.scrolling{
    color: #000 !important;
    font-size: 10px !important;
    margin-top: -25px !important;
}
@media only screen and (orientation: landscape) 
and (min-device-width: 320px) 
and (max-device-width: 820px){
    .table-responsive-m{
        display:block !important;
    }
    .table-responsive-web{
        display:none !important;
    }
    .tab-select.search-bar-web a.active {
        outline: none;
        text-decoration: none solid #ff0093 0px !important;
        color: #e84e89;
        position: relative;
    }
}
@media (max-width: 768px){
    .tab-select.search-bar-web a.active {
        outline: none;
        text-decoration: none solid #ff0093 0px !important;
        color: #e84e89;
        position: relative;
    }
}

.tab-select .active::before {
    content: '';
    width: 80px;
    height: 2px;
    background: #e84e89;
    display: block;
    position: absolute;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
}
.wrapper-for-main-tabs {
    display: flex;
    margin: 20px 0;
}
.select-price-type-wrapper {
    order: 2;
    margin: 0 !important;
    margin-left: 15px !important;
}
.artist-maker-tabs{
    margin: 0 !important;
    padding: 0 10px !important;
}
.video {
    max-height: 100px!important;
}
</style>
 
@extends('layouts.master')

@section('title') Market @endsection

@section('content')
<div class="float-right">
                      
                    </div>
                    
    <div class="tab-content" id="v-pills-tabContent">
        <div id="allmain" class="tab-pane fade show active" role="tabpanel" aria-labelledby="allmain-tab">
            <div class="tab-select nav nav-pills search-bar-web" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="search_bar">
                    <input placeholder="Search" name="search_name" id="search_name">
                </div>
                </div>
        
            <div class="row">
                <div class="col-lg-12" style="padding: 0px 0px 0px !important;">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div id="all" class="tab-pane fade show active " role="tabpanel" aria-labelledby="all-tab">
                            <div class="table-responsive table-responsive-web">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="width: 1%" class="text-center">#</th>
                                        <th scope="col" style="width: 10%">Description</th>
                                        <th scope="col" style="width: 10%">Video</th>
                                        <th scope="col" style="width: 10%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tab_all">
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="table-responsive table-responsive-m">
                                <table class="table project-list-table table-nowrap table-centered table-borderless">
                                    <tbody class="mtab_all">
                                   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="tab-select nav nav-pills search-bar-web d-none" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <div class="search_bar">
            <input placeholder="Search">
        </div>
       
    </div>

   
    <!-- end row -->

    <div class="row">
        <!--<div class="col-12">-->
        <!--    <div class="text-center my-3">-->
        <!--        <a href="javascript:void(0);" class="text-success loadbtn" rel="5"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>-->
        <!--    </div>-->
        <!--</div>--> <!-- end col-->
    </div>
    <!-- end row -->
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

    <script src="{{ URL::asset('assets/js/pages/projects-list.js') }}"></script>
    
    <script type="text/javascript">
  $(document).ready(function(){
      loadMoreData(0,'all');
      function loadMoreData(page,tabId){
        
        $.ajax({
          url : "getvideolist",
          type: "GET",
          cache:false,
          data:{offset:page,tabId:tabId,search:$('#search_name').val(),type:2},
          success:function(data){
            if (data) {
                const data1 = JSON.parse(data);
                $(".pagination-loadmore").hide();
              if(page){
                 $(".tab_"+tabId).append(data1.web);
                 $(".mtab_"+tabId).append(data1.mobile);
                  $(".ttab_"+tabId).append(data1.tab);
              }else{
                $(".tab_"+tabId).html(data1.web);
                 $(".mtab_"+tabId).append(data1.mobile);
                 $(".ttab_"+tabId).append(data1.tab);
              }
            }
          }
        });
      }
      var delete_id;
            $(document, this).on('click', '.delete', function () {
                delete_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });
            $(document).on('click', '#ok_delete', function () {
                $.ajax({
                    type: "delete",
                    url: `video/destroy/${delete_id}`,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function () {
                        $('#ok_delete').text('Deleting...');
                        $('#ok_delete').attr("disabled", true);
                    },
                    success: function (data) {
                        window.location.reload();
                        $('#ok_delete').text('Delete');
                        $('#ok_delete').attr("disabled", false);
                        $('#confirmModal').modal('hide');
                        js_success(data);
                    }
                })
            });

      $(document).on('click', '.loadbtn', function(){
        $(".loadbtn").html('Loading...');
       
        var pId = $(this).data("id");
        var tab = $(this).data("tab");
        loadMoreData(pId,tab);
      });
      
      $("#search_name").on("keyup", function() {
        var value = $(this).val().toLowerCase();
          loadMoreData(0,'all');
        });
      
      
  });
</script>

@endsection
