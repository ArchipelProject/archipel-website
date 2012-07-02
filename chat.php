<!DOCTYPE html>
<html>

<!--
    chat.php

    Copyright (C) 2010 Antoine Mercadal <antoine.mercadal@inframonde.eu>
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

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