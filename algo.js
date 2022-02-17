//Exo 1
let test = "blablal";
console.log(test);
//Exo 2
let a = 5;
let b = 6;
let c = 8;
console.log(a + b + c);
//Exo 3
let carac = "Lorem ipsum";
console.log(carac);
//Exo 4
let carac1 = "coucou";
let carac2 = "petite perruche";
console.log(carac1 + " " + carac2);
//Exo 5
let nombre1 = 18;
let nombre2 = 5;
let temp = 0;
temp = nombre1;
nombre1 = nombre2;
nombre2 = temp;
console.log("nombre 1 : " + nombre1 + " nombre 2 : " + nombre2);
//Exo 6
let maVar1 = 5;
let maVar2 = 18;
if (maVar1 > maVar2) {
  console.log("maVar1 est plus grande");
} else {
  console.log("maVar2 est plus grande");
}
//Exo 7
const plusGrand = (x, y) => {
  if (x > y) {
    return x;
  }
  if (x < y) {
    return y;
  }
  return false;
};

var x = 92;
var y = 92;
if (plusGrand(x, y) != false) {
  console.log("Le plus grand des nombres est " + plusGrand(x, y));
} else {
  console.log("Les deux nombres sont égaux");
}
//Exo 8
function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}
console.log(getRandomInt(8));
// //Exo 9
// for (let i = 0; i < 10; i++) {
//   console.log(getRandomInt(10));
// }
//Exo 10
let nombre5 = getRandomInt(100);
while (nombre5 < 90) {
  console.log(nombre5);
  nombre5 = getRandomInt(100);
}
