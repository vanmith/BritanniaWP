function manuSearch() {
    var x = document.getElementById("manuDrop");
    if (x.className.indexOf("show") == -1) { 
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

function modSearch() {
    var x = document.getElementById("modSearch");
    if (x.className.indexOf("show") == -1) { 
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

function budSearch() {
    var x = document.getElementById("budSearch");
    if (x.className.indexOf("show") == -1) { 
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

function bodSearch() {
    var x = document.getElementById("bodSearch");
    if (x.className.indexOf("show") == -1) { 
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

function responsiveNav() {
    var x = document.getElementById("responsivenav");
    if (x.className.indexOf("show") == -1) { 
        x.className += " show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

jQuery(document).ready(function($)  {

	$('.faq_question').click(function() {

		if ($(this).parent().is('.open')){
			$(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
			$(this).closest('.faq').removeClass('open');

			}else{
				var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
				$(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
				$(this).closest('.faq').addClass('open');
			}

	});
	

});


$('#show').on('click', function () {
    $('.center').show();
})

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
})


// With JQuery
$("#ex2").slider({});


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



