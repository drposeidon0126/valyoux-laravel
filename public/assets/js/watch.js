


var num_count = 0;
		var app_url = $("meta[name=app-url]").attr("content");
		var token = $("meta[name=csrf-token]").attr("content");

		const slider = document.querySelector('.scrolling-sponsor-list');
    	new MouseEvent(slider);
	
		function selVideoItem(url, type=0) {
			if(url !== '') {
				var ele = $("#see_video")[0];
				ele.setAttribute('src', url);
				ele.load();
			}
		}
		$('.input-data-field .form-group .input-track-type').click(function(){
			
		});

		$('.input-company').click(function(){
			if($('.show-select-option-part').is(":visible")) $('.show-select-option-part').hide();
			else $('.show-select-option-part').show();
		});
				
	// video play start
	// $(document).on('click','.overlay-for-video',function () {
    //     let video = $(this).data('video');
    //     if(video == 1){
    //         $(`#video`+id).trigger('play');
    //         $(`#overlay`+id).remove();

    //     }else{
    //         $('#staticBackdrop').modal('show');
    //     }
    // });

	$(document).on('click','.overlay-for-video',function () {
		let id = $(this).data('videoid');
		let brand =$(this).data('brand');
		let userId = $(this).data('userid');
		let video = $(this).data('video');
		$('#brandName').html(brand);
		if(video == 1){
			$(`#video`+id).trigger('play');
			$(`#overlay`+id).remove();

		}else{
			$('#staticBackdrop').modal('show');
			$('button.playvideo').attr('id',`${id}`);
		}
	});

    $(document).on('click', '.playvideo', function() {
        var id = $('#media_id').val();
        let userId = $(`#own_user_id`).val();
        let wallet = "{{ auth()->user()->wallet }}";
        console.log(wallet);
        if (Number(wallet) > 0.03) {
            axios({
                method: "post",
                url: "{{ route('admin.valyousong') }}",
                data: {
                    id: id,
                    userId
                }
            }).then((res) => {
                console.log(res);
                // js_success("Enjoy this a lot!");
                $(`#video${id}`).trigger('play');
                $(`#overlay${id}`).remove();
            }).catch((err) => {
                throw err;
            });
        } else {
            js_error("You don't have sufficient amount in your wallet to play this Video.");
        }
    });
	// video play end	



	


	//mobile mode functions--start
		$(document).ready(function () {
			$('.all-overlay').click(function(event){
				event.preventDefault();
				closeModal(0)
				closeModal(1)
				closeModal(2)
			});
			$('.mo-comment-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				autoFitModal('comment-edit');
			});
			$('.mo-promote-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				$('.promote-edit').show();
				autoFitModal('promote-edit');
				
			});
			$('.mo-valyou-btn').click(function(event){
				event.preventDefault();
				$('.all-overlay').show();
				$('.valyou-edit').show();
				var len = $('.valyou-media')[0].scrollHeight;
				console.log(len, 'len')
				$('.valyou-edit').animate({top: window.innerHeight-len});
			});

			$('.valyou-custom-btn').click(function(event){
				event.preventDefault();
				$('.custom-valyou-div').css('display','flex');
				var len = $('.valyou-media')[0].scrollHeight;
				$('.valyou-edit').animate({top: window.innerHeight-len});
			});

			// close promote-edit-modal
			$('.promote-edit .close_btn, .promote-edit .btn-cancel').click(function(){
				closeModal(1);
			});	

			$('.valyou-edit .valyou-close-btn').click(function(){
				closeModal(2);
			});	

			// start common function
			// send comment
			$('.mo-comment-send-btn').click( function () {
				sendComment('mo-comment-input');
			});

			//valyou set function
			$('.add_value').on('click', function () {
				var media_id = $('#media_id').val();
				user_role = $('#user_role').val();
				if(user_role != 3){
					$('#RoleconfirmModal').modal('show');
					return false;
				}else{
					var amount = $('#set_valyou').val();
					if (typeof amount === "undefined"){
						$('.error_message').show();
					}else{
						$('.error_message').hide();

						
						$.ajax({
							method: 'post',
							context: this,
							url: app_url+'/valyouartist',
							data: {
								amount: amount,
								media_id: media_id,
								_token: token
							},
							success: function (response) {
								console.log(response);
								var data =  JSON.parse(response);
								if(data.status == 'success'){
									$('#proceedModal .popup-text b').html(data.artist_name);
									$('#proceedModal .popup-text .vip_points').html(data.points);
									$('#proceedModal').modal('toggle');
								}else{
									$(this).html('Proceed to Valyou Song');
									$(this).prop("disabled", false);
									js_error(data.message);
								}
							},
							error: function (response) {
								$(this).html('Proceed to Valyou Song');
								$(this).prop("disabled", false);
								alert('Something went wrong. Please try agian later');
							}
						})
					}
				}
			})

			//promote modal fit heigjt
			$('.promote-seletor').click(function(){
				autoFitModal('promote-edit');
			});
			
			
		// end common function
		});

		// auto-hide topbar follow as scroll position
		window.onscroll = function() {onScrollHandle()};
		var header = document.getElementById("page-topbar");
		function onScrollHandle() {
			if (window.pageYOffset > 200) {
				header.classList.add("show-header");
			} else {
				header.classList.remove("show-header");
			}
		}

		
		function onFavorHandle(ele){
			console.log(ele.className);
			if(ele.className == "favor-ico favor-active") {
				ele.className = "favor-ico";
			}else {
				ele.className = "favor-ico favor-active";
			}
		};	
		// set valyou price
		function setValyou(price) {
			$('#set_valyou').val(price);
		}

		/* close all modal
			params: 0 - comment modal
					1 - promote modal
					2 - valyou modal
		*/
		function closeModal(type) {
			if(type == 0) {
				$('.editmodal-content').animate({top: "100vh"});
			}else if(type == 1) {
				$('.promote-edit').animate({top: "100vh"});
			}else if(type == 2) {
				$('.valyou-edit').animate({top: "100vh"});
			}
			$('.all-overlay').hide();
		}

		// get detail information of selected video.
		function selVideoDetail(media_id, type = 0) {
			
			if(media_id > 0){
				$('#media_id').val(media_id);
				$.ajax({
					method: 'post',
					context: this,
					url: app_url+'/getVideoDetail',
					data: {
						media_id: media_id,
						_token: token
					},
					success: function (response) {
						var data = JSON.parse(response);
						var artist = data.media;
						var comments = data.comments;
						selVideoItem(app_url + '/' + data.url, type);
						var str = viewUserinfo(artist);
						$('.mo-userinfo').html(str);
						var comments_html = '';
						for (let i = 0; i < comments.length; i++) {
							comments_html += viewComments(comments[i]);
						}
						if(comments_html == '')
							comments_html = '<div class="row" style="justify-content:center;"><p>No comment</p></div>';
						$('.mo-comments').html(comments_html);
					},
					error: function () {
						alert('Something went wrong. Please try agian later');
					}
				})
			}else{
				alert('Please select media');
			}
		}

		// get information of selected media owner into HTML view
		function viewUserinfo(data) {
			var f_color = 'text-green';
			var icon = 'up';
			var categories = ['EOI Profile' , 'Upcoming', 'professional', 'Major Artist'];
			$('#own_user_id').val(data.user_id);
			if(data.change_stock<0){
				f_color = 'txt-main';
				icon = 'down';
			}
				
			var str = `<div class="personal-img">			
						<img src="${app_url + '/public/' + data.photo}" style="width: 48px; height: 48px;" alt="">
					</div>
					
					<div class="mo-userinfo-content">
						<h4 class="my-auto mx-2">${data.brand}</h4>
						<div class="personel-detail-stock-content">
							<p class="my-auto ${f_color}" ><b>Stock Price : $${Number(data.stock_value)} VXD</b> <i class="fa fa-arrow-circle-${icon}" style="font-size: 16px;"></i> <b> &nbsp; &nbsp; ${data.change_stock}%</b> </p>
						</div>
						<div class="personal-detail-info-category">
							<p><strong class="song-title">Song Title:</strong> <strong class="song-from"> &nbsp;${data.about}</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-valyou">Song Valyou:</strong><strong class="song-valyou-value">&nbsp; $${data.stock_value}</strong></p>
							&nbsp;&nbsp;&nbsp;
							<p><strong class="song-category">Music Artist Brand Listing Category:</strong> <strong class="song-type">&nbsp; ${categories[data.category]}</strong></p>
						</div>
					</div>`;
			return str;
		}

		// get comments of selected media into HTML view
		function viewComments(item) {
			console.log(item)
			var str = `<li>
							<div class="flex mo-card-info" style="margin-top: 10px">
								<div>
									<img src="${app_url + '/public/' + item.avartar}" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
								</div>
								<div class="px-2 show-info-card">
									<span class="favor-ico" onclick="onFavorHandle(this)" data-id="${item.id}"><i class="fa fa-heart"></i></span>
									
										<!--<p class="ml-auto">
											<a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="${item.id}"> <i class=" fa fa-edit"></i> </a>
											<a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="${item.id}"> <i class=" fa fa-trash"></i> </a>
										</p> -->
									
									<p class="font-bold"><b>${item.f_name + ' ' + item.l_name}</b></p>
									<p class="text-gray-300" style="font-size: 13px">Music Fan Investor</p>
									<p class="text-gray-500 comment-content" >${item.comment} </p>
								</div>
							</div>   
						</li>`;
			return str;
		}

		// send comment
		function sendComment(input_id) {
			var media_id = $('#media_id').val();
			var comment = $("#"+input_id).val();

			console.log(comment, "kkk")
			
			if(comment.length > 0){
				$.ajax({
					method: 'post',
					context: this,
					url: app_url+'/valyoucomment',
					data: {
						comment: comment,
						media_id: media_id,
						_token: token
					},
					success: function (response) {
						
						$('.mo-comments').append(response);
						autoFitModal('comment-edit');
						// if(tata){
						// 	tata.success('status', 'sent comment successful',{
						// 			animate: 'slide'
						// 		});
						// }
						$("#"+input_id).val('');
					},
					error: function () {
						alert('Something went wrong. Please try agian later');
					}
				})
			}else{
				alert('Please enter your comment');
			}
		}

		// auto-fit modal size in mobile mode
		function autoFitModal(classname, delay=0) {
			setTimeout(() => {
				var len = $(`.${classname}`)[0].scrollHeight;
				if (classname == 'promote-edit') {
					len = $('.mo-promote-main-body')[0].scrollHeight;
					console.log($('.mo-promote-main-body'))
				}
				// open comment slider only if the screen is tall enough or in mobile view
				if(len <= 0.7 * window.innerHeight && window.innerWidth < 768 ){
					$(`.${classname}`).animate({top: window.innerHeight-len});
				}
				else if(window.innerWidth < 768){
					$(`.${classname}`).animate({top: 0.3*window.innerHeight}); 
				}
			}, delay);
		}
	
	//mobile mode functions--end