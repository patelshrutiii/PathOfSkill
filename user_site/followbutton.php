<?php
    require_once "header.php";
    require_once "script.php";
?>
<style>

.btn {
  min-width: 100px;
}

.unfollow {
  display: none;
}

.following {
  display: none;
}

.btn-following {
  color: #fff;
  background-color: #33AFB7;
  border-color: #2E8EA4;
}
.btn-following:focus {
  color: #fff;
}

</style>
<button class="btn btn-primary btn-follow">
	<span class="follow"><i class="fa fa-user-plus"></i> Follow</span>
	<span class="unfollow">Unfollow</span>
	<span class="following">Following</span>
</button>
<script>
$(document).on({
    mouseenter: function () {
			$(this).addClass("btn-danger");
				$('.following').hide();
				$('.unfollow').show();
    },
    mouseleave: function () {
        //stuff to do on mouse leave
			$(this).removeClass("btn-danger");
				$('.unfollow').hide();
				$('.following').show();
    }	
}, ".btn-following"); //pass the element as an argument to .on

// follow/unfollow button handling
$('.btn-follow').click(function(){
	if ($(this).hasClass('btn-following')) {
		// successful unfollow
		$(this).removeClass('btn-following');
		$(this).removeClass('btn-danger');
		$(this).addClass('btn-primary');
		$('.following').hide();
		$('.unfollow').hide();
		$('.follow').show();
	
		// unfollow ajax here
	}
	else {	
		// successful follow
		$(this).addClass('btn-following');
		$(this).removeClass('btn-primary');
		$('.follow').hide();
		$('.following').show();
		
		// follow ajax here
	}
	
});
</script>