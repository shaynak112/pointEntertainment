$('.galleryImg').click(function()
  {

    $('.galleryInfo').hide();
    $('.galleryImg').css("border-color", "#32CD32");
    $(this).next('.galleryInfo').show();
    $(this).css("border-color", "#FF66CC");

  }

  );
