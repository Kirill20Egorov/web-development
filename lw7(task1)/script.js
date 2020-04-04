function isPrimeNumber(num){
  isPrime = true
  if (typeof num == 'number'){
	for (let j = 2; j < num; j++){
	  if (num % j == 0){
		isPrime = false;
		break;
	  }
	}
	if (isPrime){
      console.log(num + ' is prime number')
    }
	else{
	  console.log(num + ' is not prime number')
	}
  }
  else{
	if (typeof num == 'object'){
	  for (let index = 0; index < num.length; index++){
		for (let j = 2; j < num[index]; j++){
		  if (num[index] % j == 0){
			isPrime = false;
			break;
		  }
		}
	    if (isPrime){
		  console.log(num[index] + ' is prime number')
        }
		else{
		  console.log(num[index] + ' is not prime number')
		}
	  }
	}
  }
}
