<style>
    @media (max-width: 525px){
        .mkt-newbtn button {
            margin-top: -8px!important;
        }
    }

    .for-web-profile {
        display: block;
    }
    .for-mob-profile {
        display: none;
    }
    @media (max-width: 1024px) {
        .img-change {
            width: 60px;
            height: 60px;
            object-fit: cover !important;
        }
    }
    @media (min-width: 1025px) {
        .img-change {
            width: 75px;
            height: 75px;
            object-fit: cover !important;
        }
    }

    @media (max-width: 525px) {
        .img-change {
            width: 50px;
            height: 50px;
            object-fit: cover !important;
        }
        .new-card-ce img {
            max-width: 50px;
        }
        img.rounded-circle.avatar-xm.m-1.play-button {
            max-width: 60px;
            width: 30px;
        }
        .mkt-newbtn button {
            margin-top: -18px !important;
        }
        .for-web-profile {
            display: none;
        }
        .for-mob-profile {
            display: block;
            font-family: Roboto, sans-serif;
        }
        .for-mob-profile {
            position: fixed !important;
            top: 70px;
            left: 0px;
            width: 100%;
            padding: 0 20px;
            z-index: 9;
        }
        .for-mob-profile .bg-black {
            border-radius: 5px !important;
        }
    }
</style>

<?php
use App\User;
use App\Models\Artist;
use App\Models\Follow;

if(isset($artist)){
    $artist_data = Artist::where('user_id',auth()->user()->id)->latest()->first();
    $follow_id = $artist_id =  $style2 = '';
    if(empty($artist)){
        $user = Auth::user();
    }
    if(isset($artist)){
        $artist_id = $artist->id;
        if(!empty($artist_data)){
            if(check_role() == 3 || check_role() == 2){
                $follow = Follow::where(['follower_id'=>$artist_data->user_id,'following_id'=>$artist_id])->first();
            }else{
            $follow = Follow::where(['follower_id'=>$artist_data->id,'following_id'=>$artist_id])->first();
            }
        }
        $category_name = '';
        if (isset($artist->category) && $artist->category == 0) {
            $category_name = 'Expression of Interest';
        } else if (isset($artist->category) && $artist->category == 1) {
            $category_name = 'Upcoming';
        } else if (isset($artist->category) && $artist->category == 2) {
            $category_name = 'Professional';
        } else {
            $category_name = 'Major Artist';
        }
    }
    $user->load('roles');
    $role= $user->roles[0]->id;

    $style1 ='none';

    if(isset($follow)){
        if($follow['following_id'] == $artist->id){
            $follow_id= $follow->id;
            $style1 = 'block';
            $style2 = 'none';
        }else{
            $follow_id = '';
            $style1 = 'none';
            $style2 = 'block';
        }
    }

    if (isset($artist->photo) && $artist->photo) {
        $profile = $artist->photo;
    } else {
        $profile = $user->avatar;
    }

    $brand = $artist->brand?$artist->brand:$user->first_name . ' ' . $user->last_name;
    $about = $artist->about?$artist->about:'';
?>
<!--for web-->

<div class="col-lg-12 for-web-profile">
    <div class="card">
        <div class="card-body bg-black">
            <div class="row">
                <div class="col-3 col-md-1 col-lg-1 col-sm-1 justify-content-center d-flex">
                    <img src="{{ isset($profile) ? asset($profile) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-change" >

                </div>
                <div class="col-5 col-md-3 col-lg-3 col-sm-3">
                    <div class="text-muted">
                        <h4>{{$brand}}</h4>
                        <p class="mb-1">{{$about}}</p>
                        <p class="mb-0"><?= $category_name ?></p>
                    </div>
                </div>
                <br>
                <div class="col-7 col-md-6">
                    <p>Market Value</p>
                    <h2><?php
                        if (isset($artist->market_value) && $artist->market_value) {
                            echo '$ ' . number_format($artist->market_value);
                        }
                        ?></h2>
                </div>
                <div class="col-5 col-md-2">

              <?php if($artist->user_id != Auth()->user()->id){ ?>
                    <button id="{{ $artist_id  }}" style="display: {{ $style1 }}" follower_id="{{  $follow_id }}" class="btn btn-light waves-effect bottom mt-4 following">Following</button>
                     <button id="{{ $artist_id  }}" style="display:{{ $style2 }}" class="btn btn-light waves-effect bottom mt-4 follow">Follow</button>
              <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $style1 ='none';
    if(isset($follow)){
        if($follow['following_id'] == $artist->id){
            $follow_id= $follow->id;
            $style1 = '';
            $style2 = 'none';
        }else{
            $follow_id = '';
            $style1 = 'none';
            $style2 = 'block';
        }
    }
?>
<!--for mob-->
<div class="col-lg-12 for-mob-profile">
    <div class="card name-card-margin">
        <div class="card-body bg-black new-card-ce">
            <div class="row">
                <div class="col-3 col-md-1 col-lg-1 col-sm-1 pr-0 ">
                    <img src="{{ isset($profile) ? asset($profile) : asset('/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle img-change" >
                </div>
                <div class="col-5 col-md-3 col-lg-3 col-sm-3 pl-0-new">
                    <div class="text-muted">
                        <h4>
                         {{$brand }}</h4>
                        <p class="mb-1">{{ $about }}
                        </p>
                        <p class="mb-0"><?= @$category_name ?></p>
                    </div>
                </div>
                <br>
                <div class="col-4 col-md-4 pl-0 mkt-new">
                    <p class="mb-6">Market Value</p>
                    <h2><?php
                        if (isset($artist->market_value) && $artist->market_value) {
                            echo '$' . number_format($artist->market_value);
                        }

                        ?>
                    </h2>
                </div>
                <div class="col-12 col-md-2 mkt-newbtn">
                <?php if($artist->user_id != Auth()->user()->id){ ?>
                    <button id="{{ $artist_id  }}" style="display:{{ $style1 }}" follower_id="{{  $follow_id }}" class="btn btn-light waves-effect bottom mt-4 following">Following</button>
                     <button id="{{ $artist_id  }}" style="display:{{ $style2 }}" class="btn btn-light waves-effect bottom mt-4 follow">Follow</button>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
</div>
 <?php } ?>

