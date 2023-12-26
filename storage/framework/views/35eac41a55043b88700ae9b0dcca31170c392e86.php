<style>
	.editmodal-content{
		position: fixed;
		left:0;
		max-height: 70vh;
		/* top:60vh; */
		bottom: 0;
		right:0;
		top: 100vh;
		background-color: white;
		display: flex;
		width: 100%;
		border-radius: 15px 15px 0 0;
	}

	.all-overlay {
		position: fixed;
		left:0;
		top:0;
		right:0;
		bottom: 0;
		background-color: rgba(0, 0, 0, 0.432);
		z-index: 200;
	}

	.comment-edit {
		z-index: 201;
	}

	.comment-input {
		border-top: 1px solid #dbdbdb;
		padding: 10px;
		background: white;
		display: inline-flex;
		width: 100%;
	}

	.chat-input {
		font-size: 16px;
		margin: 0.4rem 0.5rem;
	}

	.comment-scroll {
		max-height: 60vh; 
		overflow-y: auto; 
		margin-top: 15px;
	}

	.comment-btn {
		width: 36px;
		height: 36px;
		max-width: 36px !important;
	}


	.favor-ico {
		position: absolute;
		top: 5px;
		right: 10px;
		color: grey;
		font-size: 17px;
	}

	.favor-ico.favor-active {
		color: #f9508a;
	}

	.hint-img {
		width: 22px !important;
	}

	.input-round {
		padding: 0.2rem 1rem !important;
		border-radius: 25px !important;
	}

	.promote-edit {
		display: flex;
		justify-content: center;
		z-index: 202;
		position: fixed;
		max-height: 70vh;
		margin: auto;
		background: white;
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
		display: none;
		bottom: 0;
	}

	.form-group>input {
		width: 100%;
	}

	.valyou-edit {
		display: flex;
		justify-content: center;
		z-index: 202;
		position: fixed;
		max-height: 70vh;
		margin: auto;
		background: white;
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
		display: none;
		padding: 1rem
	}

	.tooltip {
		z-index: 301 !important;
	}

	.valyou-custom-btn {
		border: 1px solid rgb(177, 177, 177);
		border-radius: 17px;
		padding: 10px 3px;
		background: #f9508a;
		color: white;
	}

	#set_valyou {
		border-width: 1px;
		border-radius: 16px;
		padding: 5px 15px;
	}

	.custom-valyou-div {
		padding: 20px 20px 0 20px;
		display: none;
	}
	.scrollable{
		overflow-y: auto;
		max-height: 60vh;
		padding: 15px;
	}

	.show-info-card, .comment-info {
		width: 100%;
		position: relative;
	}

	.comment-info>p {
		margin: 0;
	}

	.comment-content {
		font-size: 15px;
		border-top: 1px solid #f1f1f1; 
		/* border-bottom: 1px solid #d5d5d5; */
	}
	/* comment show part */
	.special-comment-part{
		background: #FFFFFF 0% 0% no-repeat padding-box;
		box-shadow: 0px 3px 6px #00000029;
		border-radius: 16px;
		opacity: 1;
	}

	.search-comment-part{
		display: flex; 
		/* justify-content: center; */
		align-items: center;
	}

	.comment-logo-part{
		display: flex;
		align-items: center;
	}

	.comment-logo-detail-info{
		margin-left: 20px;
		direction: block;
		white-space: nowrap;
	}

	.comment-logo-detail-info p{
		margin-bottom: 0;
	}	

	.comment-logo-detail-info p:first-child{
		font-size: 16px;
		color: #050F2F;
		padding-bottom: 0;
	}

	/* .comment-logo-detail-info p:last-child{
		font-size: 10px !important;
		color: #666666;
	} */
	.searchbar-part{
		margin-left: 30px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.searchbar-part input{
		background: #F7F7F7 0% 0% no-repeat padding-box;
		border: 1px solid #000000;
		border-radius: 30px;
		opacity: 1;
		width: 380px;
		height: 34px;
	}

	.searchbar-part input::placeholder{
		font-size: 16px;
		align-items: center;
		padding-left: 15px;
	}

	.show-comment-content-part{
		margin-top: 20px;
		margin-left: 50px;
	}

	.show-and-reply-comment-part{
		margin-bottom: 10px;
	}


	.close_btn{
		width: 32px;
		height: 32px;
		opacity: 0.75;
		margin-left: 20px;
	}

	.reply-btn{
		color: #F42677;
		font-size: 8px;
		border: none;
		background: none;
		margin-left: 33px;
	}

	.media-body h5{
		margin-bottom: 0 !important;
		font-size: 16px;
		font-weight: 600;
		color: #050F2F;
	}

	.media-body h6{
		font-size: 10px;
		color: #666666;
	}
	/* end comment show part */

	/* promote part */
	.special-promote-part{
		background: #FFFFFF 0% 0% no-repeat padding-box;
		box-shadow: 0px 3px 6px #00000029;
		border-radius: 16px;
		height: 510px;
	}

	.promote-comment-part{
		display: flex;
		justify-content: space-between;
		margin-bottom: 10px;
	}

	.comment-logo-part > .comment-logo-detail-info > p{
		font-size: 16px;
		color: #050F2F;
	}

	.input-data-field{
		text-align: left;
		font-size: 16px;
		letter-spacing: 0px;
		color: #050F2F;
		min-width: 320px;
		margin: auto;
	}

	

	#see_video {
		min-width: 300px;
	}

	
	.bottom-button p{
		display: flex;
		justify-content: center;
		color: #050F2F;
		font-size: 16px;
		
	}

	.btn-field{
		display: flex;
		justify-content: space-between;
	}

	.bottom-button input{
		/* display: flex;
		justify-content: center; */
		align-items: center;
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border: 1px solid #000000;
		border-radius: 30px;
		padding: 3px 6px;
		width: 134px;

	}

	/* for bordered bottom button */

	.bottom-button-bordered{
		/* background: #FFFFFF 0% 0% no-repeat padding-box;
		box-shadow: 0px 3px 6px #00000029;
		border: 1px solid #707070;
		border-radius: 16px; */
		border-radius: 16px;
		box-shadow: 0px -1px 0px 0px grey;
		height: 142px;
	}

	.bottom-button-bordered p{
		display: flex;
		justify-content: center;
		font-size: 16px;
		color: #050F2F;
		padding-top: 40px;
	}

	.bottom-button-bordered .btn-field{
		font-size: 16px;
		justify-content: center;
		display: flex;
	}

	.bottom-button-bordered button{
		align-items: center;
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border: 1px solid #000000;
		border-radius: 30px;
		padding: 3px 6px;
		width: 134px;
	}

	.bottom-button-bordered button:first-child{
		margin-right: 20px;
	}

	/* end promote part */
