<!--DO NOT MODIFY ANYTHING OTHER THAN INSIDES OF DIV CONTENTS-->
<html>
    <head>
        <title>
        ALS-MIS
        </title>
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('public/css/common.css') ?>" />
        <script src="<?php echo $view['assets']->getUrl('public/js/jq.js') ?>" type="text/javascript"></script>
    
        <script src="<?php echo $view['assets']->getUrl('public/js/jqueryui.js') ?>" type="text/javascript"></script></head>
    <body>
        <div id="wrapper">
            <div id="header">
                <?php include('header.php'); ?>
            </div>
            
            <div id="middle">
                <div id="loginContainer">
                    LOG IN<br/>
                    username: <input type="text" id="uname" /><br/>
                    password: <input type="password" id="upass" />
                    <br/>
                    <button onclick="login()">submit</button>
                </div>
            </div>
            
            <div id="footer">
                <?php include('footer.php'); ?>
            </div>
            
        </div>

    </body>
    <script >
            var left=(window.innerWidth-800)/2;
            if(left<0){
                left=0;
                
            }
            $('#wrapper').css('left',left);
            
            function login(){
                
                if($("#uname").val()=="" | $("#upass").val()==""){
                    alert("Please complete the form.");
                }else{
                    window.location="<?php echo $rootPage; ?>/logins/"+$("#uname").val()+"/"+$("#upass").val();
                }
               
            }
            
            var zxc='<?php if(isset($_SESSION['loginstatus'])){echo $_SESSION['loginstatus'];}else{echo 'shit';} ?>';
            if(zxc =="epicfail"){
                alert("Login denied.");
            }
            
    </script>
</html>
    
    