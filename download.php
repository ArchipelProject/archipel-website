<!DOCTYPE html>
<html>

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

    <?php require("head.php"); ?>

    <body>


        <!-- BEGIN: MAIN -->
        <div class="main">


            <?php require("navigation.php"); ?>

            <!-- BEGIN: MAIN PAGE TITLE -->
            <div class="page_title">

                <p class="title">Download</p>
                <p class="subtitle">The future is a few clicks ahead</p>

            </div>
            <!-- END: MAIN PAGE TITLE -->


            <!-- BEGIN: CONTENT -->
            <div class="content">

                <!-- BEGIN: LINES -->
                <ul class="lines">


                <li>
                    <div class="separator"></div>
                    <p class="title" >Hey! Listen!</p>


                    <div class="right_box" style="height: 200px">
                        <a class="download_button" href="http://updates.archipelproject.org/archipel-gui-beta5.zip">
                            <p class="name">Download UI</p>
                            <p>Beta 5</p>
                        </a>
                        <a class="download_button" href="http://nightlies.archipelproject.org">
                            <p class="name">Download Nightlies</p>
                            <p>Beta 5</p>
                        </a>
                    </div>

                    <p class="subtitle">Prerequesites</p>
                    <p>Archipel is simple application, but it needs you to install some tools in order to have it working.
                    You will basically need a Linux machine with QEMU/KVM installed and a running <a href="http://www.process-one.net/en/ejabberd/">Ejabberd</a> (XMPP) server.
                    Don't worry it is kind of easy to install. You can follow instruction from our <a href="https://github.com/archipelproject/archipel/wiki">wiki</a></p>
                    <p>Archipel is composed of two main pieces. The UI, which is a pure JavaScript application and the Agent.
                    The Agent must be installed on all of your hypervisors. The UI can be installed in any web server you like.
                    You don't need any PHP, Ruby or SQL database. Simply put the files in any HTTP served directory.</p>

                    <p class="subtitle">Install Agent</p>
                    <p>Agent is pretty easy to install. To get the latest stable release, just run:</p>
                    <code># easy-install archipel-agent && archipel-initinstall</code>

                    <p>Later, to update when a new version will be released:</p>
                    <code># easy-install -U archipel-agent</code>

                    <p>That's a crash course. For a full installation documentation, please visit our <a href="https://github.com/archipelproject/archipel/wiki">wiki</a></p>

                    <p class="subtitle">Install UI</p>
                    <p>UI is just a bunch of JavaScript file. Just download the Archive, and put it into a HTTP served directorty. That is all!</p>

                    <div class="clear"></div>


                    <p class="title">ANSOS, The ready-to-use Archipel hypervisor</p>

                    <div class="right_box" style="height: 400px">
                        <a class="download_button" href="http://updates.archipelproject.org/ansos/archipel-node-image-2.3.0-0.1.fc16.git4c7e6bf.iso">
                            <p class="name">Download ANSOS</p>
                            <p>Fedora Based</p>
                        </a>
                        <a class="download_button" href="http://updates.archipelproject.org/ansos/archipel-node-image-2.3.0-0.1.el6.git4c7e6bf.iso">
                            <p class="name">Download ANSOS</p>
                            <p>CentOS Based</p>
                        </a>
                    </div>

                    <p class="subtitle">What is it?</p>

                    <p>Archipel Node Stateless OS (or ANSOS) is a full packaged Linux distribution containing everything you need to boot up new hypervisors from nothing. It allows to configure solid state storage device at startup to store persistent data. All the rest of the OS is a live CD.</p>

                    <p class="subtitle">Team work</p>

                    <p>ANSOS is based on the great work made by <a href="http://ovirt.org/">oVirt Node</a>. We worked together to add options in Node to include Archipel. The result is that ANSOS is not a separate project from oVirt Node. All changes have been merged into the oVirt Node source code. This ensure a continuous support of the Live OS by us, and by the community.</p>

                    <p class="subtitle">Build a virtualization platform in a minute</p>

                    <p>ANSOS is a live OS. This mean that you don't need to install anything on your physical machine. Burn the ISO on a CD, a USB Stick, or simply boot it from PXE. A lot of things are automated, and it basically only needs a shared storage device and a XMPP server.</p>

                    <p class="subtitle">Documentation</p>

                    <p>Documentation is available on our <a href="https://github.com/archipelproject/Archipel/wiki/ANSOS%3A-Archipel-Node-Stateless-OS">Github wiki</a>. As usual, if you have questions, fell free to join us on our IRC channel.</p>


                    <div class="clear"></div>
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