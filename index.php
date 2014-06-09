<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("includes/head.html"); ?>
        <title>GC Stats</title>
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
