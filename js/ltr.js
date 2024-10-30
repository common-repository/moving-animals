var moving_animal=document.getElementById("moving_mapl")
left=0
function start(){
	if(left<=window.innerWidth-moving_animal.width){
		moving_animal.style.left=(left+20)+"px"
		left+=20
	}
	else{
		left=0
	}
}

function move(){
setInterval("start()",parseFloat(ltr_php_vars.ltrSpeed))
}
move();