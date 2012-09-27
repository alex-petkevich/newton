$(function() {
	// bind tables ordering
	bindAutoReload();
});


function showSpinner(place) {
	$(place).parent().append('<div class="spinner">Loading...</div>');
	$(place).hide();
}
function hideSpinner(place) {
	$(place).siblings('.spinner').hide();
	$(place).show();
}

function bindAutoReload() {
	$('a.orderColumn').on('click',function(evt){
		var parentRel = $(evt.target).parents('.reloadPart');
		showSpinner(parentRel);
		$.ajax({
			url: evt.target.href,
			success: function ( data ) {
				parentRel.html(data);
				var state = {title: document.title, url: document.location.href};
				history.pushState(state, state.title, evt.target.href);
				hideSpinner(parentRel);
				bindAutoReload();
			}
		});
		return false;
	});
}
