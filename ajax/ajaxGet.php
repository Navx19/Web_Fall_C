<!doctype html>
<html>
    <head></head>
    <body> 
        <span id="result"></span>
        <script>

        function callAjax()
        {
            let result=document.getElementById("result");

            let xhr= new XMLHttpRequest();
            xhr.open("GET", "resultPhp.php",true);
            xhr.onreadystatechange=function()
            {
                if(xhr.readyState==4 && xhr.status==200)
                {
                    result.innerHTML=xhr.responseText;
                }
            }
            xhr.send();
        }

        setInterval(callAjax, 12000);
        </script>
    </body>
</html>