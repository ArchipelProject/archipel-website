<?php  define("ARCHIPEL", 1);
    if (!file_exists("maintenance-mode"))
        header('Location: index.php');
?>
<!DOCTYPE html>

<html>

<!--
    index.php

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

    <? $ARCHIPEL_AUTO_REFRESH = true; ?>
    <?php require("Includes/head.php"); ?>

    <body>

        <!-- BEGIN: MAIN -->
        <div class="main">

            <!-- BEGIN: MAIN PAGE TITLE -->
            <div class="page_title">


            </div>
            <!-- END: MAIN PAGE TITLE -->


            <!-- BEGIN: CONTENT -->
            <div class="content">
            <img alt="Logo" src="Images/logo.png" class="image-full thumb" style="border: none; width: 250px"/>


                <p class="title">Website is under maintenance</p>
                <p class="subtitle">We are busy updating the site for you.</p>

                <p class="offline-title">This page will disapear automatically when all operation will be complete. You can have
                a look at our <a href="http://archipelproject.tumblr.com">blog</a>, maybe we are explaining what's going on.</p>
                <p>See you very soon!</p>
            </div>
            <!-- END:  CONTENT -->


    </div>
    <!-- END: MAIN -->


</body>

</html>
