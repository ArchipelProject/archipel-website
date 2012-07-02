<!DOCTYPE html>
<html>

    <?php require("head.php"); ?>

    <body>


        <!-- BEGIN: MAIN -->
        <div class="main">


            <?php require("navigation.php"); ?>

            <!-- BEGIN: MAIN PAGE TITLE -->
            <div class="page_title">

                <p class="title">Chat with us</p>
                <p class="subtitle">What can we do for you?</p>

            </div>
            <!-- END: MAIN PAGE TITLE -->


            <!-- BEGIN: CONTENT -->
            <div class="content">

                <!-- BEGIN: LINES -->
                <ul class="lines">

                    <li>
                        <div class="separator"></div>
                        <p class="title">IRC Chat</p>

                        <p>You can start a conversation with our comunity here. If you have any problem, or any question, do not hesitate!
                            We are friendly and we really want to help you!</p>
                    </li>

                    <li>
                        <iframe class="chat" src="http://webchat.freenode.net/?channels=archipel&uio=OT10cnVlJjExPTE4NQ6c"></iframe>
                    </li>
                </ul>
                <!-- END: LINES -->

            </div>
            <!-- END: CONTENT -->

        </div>
        <!-- END: MAIN -->

        <?php require("footer.php"); ?>

    </body>

</html>