 <!-- start page title -->
 <div class="row">
     <div class="col-12">
         <div class="page-title-box d-flex align-items-center justify-content-between">
             <h4 class="mb-0 font-size-18 font-weight-semibold">{{ $title }}</h4>

             <div class="page-title-right">
                 <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item active">{{ $li_1 }}</li>
                     @if(isset($li_2))
                     <li class="breadcrumb-item">{{ $li_2 }}</li>
                     @endif
                 </ol>
             </div>

         </div>
     </div>
 </div>
 <!-- end page title -->
