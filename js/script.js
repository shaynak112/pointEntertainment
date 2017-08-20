

$('.aboutImage').click(function()
	{

	$('.DJinfo').hide();
    $('.aboutImage').css("border-color", "#32CD32");
    $(this).next('.DJinfo').show();
    $(this).css("border-color", "#FF66CC");

	}

	);




$('.galleryImg').click(function()
  {

    $('.galleryInfo').hide();
    $('.galleryImg').css("border-color", "#32CD32");
    $(this).next('.galleryInfo').show();
    $(this).css("border-color", "#FF66CC");

  }

  );


//for twitter
window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));