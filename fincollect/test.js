let x = 2;
let l = 0;
let m = 0;

while (x > 0) {
	m++;
	if (x % 2 !=0) {
		l++;
	}

	x = x / 2;
}

console.log(l);
console.log(m);