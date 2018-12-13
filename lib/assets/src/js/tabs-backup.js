
(function($){
	var $btn = $('.serv-menu').find('li');
	var $select = $('#serv-menu-select');
	var $contents = $('.serv-content');

	$btn.on('click',function(event){
		var _this = $(this);
		var target = _this.data('id');
		var active = $('.serv-menu').find('.active');
		var activeContent = $('.serv-content').find('.active');

		activeContent.removeClass('active');
		active.removeClass('active');
		_this.toggleClass('active');

		$contents.find(".serv-content-item[data-id='" + target + "']").toggleClass('active');
	});

	$select.on('change',function(event){
		var _this = $(this);
		var target = _this.val();
		var activeContent = $('.serv-content').find('.active');
		
		activeContent.removeClass('active');
		$contents.find(".serv-content-item[data-id='" + target + "']").toggleClass('active');
	});

	// Accordion
	var $accord_btn = $('.serv-accordion-entry');

	$accord_btn.on('click', accordOnClick );

	function accordOnClick(){
		var _this = $(this);
		var parent = _this.parents('.serv-content-item');
		var child = _this.find('.serv-info-body');

		parent.find('.acc-entries').find('.active').find('.serv-info-body').slideUp(350);
		parent.find('.acc-entries').find('.active').removeClass('active');

		_this.addClass('active');
		child.slideDown(350);
	}


	function GTab(element){
		this.element;
		console.log(element);
	}

	var tab = new GTab($btn);

})(jQuery);