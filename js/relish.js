var overlay = document.createElement("div");
overlay.setAttribute("id","overlay");
overlay.setAttribute("style","display:none;position:fixed;top:0;left:0;background-color:rgba(0, 0, 0, 0.5);z-index:1000;width:100vw;height:100%;");
var body = document.getElementsByTagName("body");
body[0].appendChild(overlay);

var form = document.getElementById("contactForm");
form.addEventListener('submit', function(ev) {
	ev.preventDefault();
  	helper.sendForm("contactForm","http://www.relish-group.com/new_test/mailhandler.php")
	.then(function(){
		var parent = document.getElementById("contact");
		var message = document.createElement("p");
		message.addClass("formSuccess");
		message.innerHTML = "Form Submit Successful";
		parent.appendChild(message);
	})
	.catch(function(){
		var parent = document.getElementById("contact");
		var message = document.createElement("p");
		message.addClass("formError");
		message.innerHTML = "The server seems to have a problem. Please try again later.";
		parent.appendChild(message);
	});

}, false);


// TOGGLE POPOVERS
$(".brandsOn").click(function () {
    $("#brand-bar").toggle();
    	$("#careers").css("display", "none");
    	$("#contact").css("display", "none");
      $("#overlay").css("display","block");
});
$("#careersPull").click(function () {
	$("#careers").toggle();
    	$("#brand-bar").css("display", "none");
    	$("#contact").css("display", "none");
      $("#overlay").css("display","block");
});
$("#contactPull").click(function () {
	$("#contact").toggle();
    	$("#careers").css("display", "none");
    	$("#brand-bar").css("display", "none");
      $("#overlay").css("display","block");
});
$("#overlay").click(function(){
  $("#careers").css("display","none");
  $("#brand-bar").css("display", "none");
  $("#contact").css("display", "none");
  $(this).css("display","none");
});
$(function() {
    var pull        = $('#pull');
        menu        = $('nav ul');
        menuHeight  = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
        var brandBar = $("#brand-bar");
        if(brandBar.css("display") == "block") {
        	brandBar.css("display", "none");
        }
    });
});

// NEXT
window.onresize = function(){
	var nav = document.querySelector("nav ul");
	var mql = window.matchMedia("screen and (min-width: 500px)");

	if(mql.matches){
		nav.removeAttribute("style");
	}

	if (helper.checkForPull()){
		// console.log(document.getElementsByClassName("close"));
		if( document.getElementsByClassName("close").length === 0 ){
			// console.log("hello");
			var closes = [];
			for(var i = 0; i < 3; i++){
				var close = document.createElement("a");
				close.setAttribute("class", "fa fa-close fa-2x close");
				closes.push(close);
			}
			var parent = document.getElementById("brand-bar");
			// console.log(parent);
			parent.appendChild(closes[0]);
			var careers = document.getElementById("careers");
			careers.appendChild(closes[1]);
			var contact = document.getElementById("contact");
			contact.appendChild(closes[2]);
		}
	} else {
		if( document.getElementsByClassName("close").length !== 0 ){
			var close = document.getElementsByClassName("close");
			for( var c = 0; c < close.length; c++ ){
				var thisParent = close[c].parentNode;
				thisParent.removeChild(close[c]);
			}
		}
	}
	var close = document.getElementsByClassName("close");
	for( var c = 0; c < close.length; c++ ){
		var self = close[c];

		self.addEventListener("click", function(){
			event.preventDefault();
			var parent = this.parentNode;
			console.log(getComputedStyle(parent, null).display);
			if(getComputedStyle(parent, null).display == "block"){
				parent.style.display = "none";
			}
		});
	}
};

window.onload = function(){
	if (helper.checkForPull()){
		// console.log(document.getElementsByClassName("close"));
		if( document.getElementsByClassName("close").length == 0 ){
			console.log("hello")
			var closes = [];
			for(var i = 0; i < 3; i++){
				var close = document.createElement("a");
				close.setAttribute("class", "fa fa-close fa-2x close");
				closes.push(close);
			}
			var parent = document.getElementById("brand-bar");
			// console.log(parent);
			parent.appendChild(closes[0]);
			var careers = document.getElementById("careers");
			careers.appendChild(closes[1]);
			var contact = document.getElementById("contact");
			contact.appendChild(closes[2]);
		}
	} else {
		if( document.getElementsByClassName("close").length != 0 ){
			var close = document.getElementsByClassName("close");
			for( var c = 0; c < close.length; c++ ){
				var thisParent = close[c].parentNode;
				thisParent.removeChild(close[c]);
			}
		}
	}
	var close = document.getElementsByClassName("close");
	for( var c = 0; c < close.length; c++ ){
		var self = close[c];

		self.addEventListener("click", function(){
			event.preventDefault();
			var parent = this.parentNode;
			console.log(getComputedStyle(parent, null).display);
			if(getComputedStyle(parent, null).display == "block"){
				parent.style.display = "none";
			}
		});
	}


};
var helper = {
	checkForPull : function(){
		var pull = document.getElementById('pull');
		var pullDisplay = getComputedStyle(pull,null).display;
		var bool;
		if( pullDisplay == "block" ){
			return true;
		} else {
			return false;
		}
	},
	sendForm : function(formElement, url){
		var formPromise = new Promise(function(resolve, reject){
			// var formElement = document.getElementById(formID);
			var formData = new FormData(formElement);
			var request = new XMLHttpRequest();
			request.open("POST", url);
			request.send(formData);
		});
		return formPromise;
	}
};
// SMOOTH SCROLLING

$(document).ready(function () {
	    $(document).on("scroll", onScroll);

	    //smoothscroll
	    $('a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");

	        $('a').each(function () {
	            $(this).removeClass('active');
	        });
	        $(this).addClass('active');

	        var target = this.hash,
	            menu = target;
	        $target = $(target);
	        $('html, body').stop().animate({
	            'scrollTop': $target.offset().top-140
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('#menu-center a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('#menu-center ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}
