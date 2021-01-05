/*Slider animation*/

var inp = document.getElementsByName('slider1');
var sliderInterval = setInterval(nextSlide, 5000);

function nextSlide(){
	for( var i = 0; i < inp.length; i++){
		if (inp[i].checked == true) {
			i++;
			if (i != inp.length) {
			inp[i].checked = true;
			}
			else 
			inp[0].checked = true;
		}

	}
}

/*End slider animation*/

//Burger menu

$(function(){

    $('.menuToggle').on('click', function() {
       $('.menu-main').slideToggle(300, function(){
            
       });

    });

});

/*Menu fixed with scroll*/
