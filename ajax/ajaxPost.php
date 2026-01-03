<!doctype html>
<html>
    <head></head>
    <body>
        <form>
            <input type="text" id="name"><br>
            <input type="text" id="email"><br>
        </form>
        <button onclick="callAjax()">click me</button>
        <span id="result"></span>
        <script>
            function callAjax()
            {
                let name=document.getElementById("name").value.trim();
                let email=document.getElementById("email").value.trim();
                let result=document.getElementById("result");

                let xhr=new XMLHttpRequest();
                xhr.open("POST", "PostPhp.php",true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange=function()
                {
                    if(xhr.readyState==4 && xhr.status==200)
                    {
                        let jsObj= JSON.parse(xhr.responseText);
                        result.innerHTML=jsObj.name;
                        result.innerHTML+="<br>"+jsObj.email;
                        result.innerHTML+="<br>"+jsObj.greeting;
                    }
                }
                xhr.send("name="+name+"&email="+email);
            }
        </script>
    </body>
</html>
