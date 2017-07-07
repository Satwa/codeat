var typed = new Typed('#typed', {
  strings: ["Put on the line", "Have a break, have a code cat!", "Keep calm and eat code", "Drink a beer!", "Have fun with debug", "Soon: Multicoding!", "Now open-source!", "Pourquoi pas en français ?", "Just code it!", "Konami Code?"],
  typeSpeed: 128,
  backSpeed: 256,
  loop: true,
  loopCount: 16
});

window.onkeydown = function(event) {
    if(event.keyCode === 27)
		document.getElementById('close').click();
};

if(Cookies.get("cookie") === undefined){
    $("#cookieat").html("<span style='vertical-align: middle;'>This website uses cookie to give you a better experience. By navigating on <i>CodEat</i> you agree to this usage.</span> <a href='#' class='btn btn-info btn-sm pull-right' id='cookok'>OK</a>");
    $("#cookok").click(function(e){
        e.preventDefault();
        Cookies.set("cookie", true, {expires: 365});
        $("#cookieat").fadeOut();
    });
}else{
    $("#cookieat").css("display", "none");
}

if(Cookies.get("sent") !== undefined){
	$(".copy").html("Thanks for your interest! <br> However, you already sent a mail lastly, please wait a few time more.");
}
//TODO: Konami Code
//https://medium.com/@satwaya/codeat-4154a8357586