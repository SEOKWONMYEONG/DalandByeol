<!DOCTYPE html>
<html lang="ko">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
        <link rel="stylesheet" href="divPosition.css">
        <title>LOG IN</title>
        <script  src="Jquery.js"></script>
        <script>

            function createData() {
                var sendData = {ID:$('#ID').val(), Password:$('#Password').val()};
               console.log(sendData);

                return sendData;
            }

           function AjaxCall() {


               $.ajax({
                   type:"POST",
                   url:"LoginForm.php",
                   data:createData(),
                   dataType : "json",

                   success:function(data){
                        console.table(data);

                        if(data['i'] == 1 ) {

                            var i = alert("Success Log in")
                            console.log(i);
                            location.href="Main.php";
                        }else{
                            if (data['i'] == 2){
                                alert("Wrong Password")
                            }else{
                                alert("Wrong ID or Password")
                            }
                        }
                     },

                   error: function(request,jqXHR, textStatus, errorThrown) {
                       console.log(jqXHR.responseText);
                       alert("Fail")
                       alert(request.status);
                   }
               })
           }
        </script>
    </head>
    <body>

    <div id = "divPosition">

        <div id="imgPosition" ><img src="logo.png" width="400" height="200"></div>

        <form name = "LoginFrom" action = "LoginFrom">
            <h1>Dal and Byeol</h1>
            <div><input type="text" name="ID" id="ID" placeholder="Please enter your ID"/></div>
            <div><input type="text"  name="Password" id="Password" placeholder="Please enter your Password"/></div>

        </form>

        <input type="button" value = "LOG IN" onclick="AjaxCall();"/>
    </div>


    </body>

</html>