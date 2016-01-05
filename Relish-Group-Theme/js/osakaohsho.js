// MAKES .OSAKA-SECTION-TITLE STICKY
var stickyHeaders = (function() {
  var $window = $(window),
      $stickies;
  var load = function(stickies) {
    if (typeof stickies === "object" && stickies instanceof jQuery && stickies.length > 0) {
      $stickies = stickies.each(function() {
        var $thisSticky = $(this).wrap('<div class="followWrap" />');
        $thisSticky
            .data('originalPosition', $thisSticky.offset().top)
            .data('originalHeight', $thisSticky.outerHeight())
              .parent()
              .height($thisSticky.outerHeight());
      });
      $window.off("scroll.stickies").on("scroll.stickies", function() {
		  _whenScrolling();
      });
    }
  };

  var _whenScrolling = function() {
    $stickies.each(function(i) {
      var $thisSticky = $(this),
          $stickyPosition = $thisSticky.data('originalPosition');
      if ($stickyPosition <= $window.scrollTop()) {
        var $nextSticky = $stickies.eq(i + 1),
            $nextStickyPosition = $nextSticky.data('originalPosition') - $thisSticky.data('originalHeight');
        $thisSticky.addClass("fixed");
        if ($nextSticky.length > 0 && $thisSticky.offset().top >= $nextStickyPosition) {
          $thisSticky.addClass("absolute").css("top", $nextStickyPosition);
        }
      } else {
        var $prevSticky = $stickies.eq(i - 1);
        $thisSticky.removeClass("fixed");
        if ($prevSticky.length > 0 && $window.scrollTop() <= $thisSticky.data('originalPosition') - $thisSticky.data('originalHeight')) {
          $prevSticky.removeClass("absolute").removeAttr("style");
        }
      }
    });
  };

  return {
    load: load
  };
})();

$(function() {
  stickyHeaders.load($(".osaka-section-title"));
});

// MAKES .OSAKA-SECTION-TITLE FADE WHEN SCROLLING
function kill_logo() {
	    var window_top = $(window).scrollTop();
	    var div_top = $('.kill-section').offset().top;
	    if (window_top > div_top) {
	        $('.osaka-section-title').addClass('fade');
	    } else {
	        $('.osaka-section-title').removeClass('fade');
	    }
	}

	$(function () {
	    $(window).scroll(kill_logo);
	    kill_logo();
	});
// MAKES .OSAKA-CAPTION DISAPPEAR WHEN SCROLLING TO BRANCHES
	function kill_paragraph() {
	    var window_top = $(window).scrollTop();
	    var div_top = $('#red-strip').offset().top;
	    if (window_top > div_top) {
	        $('.osaka-caption').addClass('disappear');
	    } else {
	        $('.osaka-caption').removeClass('disappear');
	    }
	}

	$(function () {
	    $(window).scroll(kill_paragraph);
	    kill_paragraph();
	});
