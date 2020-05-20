<!DOCTYPE html>
<html>

<?php
    include_once($level.ADM."head.php");
?>

<body>
    
    <?php
        if($_isIndex==true){
            include($level.ADM."navbar.php");
            include($level.ADM."left.php");
            include($level.ADM."right_index.php");
        }
        if($_isLogin==true){
            include($level.ADM."login.php");
        }
        if($_isAdd==true){
            include($level.ADM."navbar.php");
            include($level.ADM."left.php");
            include($level.ADM."right_add.php");
        }
        if($_isWid==true){
            include($level.ADM."navbar.php");
            include($level.ADM."left.php");
            include($level.ADM."right_widgets.php");
        }
        if($_isMem==true){
            include($level.ADM."navbar.php");
            include($level.ADM."left.php");
            include($level.ADM."right_member.php");
        }
        if($_isList==true){
            include($level.ADM."navbar.php");
            include($level.ADM."left.php");
            include($level.ADM."rigth_lst-product.php");
        }
    ?>
    <?php
    include_once($level.ADM."script.php");
    ?>
</body>

</html>