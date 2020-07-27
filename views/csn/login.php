<!DOCTYPE html>
<!--VIEW-->
<head>
<title>Login</title>
</head>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(function(){
        $("#login_btn").click(function(){
        if($("#user_id").val() == ""){
        alert("아이디를 입력하세요");
         return;
        }
        if($("#user_pass").val() == ""){
            alert("비밀번호를 입력하세요");
            return;
        }
        $("form").submit();
        });
    });
    </script>
<body>
    <form name="login_form" method="POST" action="/csn/login/login_check">
        <p><input type="text" name="user_id" id="user_id" placeholder="USER ID"></p>
        <p><input type="password" name="user_pass" id="user_pass" placeholder="USER PASSWORD"></p>
        <p><input type="button" id="login_btn" value="Login"></p>
    </form>
</body>
</html>