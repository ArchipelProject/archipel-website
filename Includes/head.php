<!--
    header.php

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

<?php require_once("Includes/restrict.php"); ?>

<!-- BEGIN: HEAD -->
<?php
function get_page_title()
{
    $name = ucfirst(basename($_SERVER["SCRIPT_FILENAME"], ".php"));
    echo ($name != "Index") ? $name : "Home";
}
?>
<head>

    <title>Archipel - <?php get_page_title() ?></title>

    <!-- BEGIN: META -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- END: META -->

    <!-- BEGIN: CSS LOADING -->
    <link href="CSS/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 10]>
    <link href="CSS/style-ie.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!-- END: CSS LOADING -->

    <!-- BEGIN: JS LOADING -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="Scripts/main.js"></script>
    <script src="Scripts/lazyload.js"></script>
    <script src="Scripts/content-slider.js"></script>
    <!-- END: JS LOADING -->

    <!-- BEGIN: FONT LOADING -->
    <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <!-- END: FONT LOADING -->

    <!-- BEGIN: AUTO REFRESH -->
    <?php
    if (isset($ARCHIPEL_AUTO_REFRESH)) {
        echo '<meta http-equiv="refresh" content="60;URL=index.php">';
    }
    ?>
    <!-- END: AUTO REFRESH -->

    <!-- BEGIN: FLATTR -->
    <script type="text/javascript">
    /* <![CDATA[ */
        (function() {
            var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
            t.parentNode.insertBefore(s, t);
        })();
    /* ]]> */
    </script>
    <!-- END: FLATTR -->

    <!-- BEGIN: TWITTER -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <!-- END: TWITTER -->

</head>
<!-- END: HEAD -->
