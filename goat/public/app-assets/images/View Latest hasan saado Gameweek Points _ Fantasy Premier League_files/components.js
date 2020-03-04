/**
 * @namespace app.staticBuild
 */

$('.dropDown').on('keypress click', function(e){
    if (e.which === 13 || e.type === 'click') {
        $(this).toggleClass('open');
    }
});

$('.socialShareBtn').on('keypress click', function(e){
    if (e.which === 13 || e.type === 'click') {
        $(this).parents('.socialShareHover').toggleClass('open');
    }
});

$('.toggleContainer .toggleBtn').click(function(){
    var current = $(this).parents('.toggleContainer');
    $(current).toggleClass('open');
});

$('.filterWidgetBtn').click(function(){
    $('.filterWidget').toggleClass('open');
});

$('.filterWidget .close').click(function(){
    $('.filterWidget').toggleClass('open');
});

$('.showMoreBtn').click(function(){
    $(this).prev('.showMore').toggleClass('open');
    $(this).hide();
});

$('.btn-more').click(function(){
    $('.pageFilter').addClass('open');
    $('body').addClass('overlay');
});

$('.pageFilter .close').click(function(){
    $('.pageFilter').removeClass('open');
    $('body').removeClass('overlay');
});

$('.pageFilter .apply').click(function(){
    $('.pageFilter').removeClass('open');
    $('.pageFilter .dropDown').removeClass('open');
    $('body').removeClass('overlay');
});

$('.table .revealMore').on('keypress click', function(e){
    if (e.which === 13 || e.type === 'click') {

        if (  $(this).parents('tr').hasClass('expanded') ) {
            $(this).parents('tr').removeClass('expanded');
        } else {
            $('.table tr').removeClass('expanded');
            $(this).parents('tr').addClass('expanded');
        }

    }
});

function txt() {
    var sel = document.selection, range, rect;
    var x = 0, y = 0, w = 0, h = 0;
    if (sel) {
        if (sel.type != "Control") {
            range = sel.createRange();
            range.collapse(true);
            x = range.boundingLeft;
            y = range.boundingTop;
        }
    } else if (window.getSelection) {
        sel = window.getSelection();
        if (sel.rangeCount) {
            range = sel.getRangeAt(0).cloneRange();
            if (range.getClientRects) {
                range.collapse(true);
                if (range.getClientRects().length>0){
                    rect = range.getClientRects()[0];
                    x = rect.left;
                    y = rect.top;
                }
            }
            // Fall back to inserting a temporary element
            if (x === 0 && y === 0) {
                var span = document.createElement("span");
                if (span.getClientRects) {
                    // Ensure span has dimensions and position by
                    // adding a zero-width space character
                    span.appendChild( document.createTextNode("\u200b") );
                    range.insertNode(span);
                    rect = span.getClientRects()[0];
                    x = rect.left;
                    y = rect.top;
                    var spanParent = span.parentNode;
                    spanParent.removeChild(span);

                    // Glue any broken text nodes back together
                    spanParent.normalize();
                }
            }
        }
    }
    return { x: x, y: y};
}

function getSelectedText() {
    var text = "";
    if (typeof window.getSelection !== "undefined") {
        text = window.getSelection().toString();
    } else if (typeof document.selection !== "undefined" && document.selection.type == "Text") {
        text = document.selection.createRange().text;
    }
    return text;
}

function txtShare() {
	var t = txt();
	$('.shareTxt').addClass('active');
	$('.shareTxt').css('left', t.x);
	$('.shareTxt').css('top', t.y);
}

$('#txtShare').mouseup(function() {

	var select = getSelectedText();
    console.log(select);
	if (select) {
		txtShare();
	} else {
		$('.shareTxt').removeClass('active');
	}
});

$('body').on("blur focus keydown mousedown", function() {
    $('.shareTxt').removeClass('active');
});

$('.toggle .btn-tab').click(function () {
    console.log('click');
    var tab = "#" + $(this).attr('tab-id');
    console.log(tab);
    $('.toggle .btn-tab').removeClass('selected');
    $(this).addClass('selected');
    $('.tabPanel').hide();
    $(tab).show();
})

$('.statsCentreMenu .navLink').click(function(){
    var current = $(this).parents('.dropdownSection');
    $(current).toggleClass('open');
});