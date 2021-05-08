/*
- Adaptive Moodle Agent.
- MKA2015 30092015
- Purpose : JQuery for model, popup balloon
*/
$(document).ready(function(){$('.popup-web').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});$('.popup-modal').magnificPopup({type:'inline',preloader:false,modal:true});$(document).on('click','.popup-modal-dismiss',function(e){e.preventDefault();$.magnificPopup.close();});});