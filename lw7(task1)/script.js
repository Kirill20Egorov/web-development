function isPrimeNumber(num){
  isPrime = true
  if (typeof num == 'number'){
    number = num;
    num = [];
    num.push(number);
  }
  if (typeof num == 'object'){
    for (let index = 0; index < num.length; index++){
      if (((num[index] % 2 == 0) || (num[index] % 3 == 0)) && 
      !((num[index] == 2) || (num[index] == 3))){
        isPrime = false;
      }
      if (isPrime){
        console.log(num[index] + ' is prime number')
      }
      else{
        console.log(num[index] + ' is not prime number')
      }
  }
}
