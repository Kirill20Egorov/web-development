function isPrimeNumber(num){
  isPrime = true
  if (typeof num == 'number'){
    number = num;
    num = [];
    num.push(number);
  }
  if (typeof num == 'object'){
    for (let index = 0; index < num.length; index++){
<<<<<<< HEAD
      if ((((num[index] % 2 == 0) || (num[index] % 3 == 0)) || (num[index] <= 1)) && num[index] != 2 && num[index] != 3){
=======
      //чтобы проверить число на простое достаточно проверить делимость на 3 и на 2, вместо запуска цикла в больших количествах
      if ((((num[index] % 2 == 0) || (num[index] % 3 == 0)) || (num[index] <= 1)) 
      && num[index] != 2 && num[index] != 3){
>>>>>>> e39052baf4d4c3d8134bdee2e80c8953eb36e590
        isPrime = false;
      }
      if (isPrime){
        console.log(num[index] + ' is prime number')
      }
      else{
        console.log(num[index] + ' is not prime number')
      }
<<<<<<< HEAD
      isPrime = true;
=======
>>>>>>> e39052baf4d4c3d8134bdee2e80c8953eb36e590
    }
  }
}
