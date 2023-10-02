$(document).ready(function() {
	
	var $toggleButton = $('.toggle-button'),
        $menuWrap = $('.nav-wrapper');

    $toggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $menuWrap.toggleClass('menu-show');
    });
	
	var $dtoggleButton = $('.dtoggle-button'),
        $dmenuWrap = $('.nav.dashboard-nav');

    $dtoggleButton.on('click', function() {
        $(this).toggleClass('button-open');
        $dmenuWrap.toggleClass('menu-show');
    });
	$('.nav.dashboard-nav button').on('click', function() {
		$dtoggleButton.toggleClass('button-open');
		$dmenuWrap.toggleClass('menu-show');
	});
	$active_question = 1;
	
	$(document).on('click','.quiz-nav-item.quiz-nav-item-cb',function(){
		$('.quiz-nav-item').removeClass('current quiz-nav-item-cb');
		$(this).addClass('current');
		aI( $(this), 'animate__jello' );
		if ($(this).hasClass("quiz-nav-item-1") && $active_question != 1) { 
			$active_question = 1;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-1').show().removeClass('qnv').addClass('qv');				
				aI( $(".quiz-question-1"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-1').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-1"), 'animate__bounceInRight' );	
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});

		} else if ($(this).hasClass("quiz-nav-item-2")  && $active_question != 2) { 
			$active_question = 2;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-2').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-2"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-2').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-2"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});		
		} else if ($(this).hasClass("quiz-nav-item-3")) { 
			$active_question = 3;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-3').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-3"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-3').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-3"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-4")) { 
			$active_question = 4;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-4').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-4"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-4').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-4"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-5")) { 
			$active_question = 5;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-5').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-5"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-5').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-5"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-6")) { 
			$active_question = 6;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-6').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-6"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-6').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-6"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-7")) { 
			$active_question = 7;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-7').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-7"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-7').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-7"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-8")) { 
			$active_question = 8;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-8').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-8"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-8').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-8"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-9")) { 
			$active_question = 9;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-9').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-9"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-9').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-9"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-10")) { 
			$active_question = 10;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-10').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-10"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-10').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-10"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-11")) { 
			$active_question = 11;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-11').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-11"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-11').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-11"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-12")) { 
			$active_question = 12;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-12').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-12"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-12').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-12"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-13")) { 
			$active_question = 13;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-13').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-13"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-13').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-13"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-14")) { 
			$active_question = 14;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-14').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-14"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-14').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-14"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-15")) { 
			$active_question = 15;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-15').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-15"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-15').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-15"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-16")) { 
			$active_question = 16;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-16').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-16"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-16').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-16"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-17")) { 
			$active_question = 17;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-17').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-17"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-17').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-17"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-18")) { 
			$active_question = 18;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-18').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-18"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-18').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-18"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		}  else if ($(this).hasClass("quiz-nav-item-19")) { 
			$active_question = 19;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-19').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-19"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-19').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-19"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-20")) { 
			$active_question = 20;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-20').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-20"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-20').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-20"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-21")) { 
			$active_question = 21;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-21').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-21"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-21').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-21"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} else if ($(this).hasClass("quiz-nav-item-22")) { 
			$active_question = 22;
			aO( $(".quiz-question.qv"), 'animate__bounceOutLeft' );
			aO( $(".quiz-answers.qv"), 'animate__bounceOutRight' );
			$(".quiz-question.qv").one( 'animationend', function() {
				$(".quiz-question").removeClass('qv').addClass('qnv');		
				$('.quiz-question-22').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-question-22"), 'animate__bounceInLeft' );
				$(".quiz-answers").removeClass('qv').addClass('qnv');		
				$('.quiz-answers-22').show().removeClass('qnv').addClass('qv');
				aI( $(".quiz-answers-22"), 'animate__bounceInRight' );
				$('.quiz-nav-item').addClass('quiz-nav-item-cb');
			});
		} 
	});
	
	function aO(el, anim, onDone) {
		var $el = $(el);
		$el.addClass( 'animate__animated ' + anim );
		$el.one( 'animationend', function() {
			$(this).removeClass( 'animate__animated ' + anim );
			$(this).hide();
			onDone && onDone();
		});
	}
	function aI(el, anim, onDone) {
		var $el = $(el);
		$el.addClass( 'animate__animated ' + anim );
		$el.one( 'animationend', function() {
			$(this).removeClass( 'animate__animated ' + anim );
			$(this).show();
			onDone && onDone();
		});
	}
	
	if( $('#quiz-timer').length ) {
		var countdowntimer = "20:01";
		var interval = setInterval(function() {
		  var timer = countdowntimer.split(':');
		  var minutes = parseInt(timer[0], 10);
		  var seconds = parseInt(timer[1], 10);
		  --seconds;
		  minutes = (seconds < 0) ? --minutes : minutes;
		  if (minutes < 0) clearInterval(interval);
		  seconds = (seconds < 0) ? 59 : seconds;
		  seconds = (seconds < 10) ? '0' + seconds : seconds;
		  $('#quiz-timer').html(minutes + ':' + seconds);
		  countdowntimer = minutes + ':' + seconds;
		}, 1000);
	}
	
	if( $('.footer-cta-typed').length ) {
		var typed1 = new Typed('.footer-cta-typed', {
			strings: ['what is your IQ?', 'how smart are you?', 'has your IQ improved?'],
			typeSpeed: 50,
			backSpeed: 10,
			backDelay: 1000,
			smartBackspace: true, // this is a default
			loop: true
		});
		
	}


	
	
	if( $('.new-quizz-slider').length ) {
		$('.new-quizz-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			prevArrow:"<button type='button' class='slick-prev slick-btn pull-left'><img src='img/icons/square-alt-arrow-left.svg' class='img-fluid svg-icon icon-green slider-icon' alt='Arrow Left' /></button>",
            nextArrow:"<button type='button' class='slick-next slick-btn pull-right'><img src='img/icons/square-alt-arrow-right.svg' class='img-fluid svg-icon icon-green slider-icon' alt='Arrow Left' /></button>"
		});
	}
	
	$(".btn-manage-subscribtion").click(function(){
		$("#manage-subscribtion").fadeToggle();
	});
	
	$(".form-control-select-country").focus(function(){
		$('.select-arrow-icon').addClass('inp-s-open');	
	}).blur(function(){
		$('.select-arrow-icon').removeClass('inp-s-open');	
	})
  
	$(".payment-cta-trigger").click(function(){
		$.magnificPopup.open({
			items: {
				src: '.payment-modal-wrapper',
			},
			type: 'inline',
			preloader: false,
			mainClass: 'animated fadeIn',
			modal: true,
			fixedContentPos: true,
			fixedBgPos: true,
			callbacks: {
				open: function() {
				
				}
			}	
		});
	});
	$(".aicb-1").click(function(){
		if($('#ai-name').valid() == true) {
			$('.ai-form-section-1').fadeOut(function() {
				$('.ai-form-section-2').fadeIn();
			});
		}
	});
	$(".aicb-2").click(function(){
		if($('#ai-email').valid() == true) {
			$('.ai-form-section-2').fadeOut(function() {
				$('.ai-form-section-3').fadeIn();
			});
		}
	});
	$(".aicb-3").click(function(){
		if($('#ai-gender').valid() == true && $('#ai-age').valid() == true && $('#ai-country').valid() == true) {
			$('.ai-form-section-3').fadeOut(function() {
				$('.ai-form-section-4').fadeIn();
			});
		}
	});
	$(".aicb-4").click(function(){
		if($('#ai-study-level').valid() == true && $('#ai-study-field').valid() == true) {
			$('.ai-form-section-4').fadeOut(function() {
				$('.additional-info-proc-wrapper').fadeIn(function() {
					$('.ytr-title-proc').text('Calculating Results...');
					$('.ytr-title-proc').addClass('animate__animated animate__pulse animate__infinite');
					function setProgress(elem, percent) {
						var	degrees = percent * 3.6,
							transform = /MSIE 9/.test(navigator.userAgent) ? 'msTransform' : 'transform';
							
						elem.querySelector('.counter').setAttribute('data-percent', Math.round(percent));
						elem.querySelector('.progressEnd').style[transform] = 'rotate(' + degrees + 'deg)';
						elem.querySelector('.progress').style[transform] = 'rotate(' + degrees + 'deg)';
						if(percent >= 50 && !/(^|\s)fiftyPlus(\s|$)/.test(elem.className))
							elem.className += ' fiftyPlus';
					}

					(function() {
						var elem = document.querySelector('.circlePercent'),
							percent = 0;
						(function animate() {
							setProgress(elem, (percent += .25));
							if(percent < 100)
							setTimeout(animate, 19);
						})();
					})();
					function progressBarDownload(percent, $element, duration) {
						var progressBarDownloadWidth = percent * $element.width() / 100;
						$element.find('div').animate({ width: progressBarDownloadWidth }, duration).html(percent + "%&nbsp;");
					}
					progressBarDownload(0, $('#progressBar'), 0);					
					setTimeout(function() {
						$('.ccic-1').addClass('step-completed');
						progressBarDownload(20, $('#progressBar'), 500);
					}, 1500);
					setTimeout(function() {
						$('.ccic-2').addClass('step-completed');
						progressBarDownload(40, $('#progressBar'), 500);
					}, 3000);
					setTimeout(function() {
						$('.ccic-3').addClass('step-completed');
						progressBarDownload(60, $('#progressBar'), 500);
					}, 4500);
					setTimeout(function() {
						$('.ccic-4').addClass('step-completed');
						progressBarDownload(80, $('#progressBar'), 500);
					}, 6000);
					setTimeout(function() {
						$('.ccic-5').addClass('step-completed');
						progressBarDownload(100, $('#progressBar'), 500);
					}, 7500);
				});
			});
		}
	});	
});