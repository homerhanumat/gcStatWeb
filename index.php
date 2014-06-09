<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("includes/head.html"); ?>
        <title>GC Stats</title>
        
        <script type="text/javascript">
            
            var current = 0;
            var img = [
                "images/EmpRuleBetween68.png",
                "images/EmpRuleOutside68.png",
                "images/EmpRuleBetween95.png",
                "images/EmpRuleOutside95.png",
                "images/EmpRuleBetween99.png",
                "images/EmpRuleOutside99.png"
                ];
            
            function changeImage(){
                current = ((current +1) % 6);
                document.getElementById("EmpRuleIcon").src=img[current];
            };
        </script>
    </head>

    <body>
        <?php include("includes/navbarmain.html"); ?>

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>

                    <div class="jumbotron">
                        <img id="EmpRuleIcon" src="images/EmpRuleBetween68.png" style="float:  right; width: 35%;"
                            onclick="changeImage();"/>
                        <h1> GC Statistics</h1>
                        <p>Resources for Statistics at Georgetown College</p>
                    </div>
          

                    <?php include("includes/index_content.html"); ?>

                </div><!--/col-xs-12 -->

                <?php include("includes/sidebar.html"); ?>

            </div><!-- /row -->

            <hr>

            <?php include("includes/footer.html"); ?>



        </div><!--/.container-->



        <?php include("includes/script_loads.html"); ?>
    
    </body>
</html>
