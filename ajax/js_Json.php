<!doctype html>
<html>
    <head>
        <script>
            let jsObj={name:"Mr. Meow", age:20, cgpa:3.2};
            console.log(jsObj.name  );

            let jsonObj=JSON.stringify(jsObj);
            console.log(jsonObj);

            let jsonObj2='{"carName":"BMW", "Price":4000000000}';
            console.log(jsonObj2);

            let jsObj2=JSON.parse(jsonObj2);
            console.log(jsObj2.carName);
            console.log(jsObj2.Price);
            </script>
</head>
<body>
</body>
</html>


