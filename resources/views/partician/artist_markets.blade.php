<div class="tab-select nav nav-pills search-bar-web scrolling-wrapper-lower artist-maker-tabs" id="v-pills-tab"
    role="tablist" aria-orientation="vertical">
    <a href="#all" class="active sorting" id="all-tab" type="all" data-toggle="pill" role="tab"
        aria-controls="all" aria-selected="true"> All</a>
    @foreach ($artist_by_country as $key => $country)
        <a href="#{{ $key }}" class="unclicked sorting" type="{{ $key }}" id="{{ $key }}-tab"
            data-toggle="pill" role="tab" aria-controls="{{ $key }}"
            aria-selected="false">{{ $country['country_name'] }}</a>
    @endforeach
</div>

<div class="tab-content scroll-style scroll-maincolor" id="v-pills-tabContent">
    <div id="all" class="tab-pane fade show active" role="tabpanel" aria-labelledby="all-tab">
        <div class="artist-markets-content-wrap">
            <div class="tab_all">
            </div>
        </div>
    </div>
    @foreach ($artist_by_country as $key1 => $row)
        <div id="{{ $key1 }}" class="tab-pane fade" role="tabpanel" aria-labelledby="{{ $key1 }}-tab">
            <div class="artist-markets-content-wrap tab_{{ $key1 }}">
            </div>
        </div>
    @endforeach
</div>
</div>
