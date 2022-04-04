<?php
  include 'header.php';
?>

    <?php
        $x = "grass";
        switch ($x) {
            case "grass":
                echo "The color is green";
            break;
            case "sky":
                echo "The color is blue";
            break;
            case "sun":
                echo "The color is bright";
            break;
            case "roses":
                echo "The color is red";
            break;
            default: 
                echo "Pick something else";
        }
    
    
    ?>
</body>
</html>