<!--
    download.php

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

<?php
function should_highlight($associated_file)
{
    if (basename($_SERVER["SCRIPT_FILENAME"]) == $associated_file)
        echo "current";
}

$ARCHIPEL_BASE_URL = "";
if (isset($ARCHIPEL_TUMBLR))
    $ARCHIPEL_BASE_URL = "http://archipelproject.org";
?>

<!-- BEGIN: NAVIGATION -->
<div class="navigation">
    <a href="<?php echo $ARCHIPEL_BASE_URL; ?>/index.php"><img alt="Logo" src="<?php echo $ARCHIPEL_BASE_URL; ?>/Images/logo.png" class="logo"></a>

    <div class="social-buttons slow-fade-out">
        <a id="button-flattr" href="http://flattr.com/thing/729509/Archipel-Official-WebSite" target="_blank">
            <img class="button-flattr" src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" />
        </a>
        <a class="coinbase-button" data-code="a941d0b9d6a83ef033c632613b3b21b7" data-button-style="custom_small" href="https://coinbase.com/checkouts/a941d0b9d6a83ef033c632613b3b21b7">Donate Bitcoins</a>
    </div>

    <div class="link-container">
        <a class="item <?php echo should_highlight("index.php"); ?>" href="<?php echo $ARCHIPEL_BASE_URL; ?>/index.php">Home</a>
        <a class="item <?php echo should_highlight("download.php"); ?>" href="<?php echo $ARCHIPEL_BASE_URL; ?>/download.php">Download</a>
        <a class="item <?php echo should_highlight("chat.php"); ?>" href="<?php echo $ARCHIPEL_BASE_URL; ?>/chat.php">Chat</a>
        <a class="item" href="http://github.com/ArchipelProject/Archipel">Source</a>
        <a class="item" href="http://archipelproject.tumblr.com">Blog</a>
        <a class="item" href="http://github.com/ArchipelProject/Archipel/wiki">Documentation</a>


    </div>
</div>

<div class="clear"></div>
<!-- END: NAVIGATION -->

