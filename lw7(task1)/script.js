function isPrimeNumber(num){
  var isPrime;
  if (typeof num == 'number'){
    number = num;
    num = [];
    num.push(number);
  }
  if (typeof num == 'object'){
    for (let index = 0; index < num.length; index++){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      isPrime = false;
      if (num[index] >= 2){
        isPrime = true; 
        for (let j = 2; j < num[index]; j++){
          if (num[index] % j == 0){
            isPrime = false;
            break;
          } 
        }     	
=======
=======
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
=======
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
      //чтобы проверить число на простое достаточно проверить делимость на 3 и на 2, вместо запуска цикла в больших количествах
      if ((((num[index] % 2 == 0) || (num[index] % 3 == 0)) || (num[index] <= 1)) 
      && num[index] != 2 && num[index] != 3){
        isPrime = false;
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
      }
      if (isPrime){
        console.log(num[index] + ' is prime number')
      }
      else{
        console.log(num[index] + ' is not prime number')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      }  
=======
      }
      isPrime = true;
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
=======
      }
      isPrime = true;
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
=======
      }
      isPrime = true;
>>>>>>> 058c5424500df90e57e466db6c9356e84d0959be
    }
  }
}
