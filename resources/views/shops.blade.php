@extends('layouts.master')

@section('title') @lang('translation.Shops') @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Shops @endslot
        @slot('li_1') Ecommerce @endslot
        @slot('li_2') Shops @endslot
    @endcomponent


    <div class="row">

        @component('common-components.ecommerce-shop')
            @slot('avatar') B @endslot
            @slot('title') Brendle's @endslot
            @slot('avatarClass') bg-soft-primary text-primary @endslot
            @slot('products') 112 @endslot
            @slot('wbalance') $13,575 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') T @endslot
            @slot('title') Tech Hifi @endslot
            @slot('avatarClass') bg-soft-warning text-warning @endslot
            @slot('products') 104 @endslot
            @slot('wbalance') $11,145 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') L @endslot
            @slot('title') Lafayette @endslot
            @slot('avatarClass') bg-soft-danger text-danger @endslot
            @slot('products') 126 @endslot
            @slot('wbalance') $12,356 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') P @endslot
            @slot('title') Packer @endslot
            @slot('avatarClass') bg-soft-success text-success @endslot
            @slot('products') 102 @endslot
            @slot('wbalance') $11,228 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') N @endslot
            @slot('title') Nedick's @endslot
            @slot('avatarClass') bg-soft-info text-info @endslot
            @slot('products') 96 @endslot
            @slot('wbalance') $9,235 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') H @endslot
            @slot('title') Hudson's @endslot
            @slot('avatarClass') bg-soft-dark text-dark @endslot
            @slot('products') 120 @endslot
            @slot('wbalance') $14,794 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') T @endslot
            @slot('title') Tech Hifi @endslot
            @slot('avatarClass') bg-soft-dark text-dark @endslot
            @slot('products') 104 @endslot
            @slot('wbalance') $11,145 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') B @endslot
            @slot('title') Brendle's @endslot
            @slot('avatarClass') bg-soft-primary text-primary @endslot
            @slot('products') 112 @endslot
            @slot('wbalance') $11,145 @endslot
        @endcomponent

        @component('common-components.ecommerce-shop')
            @slot('avatar') L @endslot
            @slot('title') Lafayette @endslot
            @slot('avatarClass') bg-soft-success text-success @endslot
            @slot('products') 112 @endslot
            @slot('wbalance') $11,145 @endslot
        @endcomponent
    </div>
    <!--  end row -->


    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i
                        class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

@endsection
