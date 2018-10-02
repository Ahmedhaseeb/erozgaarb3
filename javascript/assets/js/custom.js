// Variables

num1 = 20;
num2 = 50;
sum = num1 + num2;

sub = num1 - num2;

mul = num1 * num2;

divide = num1 / num2;


sum += 10;  // sum = sum + 10

sub -= 20;



// console.log(sum);
// console.log(sub);
// console.log(mul);
// console.log(divide);

// Conditions

var marks = 55;

if(marks > 50 &&  marks < 60){
	console.log("Grade C");
}else{

	console.log("fail")
}


var num1 = 50;
var num2 = 20;
var num3 = 30;
var num4 = 25;

if(num1 > num2 && num1 > num3 && num1 > num4){
	console.log(num1 + " is greater");
}

var assignment1 = true;
var assignment2 = true;
var assignment3 = false;
if( (assignment1 || assignment2)  && assignment3) {

	console.log("Eligible for certificate")
}

if(num1 == num2){
	console.log("both are equal");
}
var str1 = "a";
var str2 = "A";
if(str1 < str2){
	console.log("str1 is smaller");
}

var num3 = 50;
var num4 = "50";
if(num3 == num4){
	console.log("both are equally eaqual");
}

if(!isNaN(49)){
	console.log("Not a number");
}
if(num3 != num4){
	console.log("number are not equal");
}


