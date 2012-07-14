<?php
$ARCHIPEL_TUMBLR = true;
require("Includes/precheck.php");
?>
<!DOCTYPE html>
<html>
    <?php require("Includes/head.php"); ?>

    <body>


        <!-- BEGIN: MAIN -->
        <div class="main">


            <?php require("Includes/navigation.php"); ?>

            <!-- BEGIN: MAIN PAGE TITLE -->
            <div class="page_title">

                <p class="title">Blog</p>
                <p class="subtitle">What's up?</p>

            </div>
            <!-- END: MAIN PAGE TITLE -->


            <!-- BEGIN: CONTENT -->
            <div class="content">

                <!-- BEGIN: LINES -->
                <ul class="lines">

                    {block:Posts}
                    <li>
                        <div class="blogpost-container">
                        {block:Text}

                        {block:Title}
                        <p class="title">{Title}</p>
                        {/block:Title}
                        {block:Date}
                        <p class="postdate">{Month}-{DayOfMonth}</p>
                        {/block:Date}


                        {Body}

                        {/block:Text}
                        </div>
                    </li>
                    {/block:Posts}

                </ul>
                <!-- END: LINES -->

                <div class="blog-nav">
                {block:PreviousPage}
                <a href="{PreviousPage}">&#171; Older</a> |
                {/block:PreviousPage}

                {block:NextPage}
                <a href="{NextPage}">Newer &#187;</a>
                {/block:NextPage}
                </div>

            </div>
            <!-- END: CONTENT -->

        </div>
        <!-- END: MAIN -->

        <?php require("Includes/footer.php"); ?>

    </body>

</html>