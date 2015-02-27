//alert("Start");

function navigator(){
	document.write("Кодове ім'я браузера: " + navigator.appCodeName + "<br />");
	document.write("Офіційне ім'я браузера: " + navigator.appName + "<br />");
	document.write("Версія браузера: " + navigator.appVersion + "<br />");
	document.write("Мова браузера: " + navigator.language + "<br />");
	document.write("Платформу, на якій виконується браузер: " + navigator.platform);
	
}

function loop() {
	outerloop:
	for(var i = 0; i < 10; i++) {
		innerloop:
		for(var j = 0; j < 10; j++) {
			if (j > 3) break; 		// Вихід із самого внутрішнього циклу
			if (i == 2) break innerloop; 	// Те ж саме
			if (i == 4) break outerloop; 	// Вихід із зовнішнього циклу
			if (i == 9) alert("Hello");
		}		
	}
}


function print(msg){
      document.write(msg, "<br>");
}

function distance(x1, y1, x2, y2){
	var dx = x2-x1;
	var dy = y2-y1;
	return Math.sqrt(dx*dx + dy*dy);
}

function factorial(x){
	if (x <= 1)
	return 1;
	return x * factorial(x-1);
}

function Square(r) { 
	return r.width * r.height; 
}
var f= Square(r1);

function Figure(w, h) {
	this.width = w;
	this.height = h;
	this.square = function( ) { 
		return this.width * this.height; 
	};
}
var r1 = new Figure(5,8);
var a = r1.square();				//Значення а=40

Figure.prototype.perimetr = function() { 
	return 2*(this.width + this.height); 
};
var p = r1.perimetr();				//Значення p=26
alert(p);

