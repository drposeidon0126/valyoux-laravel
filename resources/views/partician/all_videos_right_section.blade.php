@foreach($videos as $row)

<div class="vw_single" >
    <div class="vws_video col-lg-6">



        @if(empty($user_id))
            <a href="watch?vid={{ isset($row->id)?$row->id:'';}}">
        @else
            <a href="socialmedia/details/{{ isset($row->id)?$row->id:'';}}">
        @endif
            @if($row->audio_cover_image)
                <img class="my-video" src="{{ asset($row->audio_cover_image) }}">
            @else
                <video class = "my-video" controlsList="nodownload" src="{{ asset($row->name).'#t=0.001' }}" type="video/mp4"></video>
            @endif
        </a>

    </div>
    <div class="vws_caption col-lg-6">
        <h5>
        @if(empty($user_id))
            <a href="watch?vid={{ isset($row->id)?$row->id:'';}}">
        @else
            <a href="socialmedia/details/{{ isset($row->id)?$row->id:'';}}">
        @endif

        {{ isset($row->artist->brand)?$row->artist->brand:'' }}</a></h5>
        <p>{{ isset($row->artist->about)?$row->artist->about:'' }}</p>
        <p class="font-size-12">Song Valyou: ${{ numberformat(@$row->artist->stock_value) }}</p>
        <p class="font-size-12">{{ videoCount($row->id); }} views {{ time_format($row->created_at) }}</p>
    </div>
</div>
@endforeach
