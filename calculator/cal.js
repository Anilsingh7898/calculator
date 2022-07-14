var checkans=0;
var checkdot=0;


function remove()
{document.getElementById("cal").value= "";}

function backSpace()
{var x= document.getElementById("cal").value;
document.getElementById("cal").value=x.slice(0,-1);

}

function setValue(x,y){
	if(checkans==1){
		checkans=0
		y.value="";
	}

	y.value+=x.value;
}

function setOperator(x,y){
	n=y.value.charAt(y.value.length-1);

	switch(n){
		case '0':
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':
		case '6':
		case '7':
		case '8':
		case '9':
		case '.' :
		y.value+=x.value;
		 if (checkans==1)
			 checkans=0;
		 if(checkdot==1)
		 	checkdot=0;

break;
default:
		 value=y.value.slice(0,-1);
		 value+=x.value;
		 y.value = value;

	}
}



function result(x){
x.value=eval(x.value);
checkans=1;
 checkdot=0;
}

function setDot(x,y){
	if(checkdot==0){
		y.value += x.value;
		checkdot=1;
		
	}
}