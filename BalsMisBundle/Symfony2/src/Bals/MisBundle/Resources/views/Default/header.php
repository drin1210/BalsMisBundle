<div style="position:absolute;left:130px;top:35px;">
    Alternative Learning System <br/> <font style="color:#0065d7;">Management Information System</font>
</div>
<?php if(isset($_SESSION['trololol'])){ ?>
<div style="position: absolute;top:5px;right: 5px;cursor: pointer;" onclick="logout()">
    Sign Out
</div>
<?php } ?>
<script>
    function logout(){
        window.location="<?php echo $rootPage; ?>/logout";
    }
</script>