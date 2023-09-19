const canvas = document.getElementById("miCanvas");
const context = canvas.getContext("2d");
context.lineWidth = 5;
context.strokeStyle = "black";

context.beginPath();
context.moveTo(50, 50);
context.lineTo(75,50);
context.moveTo(73, 50);
context.lineTo(95,25);
context.moveTo(92, 25);
context.lineTo(115,70);
//context.arc(150, 50, 30, 0, Math.PI * 2, false);
context.closePath();
context.stroke();
