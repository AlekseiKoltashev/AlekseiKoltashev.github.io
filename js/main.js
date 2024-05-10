

function autoPlayYouTubeModal(){
    var trigger = $("body").find('[data-bs-toggle="modal"]');
    trigger.click(function() {
      var theModal = $(this).data( "target" ),
      videoSRC = $(this).attr( "data-theVideo" ),
      videoSRCauto = videoSRC+"?autoplay=1" ;
      $(theModal+' iframe').attr('src', videoSRCauto);
      $(theModal+' button.btn-close').click(function () {
          $(theModal+' iframe').attr('src', videoSRC);
      });
    });
  }

  $(document).ready(function(){
    autoPlayYouTubeModal();
  });




  