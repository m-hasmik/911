jQuery(document).ready(function($) {

	$('.ep-header-mob-trigger').click(function(event) {
		if ($(this).hasClass('ready')) {
			$(this).removeClass('ready');
			$('.ep-header-mobile').css('display', 'none');
			$('body').css('overflow', 'auto');
			$('body').css('height', 'auto');
		}
		else {
			$(this).addClass('ready');
			$('.ep-header-mobile').css('display', 'block');
			$('body').css('overflow', 'hidden');
			$('body').css('height', '100%');
		}
	});

	if ($(window).width() > 991 && (!$('body').hasClass('c-tv') && !$('body').hasClass('c-phone') && !$('body').hasClass('c-repair'))) {

		var status_interval = setInterval(function(){
			if ($('#offline-icon').length) {
				$('#offline-icon').click();
				var msg_sound = new Sound("https://911-crew.com/assets/msg-sound.mp3", 20, false);
				msg_sound.start();
				clearInterval(status_interval);
			}
			if ($('#online-icon').length) {
				var msg_sound = new Sound("https://911-crew.com/assets/msg-sound.mp3", 20, false);
				msg_sound.start();
				clearInterval(status_interval);
			}
		}, 1000);
	}

	$('.ep-header-mobile-dropdown').click(function(event) {
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
		}
		else {
			$(this).addClass('active');
		}
	});

	$('.ep-header-mobile-wrap').click(function(event) {
		if ($(event.target).hasClass('ep-header-mobile-wrap')){
			$('.ep-header-mob-trigger').removeClass('ready');
			$('.ep-header-mobile').css('display', 'none');
			$('body').css('overflow', 'auto');
			$('body').css('height', 'auto');
		}
	});

	
	// if you want to use the 'fire' or 'disable' fn,
	// you need to save OuiBounce to an object
	var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
		aggressive: true,
		timer: 0,
		delay: 500,
		callback: function() { $('#phone-num').focus(); }
	});

	if ($(window).width() > 991) {
		$('.phone-button, .phone-button-info p, .c-popup-trigger').on('click', function(event) {
			event.preventDefault();
			_ouibounce.fire();
			$('#phone-num').focus();
		});
	}

	if ($('.ep-header-logo h4').length) {

		if ($('.ep-header-logo h4').innerHeight() > 38 && $(window).width() <= 991) {
		    $('.ep-header-logo h4').css('fontSize', '15px');
		}
		else if ($('.ep-header-logo h4').innerHeight() > 50 && $(window).width() > 991) {
			$('.ep-header-logo h4').css('fontSize', '16px');
		}

	}

	if ($(window).width() < 991) {
		$('#ouibounce-modal .modal').click(function(event) {
			if (!$(event.target).hasClass('modal-close') && !$(event.target).hasClass('btn')) {
				$('.btn', this)[0].click();
			}
		});
	}

	var fired = false;
	var _scrollTop = 0;
	$(window).scroll(function(event) {
		if ($(this).scrollTop() > _scrollTop) {
			_scrollTop = $(this).scrollTop();
		}
		else if (($(this).scrollTop() < _scrollTop - 300) && !fired) {
			_ouibounce.fire();
			fired = true;
		}
	});

	$('.underlay, .modal-close').on('click', function() {
		$('#ouibounce-modal').hide();
	});

	$('#ouibounce-modal .modal-footer').on('click', function() {
  		$('#ouibounce-modal').hide();
	});

	$('#ouibounce-modal .modal').on('click', function(e) {
		e.stopPropagation();
	});

	$('#main-call-hvac, h3').click(function(event) {
		if ($(window).width() > 991) {
			event.preventDefault();
			_ouibounce.fire();
			$('#phone-num').focus();
		}
	});

	$('.modal-body form').submit(function(event) {
		event.preventDefault();
		var phone = $('#phone-num').val();

		if (phone.length === 14 && phone[13] != '_') {
			$('#ouibounce-modal .modal').css('height', '460px');
			$('.modal-message').css('display', 'block');
			$('button', this).attr('disabled', 'disabled');

			// trigger for GA event - "call-back-request"
			$('#hidden-submit-trigger').trigger('click');

			var i = 25;

			setInterval(function(){ 
				if (i > 0) {
					i--;
				}

				var time_left = "";

				if (i < 10) {
					time_left = "00:0" + i;
				}
				else {
					time_left = "00:" + i;
				}

				$('.modal-svg-timer').text(time_left);
			}, 1000);

			__ctm.form.track('app.calltrackingmetrics.com', // the capture host
	            'FRT472ABB2C5B9B141A4D619C91B59F8924751EB3E2BEB1B89587E330D6B9CCABD5', // this FormReactor
	            '7326395340',
	            {
	               country_code: "1", // the expected country code e.g. +1, +44, +55, +61, etc... the plus is excluded
	               name: "Name",
	               phone: phone,
	               email: "",
	               custom: {
	                   "": ""
	            }
            });
		}
		else {
			$('#phone-num').addClass('wrong-num');
		}

	});

	$('#phone-num').on('keydown', function(event) {
		$('.modal-body form button').removeAttr('disabled');
		$(this).removeClass('wrong-num');
	});

	$('.phone-button-info-close').click(function(event) {
		$('.phone-button-wrapper').removeClass('active');
	});

	$("#phone-num").inputmask({"mask": "(999) 999-9999"});
});

function Sound(source,volume,loop)
{
    this.source=source;
    this.volume=volume;
    this.loop=loop;
    var son;
    this.son=son;
    this.finish=false;
    this.stop=function()
    {
        document.body.removeChild(this.son);
    }
    this.start=function()
    {
        if(this.finish)return false;
        this.son=document.createElement("embed");
        this.son.setAttribute("src",this.source);
        this.son.setAttribute("hidden","true");
        this.son.setAttribute("volume",this.volume);
        this.son.setAttribute("autostart","true");
        this.son.setAttribute("loop",this.loop);
        document.body.appendChild(this.son);
    }
    this.remove=function()
    {
        document.body.removeChild(this.son);
        this.finish=true;
    }
    this.init=function(volume,loop)
    {
        this.finish=false;
        this.volume=volume;
        this.loop=loop;
    }
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}