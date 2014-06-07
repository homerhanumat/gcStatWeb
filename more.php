<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("includes/head.html"); ?>
        <title>More</title>
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
                    <img id="imgDisp" src="images/EmpRuleBetween95.png" style="float:  right; width: 35%;"
                        onmouseover="this.src='images/EmpRuleOutside95.png';"
                        onmouseout="this.src='images/EmpRuleBetween95.png';">
                    <h1> GC Statistics</h1>
                    <p>Further Resources</p>
                </div>
          

                <?php include("includes/more_content.html"); ?>

                </div><!--/col-xs-12 -->

                <?php include("includes/sidebar.html"); ?>

            </div><!-- /row -->

            <hr>

            <?php include("includes/footer.html"); ?>



        </div><!--/.container-->



        <?php include("includes/script_loads.html"); ?>
    
    </body>
</html>
