<html>
    <head>
        <title>Rattings</title>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
         <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
         <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

        <script> 
        jQuery( document ).ready(function() {
        jQuery(".starrattings").on("mouseover",function(){
                var startt=jQuery(this).attr("id");
                var starid=startt.split("_"); 
                starid=starid[1];
                
                for(var i=1;i<=5;i++){
                    if(jQuery("#star_"+i).attr("class")=='fa fa-star starrattings'){
                        jQuery("#star_"+i).removeClass("fa fa-star starrattings");
                        jQuery("#star_"+i).addClass("fa fa-star-o starrattings");
                    }
                }
                   // alert(starid);
                for(var i=1;i<=starid;i++){
                        jQuery("#star_"+i).removeClass("fa fa-star-o starrattings");
                        jQuery("#star_"+i).addClass("fa fa-star starrattings");
                }
                jQuery("#review").val(starid);
            });
        });
        </script>  
    </head>
    <body>
        <input type="text" id="review" />
        <div class="cmt-lower">
            <i id="star_1" class="fa fa-star-o starrattings"></i>
            <i id="star_2" class="fa fa-star-o starrattings"></i>
            <i id="star_3" class="fa fa-star-o starrattings"></i>
            <i id="star_4" class="fa fa-star-o starrattings"></i>
            <i id="star_5" class="fa fa-star-o starrattings"></i>
        </div>
    </body>
</html> 
  