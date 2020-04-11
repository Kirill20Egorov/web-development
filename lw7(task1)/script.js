function isPrimeNumber(num){
  isPrime = true
  if (typeof num == 'number'){
    number = num;
    num = [];
    num.push(number);
  }
  if (typeof num == 'object'){
    for (let index = 0; index < num.length; index++){
      //чтобы проверить число на простое достаточно проверить делимость на 3 и на 2, вместо запуска цикла в больших количествах
      if (((num[index] % 2 == 0) || (num[index] % 3 == 0)) && !((num[index] <= 3) && (num[index] >= -3))){
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
}
