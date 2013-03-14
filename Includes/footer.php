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

<?php require_once("Includes/restrict.php");

$ARCHIPEL_BASE_URL = "";
if (isset($ARCHIPEL_TUMBLR))
    $ARCHIPEL_BASE_URL = "http://archipelproject.org";
?>

<!-- BEGIN: FOOTER -->
<div class="footer">
    <ul class="column">
        <li><p class="title">Navigation</p>
            <ul class="list">
                <li><a href="<?php echo $ARCHIPEL_BASE_URL; ?>/index.php">Home</a></li>
                <li><a href="<?php echo $ARCHIPEL_BASE_URL; ?>/chat.php">Chat</a></li>
                <li><a href="<?php echo $ARCHIPEL_BASE_URL; ?>/download.php">Download</a></li>
                <li><a href="http://archipelproject.tumblr.com">Blog</a></li>
            </ul>
        </li>

        <li><p class="title">Contact</p>
            <ul class="list">
                <li><a href="https://groups.google.com/group/archipelproject">Mailing list</a></li>
                <li><a href="irc://irc.freenode.net#archipel">IRC</a></li>
                <li><a href="https://github.com/archipelproject/archipel/issues">Issues</a></li>
                <li><a href="http://twitter.com/archipelproject">Twitter</a></li>
            </ul>
        </li>

        <li><p class="title">Developers</p>
            <ul class="list">
                <li><a href="https://github.com/ArchipelProject/Archipel">Source</a></li>
                <li><a href="http://nightlies.archipelproject.org/">Nighly builds</a></li>
                <li><a href="http://app.archipelproject.org/">Deployed app</a></li>
                <li><a href="http://www.ohloh.net/p/archipel">Ohloh</a></li>
            </ul>
        </li>

                <li><p class="title">Documentation</p>
            <ul class="list">
                <li><a href="https://github.com/archipelproject/archipel/wiki">Wiki</a></li>
                <li><a href="https://github.com/archipelproject/archipel/issues">Contribute</a></li>
                <li><a href="http://api.archipelproject.org/">APIs</a></li>
                <li><a href="http://build.archipelproject.org/">Continuous build</a></li>
            </ul>
        </li>

    </ul>

    <span class="copyright">Copyright &copy; 2010-2013 - Antoine Mercadal</span>
</div>
<!-- END: FOOTER -->

<!-- BEGIN: GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15803564-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- END: GOOGLE ANALYTICS -->
