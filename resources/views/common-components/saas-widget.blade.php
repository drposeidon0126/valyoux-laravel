 <div class="col-sm-3">
     <div class="card">
         <div class="card-body">
             <div class="d-flex align-items-center mb-3">
                 <div class="avatar-xs mr-3">
                     <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                         <i class="{{ $icon }}"></i>
                     </span>
                 </div>
                 <h5 class="font-size-14 mb-0">{{ $title }}</h5>
             </div>
             <div class="text-muted mt-4">
                 <h4>{{ $price }} <i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                 <div class="d-flex">
                     <span class="{{ $bClass }}"> {{ $bValue }}</span> <span class="ml-2 text-truncate">From previous period</span>
                 </div>
             </div>
         </div>
     </div>
 </div>
