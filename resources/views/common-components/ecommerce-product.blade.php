<div class="col-xl-4 col-sm-6">

    <div class="card">
        <div class="card-body">
            <div class="product-img position-relative">
                <div class="avatar-sm product-ribbon">
                    @if(isset($avatarPer))
                    <span class="avatar-title rounded-circle  bg-primary">
                        {{ $avatarPer }}
                    </span>
                    @endif
                </div>
                <img src="assets/images/product/{{ $img }}.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="mt-4 text-center">
                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">{{ $title }} </a></h5>

                <p class="text-muted">
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                </p>
                <h5 class="my-0"><span class="text-muted mr-2"><del>{{ $wrongPrice }}</del></span> <b>{{ $rightPrice }}</b></h5>

            </div>
        </div>
    </div>
</div>