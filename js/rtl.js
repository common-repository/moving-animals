var moving_animal=document.getElementById("moving_mapl")
left=window.innerWidth-moving_animal.width
function start(){
	if(left>0){
		moving_animal.style.left=(left-20)+"px"
		left-=20
	}
	else{
		left=window.innerWidth-moving_animal.width
	}
}

function move(){
	setInterval("start()",parseFloat(rtl_php_vars.rtlSpeed))
}
move();