</style>

<div class="editmodal">
	<div class="all-overlay" style="display: none"></div>
	<div class="comment-edit editmodal-content" >
		<div class="comment-body" style="width: 100%;">
			<div class="comment-scroll" >
				<ul class="p-3 mo-comments" style="list-style: none;">
					<?php
						$item = $videos[0];
					?>
					
					<?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>
						<div class="inline-flex mo-card-info w-full" style="margin-top: 10px">
							<div>
								<img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
							</div>
							<div class="px-2 comment-info" >
								<?php if(auth()->user()->id === $comment->user_id): ?>
									<p class="favor-ico">
										<a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
										<a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
									</p>
								<?php else: ?>
									<span class="favor-ico" onclick="onFavorHandle(this)" data-id="<?php echo e($comment->id); ?>"><i class="fa fa-heart"></i></span>
								<?php endif; ?>
								<p class="font-bold"><b><?php echo e(\App\User::find($comment->user_id)->first_name); ?> <?php echo e(\App\User::find($comment->user_id)->last_name); ?></b></p>
								<p class="text-gray-300 txt-green" style="font-size: 13px">Music Fan Investor</p>
								<p class="text-gray-500 comment-content" ><?php echo e($comment->comment); ?> </p>
							</div>
						</div>   
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<div class="comment-input">
				<div class="d-flex">
					<img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>" class="m-auto vatar-md rounded-circle" style="width: 40px; height: 40px;">
				</div>
				<div class="w-full d-flex">
					<input type="text" id="mo-comment-input" class="form-control chat-input mo-comment-input m-auto px-3" name="comment-" placeholder="Enter Comment...">
				</div>
				<div class="d-flex">
					<img style="transform: rotate(90deg);  width:40px; height:40px" class="m-auto mo-comment-send-btn" data-media="111" src="<?php echo e(URL::asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
				</div>
			</div>
		</div>
	</div>
	<div class="promote-edit editmodal-content" >
		<div class="mo-promote-main-body p-3" style="width: 100%; padding: 22px 34px !important">
			<div class="promote-comment-part">
				<div class="comment-logo-part"  >
					<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
					<div class="comment-logo-detail-info">
						<p class="py-auto"><strong>Song Name</strong></p>
					</div>
				</div>	
				<div class="close-promote-modal fs-4 close_btn">
					×
				</div>														
			</div>
		
			<div class="input-data-field">
				<form class="scrollable">
					<div class="form-group">
						<label for="inputNumPeople">1. How much would you like to spend</label>
						<input type="text" class="input-bottom-line input-round" id="inputNumPeople" placeholder="Budget Amount">
					</div>
					<div class="form-group">
						<label for="inputPrice">2. How much would you pay each listener</label>
						<input type="text" class="input-bottom-line input-round" id="inputPrice" placeholder="Each person that listens to this song will receive">
					</div>
					<div class="form-group">
						<label for="inputCompany">3.How would you like to promote this track?</label>
						<div class="promote-seletor btn btn-success" onclick="autoFitModal('promote-edit', 500)" data-toggle="collapse" data-target="#mo-select-promote">
							<span>Please Select</span><i class="fa fa-sort-down"></i>
						</div>
					</div>
					<div class="show-target-content collapse" id="mo-select-promote" >
						<div class="select-option promote-target d-flex mb-2"  onclick="autoFitModal('promote-edit', 500)" data-toggle="collapse" data-target="#mo-promote-select">
							<p class="circle-bordered my-auto"></p>
							<p class="my-auto"> <u>Targeted</u></p>
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="collapse" id="mo-promote-select">
							<div class="show-target-content-search">
								<input type="text" placeholder="Search for Investors">
							</div>
							<div class="show-target-content-body" >
								<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="show-target-content-body-item" data-name="<?php echo e($user->first_name . " " . $user->last_name." ".$user->email); ?>" style="font-size: 0.7rem">
									<div class="target-info-button">
										<img src="<?php echo e(URL::to(''.$user->avatar)); ?>" alt="" style="width: 32px; height:32px">
										<div class="target-info-button-detail">
											<p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
											<p class="my-auto target-type"><?php echo e($user->email); ?></p>
										</div>																													
									</div>
									<div class="custom-control custom-checkbox target-info-state">
										<input type="checkbox" class="custom-control-input" id="investor_<?php echo e($user->id); ?>">
										<label class="custom-control-label" style="padding-top:2px" for="investor_<?php echo e($user->id); ?>">music fan</label>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
							</div>
							
						</div>
						<div class="select-option promote-compaign d-flex">
							<p class="circle-bordered my-auto"></p>
							<p class="my-auto"> <u>Open Campaign</u></p>
							<i class="fa fa-info-circle"></i>
						</div>
					</div>
					<div class="bottom-button">
						<p class="change-font"><strong>Total Amount to start promoting: $20.00</strong></p>
						<div class="btn-field">
							<button type="button" class="btn btn-cancel btn-outline-secondary w-150">Cancel</button>
							<button type="button" class="btn btn-success bg-green-gra w-150 btn-promote">Promote</button>
						</div>
					</div>
											
				</form>
			</div>
		</div>
	</div>
	<div id="valyou-music-section- " class="valyou-media valyou-edit editmodal-content">
		
			<div class="btn-margin">
				<div class="row" style="padding: 0 20px;">
					<?php $artist_poits = artistPoints(); ?>
					<?php $__currentLoopData = $artist_poits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-2 col-md-2">
							<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $<?php echo e($row->amount); ?>." onclick="setValyou(<?php echo e($row->amount); ?>)">$<?php echo e($row->amount); ?></button>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="col-2 col-md-2" style="padding: 11px 6px;">
						<span class="valyou-custom-btn">Custom</span>
					</div>
				</div>
				<div class="row custom-valyou-div">
					<div class="col-5" style="font-size: 16px; padding: 5px 20px;">Custom price</div>
					<div class="col-7">
						<input type="text" class="input-price" id="set_valyou" placeholder="min $1">
					</div>
				</div>
			</div>
			<div class="col-md-12 text-center mb-5 proceed-valyou-song-div">
				<p class="text-danger error_message">Please choose an option above</p>
				<div class="row justify-content-between">
					<button type="button" class="btn valyou-close-btn btn-outline-secondary w-150">Cancel</button>
					<button type="button" class="btn valyou-g-btn add_value spycust-margin-10 m-0" value="">Proceed to Valyou Song</button>
				</div>
					
			</div>
	</div>
</div>

<script src="<?php echo e(URL::asset('assets/js/watch.js')); ?>"></script>
<?php /**PATH /var/www/testvps-main/resources/views/partician/video_feature_modal.blade.php ENDPATH**/ ?>