
var i = 0;

function coffeShopToRussinLanguage(){
   $("#notCoffeShop").click(function(){
    if(i >= 10){ 
      $("#notCoffeShopText").text("Кафетерий");
      $("#notComfortableStudentsCaffe").text("Уютная столовая с буфетом");
    }
    i++;
   });
}

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


  function toggleBasisEducationButton(){
    var trigger = $("body").find('[data-toggle="btnBasis"]');
    trigger.click(function() {
        var blockTarget =  $(this).attr( "data-target" ),
            blockTargetHide = $(this).attr( "data-targetHide" ),
            btnHide = $(this).attr( "data-btnHide" );
        $(blockTarget).removeClass('d-none');
        $(blockTarget).show();
        $(blockTargetHide).hide();
        $(btnHide).removeClass('fw-bold');
        $(this).addClass('fw-bold');
    });
  }

  function setHandlerFormSubmit(){
    $("#topFormFeedback").submit(function(e) {

      e.preventDefault(); // avoid to execute the actual submit of the form.
  
      var form = $(this);
      var actionUrl = form.attr('action');
      
      $.ajax({
          type: "POST",
          url: actionUrl,
          data: form.serialize(), // serializes the form's elements.
          success: function(data)
          {
            alert(data); // show response from the php script.
          }
      });
      
  });
  }

  $(document).ready(function(){
    autoPlayYouTubeModal();
    toggleBasisEducationButton();
    coffeShopToRussinLanguage();
    setHandlerFormSubmit();
  });




  