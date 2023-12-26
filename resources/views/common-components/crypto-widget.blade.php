<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <p class="text-muted mb-4"><i class="{{ $iconClass }}"></i> {{ $title }} </p>

            <div class="row">
                <div class="col-6">
                    <div>
                        <h5>{{ $price }}</h5>
                        <p class="text-muted text-truncate mb-0">{{ $rate }} <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <div id="{{ $chartId }}" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>