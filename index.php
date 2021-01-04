<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="ADKST.org by k1ng z00f. A web-based Windows Server 'Sandbox' environnement.">
<meta name="author" content='Mathieu "k1ng z00f" Payette'>
<meta name="keywords" content="ADKST, ADKST.org, Mathieu Payette, k1ng, k1ng z00f, sandbox, programming, web development">
<!--[if lt IE 7]>
<p class="browsehappy">
You are using an <strong>outdated</strong> browser. 
Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->
<!--[if lt IE 9]>
<script src="./res/js/html5shiv.js">
</script>
<![endif]-->
<!-- first JS to load - abstract JS -->
<script src="./res/js/_console.js" ></script>
<link href="./res/css/bootstrap.css" rel="stylesheet">
<link href="./res/css/colorbox.css" rel="stylesheet">
<link href="./res/css/main.css" rel="stylesheet"> 
<link href="res/images/favicon.ico" rel="icon">
<?php 
echo "<title>K1ng's Sandbox - ADKST</title>\r\n"; 
echo "</head>\r\n"; 
echo "<body class='Body-MainContent'>\r\n";
echo "<div class='Div-MainContent' >\r\n";
echo "</div>\r\n";    

echo "\r\n\r\n<!-- START-HARCODED PHP TESTS -->\r\n";
echo "<footer class='container myFooter'>\r\n";
$jsBootbox = "$('#myModal').modal({                   
                'backdrop'  : 'static',
                'keyboard'  : true,
                'show'      : true                    
            });";
echo "<button type='button' class='btnbtn-sm btn-danger float-right' onclick=\"$jsBootbox\" >\r\n";
echo "<u><b>TEST</u></b>\r\n";
echo "<br><span style='font-size:7pt;'>Wut'll-do today ???<br></span>\r\n ¯\_(ツ)_/¯";
echo "</button>\r\n";
echo "</footer>\r\n";
echo "\r\n\r\n<!-- END-HARCODED PHP TESTS -->\r\n\r\n";
?> 


<!-- HIDDEN (DEFAULT) BOOTBOX DIV -->
<div id='myModal' class='modal fade'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h4>Hello world!!!</h4>
            </div>
            <div class='modal-body'>
                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                <p class='myModalContent'>Sum popup content for yo a**es!</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-primary'>OK</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-latest.min.js" ></script>
<script src="./res/js/jquery-ui.js" ></script> 
<script>
    window.jQuery || document.write('<script src="./res/js/jquery.js"><\/script>');
    var isMobile = false;
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) 
    { 
        isMobile = true;
        document.write('<script src="./res/js/jquery-mobile.js"><\/script>');
    }
</script>
<script src="./res/js/popper.js" ></script>
<script src="./res/js/bootstrap.js" ></script>
<script src="./res/js/colorbox.js" ></script>
<script src="./res/js/spin.js" ></script>
<script src="./res/js/bootbox.all.js" ></script>
<script src="./res/js/_main.js" ></script>
<script>
    $( document ).ready(function() {
        
//        var spinEle = document.getElementById('spinme');
//        var spinner = new Spinner();
//        spinner.spin( spinEle );
        
        // Ajax auto-load default view from controller
        var ajaxURL = "./app/control/main-control.php?ajax="; 
        
        $.ajax({
            url: ajaxURL, 
            beforeSend: function(){ }, 
            error: function(){_logErr.log("index.php Ajax get main view"); },
            success: function(result){
                $(".Div-MainContent").html(result);
            }, 
            complete: function(){
               $(".modal-a").colorbox( {inline:true, width:"50%"} );
            }
        });
    }); 
</script>


        
<!-- sometime later, probably inside your on load event callback -->
<script>
//    $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
//        $("#myModal a.btn").on("click", function(e) {
//            console.log("button pressed");   // just as an example...
//            $("#myModal").modal('hide');     // dismiss the dialog
//        });
//    });
//        
//    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
//        $("#myModal a.btn").off("click");
//    });
//            
//    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
//        $("#myModal").remove();
//    });
//            
//    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
//        "backdrop"  : "static",
//        "keyboard"  : true,
//        "show"      : true                     // ensure the modal is shown immediately
//    });
</script> 

<!-- 
Thanks for passing by. 

     ."".    ."",
     |  |   /  /
     |  |  /  /
     |  | /  /
     |  |/  ;-._
     }  ` _/  / ;
     |  /` ) /  /
     | /  /_/\_/\
     |/  /      | 
     (  ' \ '-  | 
      \    `.  /
       |      |
       |      |
      ==========

- k1ng z00f
-->
</body>
</html>