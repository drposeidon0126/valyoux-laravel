<li>
    <div class="inline-flex mo-card-info w-full" style="margin-top: 10px">
        <div>
            <img src="{{ URL::asset(\App\User::find($comment->user_id)->avatar) }}" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
        </div>
        <div class="pl-2 comment-info" >
            @if(auth()->user()->id === $comment->user_id)
                <p class="favor-ico">
                    <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="{{$comment->id}}"> <i class=" fa fa-edit"></i> </a>
                    <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="{{$comment->id}}"> <i class=" fa fa-trash"></i> </a>
                </p>
            @else
                <span class="favor-ico" onclick="onFavorHandle(this)" data-id="{{$comment->id}}"><i class="fa fa-heart"></i></span>
            @endif
            <p class="font-bold"><b>{{\App\User::find($comment->user_id)->first_name}} {{\App\User::find($comment->user_id)->last_name}}</b></p>
            <p class="fs-1-1 txt-green" >Music Fan Investor</p>
            <p class="text-gray-500 comment-content" >{{$comment->comment}} </p>
            <p class="txt-main fs-2"><u>reply</u></p>
        </div>
    </div>
    <ul id="comment_sublist_{{$comment->id}}">
    </ul>   
</li>
