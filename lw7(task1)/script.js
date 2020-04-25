function isPrimeNumber(num){
  var isPrime;
  if (typeof num == 'number'){
    number = num;
    num = [];
    num.push(number);
  }
  if (typeof num == 'object'){
    for (let index = 0; index < num.length; index++){
      isPrime = false;
      if (num[index] >= 2){
        isPrime = true; 
        for (let j = 2; j < num[index]; j++){
          if (num[index] % j == 0){
            isPrime = false;
            break;
          } 
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