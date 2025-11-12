
//dynamic initialization of variable
let a=10;
console.log(a);

//value assignment in variable
a=20;
console.log(a);



let val1=20;
let val2="20";
//Arithmatic ops.
console.log(val1-val2);
console.log(val1+val2);
console.log(val1/val2);
console.log(val1*val2);
console.log(val1%val2);
console.log(val1**val2);

//compare value
console.log(val1==val2);

//compare value and type
console.log(val1===val2);

//Flow Control

let country="Australia";
let state="NY";

if(country=="USA")
{
    if(state=="DC")
    {
        console.log("Are you D. Trump??");
    }

    else
    {
        console.log("are you meow?");
    }
}

else if(country=="Australia")
{
    console.log("FakiBaj");
}

else
{
    console.log("meow");
}


let day="monday";

switch(day)
{
    case "monday": console.log("Happy day");break;
    default: console.log("Meow Day");
}

(10<20)? console.log(10) : console.log(20);

//loop

for(let i=1;i<6;i++)
{
    console.log(i);
}

let valNum=100;

do{
    console.log(valNum);
    valNum++;
}while(valNum<10)

while(valNum<100)
{
    console.log(valNum);
    valNum++;
}

let fruits=["Mango","Jambura","PineApple","Kola","Banggi"];
console.log(fruits[3]);
console.log(fruits.length);