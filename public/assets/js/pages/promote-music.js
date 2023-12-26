
jQuery(document).ready(function(){
// This button will increment the value
$("#plus").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});

// This button will decrement the value till 0
$("#minus").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If it isn't undefined or its greater than 0
if ( !isNaN(currentVal) && currentVal > 1 ) {
// Decrement one
$(field).val(currentVal - 1);
}
});
});




jQuery(document).ready(function(){
// This button will increment the value
$("#plus2").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});

// This button will decrement the value till 0
$("#minus2").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If it isn't undefined or its greater than 0
if ( !isNaN(currentVal) && currentVal > 1 ) {
// Decrement one
$(field).val(currentVal - 1);
}
});
});

jQuery(document).ready(function(){
// This button will increment the value
$("#plus3").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If is not undefined
if ( !isNaN(currentVal) && currentVal < 10000000000 ) {
// Increment
$(field).val(currentVal + 1);
}
});
// This button will decrement the value till 0
$("#minus3").click( function(e) {
e.preventDefault();
// Define field variable
field = "input[name=" + $(this).attr("field") + "]";
// Get its current value
var currentVal = parseInt($(field).val());
// If it isn't undefined or its greater than 0
if ( !isNaN(currentVal) && currentVal > 1 ) {
// Decrement one
$(field).val(currentVal - 1);
}
});




///player

const skipButtons = player.querySelectorAll('[data-skip]');
const ranges = player.querySelectorAll('.player__slider');
function skip() {
  video.currentTime += parseFloat(this.dataset.skip);
}
skipButtons.forEach(button => button.addEventListener('click', skip));

var z= 0;
$('.fa-volume-up').click(function(){
     if( z == 0){
         z++;
    $(this).removeClass('fa-volume-up');
    $(this).addClass('fa-volume-mute');
     }else{
          z--;
    $(this).addClass('fa-volume-up');
    $(this).removeClass('fa-volume-mute');
     }
});


$('#play-button').click(function(){
video.play();

})


$('#pause-button').click(function(){
video.pause();
})







$('#share-comments').click(function(){
    $('#sharing-section-1').css('display','block');
    $('#sharing-section-2').css('display','none');
    $('#sharing-section-3').css('display','none');
});

$('#share-valyou-music').click(function(){
    $('#sharing-section-1').css('display','none');
    $('#sharing-section-2').css('display','block');
    $('#sharing-section-3').css('display','none');
});

$('#share-promote-song').click(function(){
    $('#sharing-section-1').css('display','none');
    $('#sharing-section-2').css('display','none');
    $('#sharing-section-3').css('display','block');
});








$('.dollar-price').click(function(){
    $('.proceed-valyou-song-div').css('display','block');

});




});
