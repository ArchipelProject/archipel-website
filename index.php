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

    <?php require("head.php"); ?>

    <body>


        <!-- BEGIN: MAIN -->
        <div class="main">


            <?php require("navigation.php"); ?>

            <?php require("slider.php"); ?>


            <!-- BEGIN: MAIN PAGE TITLE -->
            <div class="page_title">

                <?php require("slider-buttons.php"); ?>

                <p class="title">Archipel</p>
                <p class="subtitle">The future of virtual machine orchestration</p>

            </div>
            <!-- END: MAIN PAGE TITLE -->


            <!-- BEGIN: CONTENT -->
            <div class="content">


                <!-- BEGIN: LINES -->
                <ul class="lines">

                    <li>
                        <img data-original="Images/zoom-architecture.png" src="Images/loading.png" class="image-right thumb lazy" style="border:none">

                        <p class="subtitle" >In a nutshell</p>
                        <p>Archipel is a solution to manage and supervise virtual machines. No matter if you have a few locally on your
                        computer or thousands through data centers, Archipel is a central solution to manage them all. You can perform
                        all basic virtualization commands and many other things like live migration, VMCasts, packages, etc.</p>

                        <p class="subtitle" >Real time</p>
                        <p>Archipel uses XMPP for all communication. There is no webservice or custom protocol. You just need at
                        least one XMPP server — like eJabberd — to start playing with it. This allows Archipel to work completely
                        real time. You never have to refresh the user interface. You'll be notified as soon as something happens.
                        You can even use your favorite chat clients to command your infrastructure. Isn't it great to be able to
                        open a chat conversation with your virtual machine and say things like "How are you today?" or
                        "Hey, please reboot"?</p>

                    </li>

                    <li id="slider-target-creation">

                        <div class="separator" ></div>

                        <img data-original="Images/zoom-creation.png" src="Images/loading.png"  class="image-right thumb lazy"/>

                        <p class="title" >Virtual Machines on Demand</p>

                        <p class="subtitle">All your virtual machines in one place</p>
                        <p>All hypervisor's virtual machines are displayed into one place. You can see their current state, name
                        and JID. You can create or remove new ones with a single click. If you have dozens of VMs, you can simply
                        filter them.</p>

                        <p class="subtitle">Name generation</p>
                        <p>Lack of inspiration ? you don't know how to name these 10 virtual machines ? Let Archipel do it. It will
                        use one random poetic name elected from the list of all known Asteroids of the solar system.</p>

                        <p class="subtitle">Import</p>
                        <p>You already have some existing Libvirt domains you would like to manage with Archipel? No problem. Archipel will
                        detect existing virtual machines and with one click, you can manage them in a non-destructive way.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li id="slider-target-health">

                        <img data-original="Images/zoom-health.png" src="Images/loading.png" class="image-right thumb lazy"/>

                        <p class="title" >Health Care</p>

                        <p class="subtitle">Real time statistics</p>
                        <p>With Archipel you are aware of the the health of your hypervisors in real-time. Memory usage, CPU load,
                        CPU time, free disk space, load average or total amount swapped memory, everything is right here.</p>

                        <p class="subtitle">Logs</p>
                        <p>The Archipel Server's logs of physical machines are also available from the Health module.
                        If you see a usage peak, you can easily try to figure out why, using filtering.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li id="slider-target-vnc">

                        <img data-original="Images/zoom-vnc.png" src="Images/loading.png" class="image-right thumb lazy" style="border: none"/>

                        <p class="title" >Built-in VNC Client</p>

                        <p class="subtitle">VNC Anytime, Anywhere</p>
                        <p>Archipel includes a VNC client right from one of its module. You can control your virtual machine's screens.
                        If your virtual machine is a graphical terminal (Linux Xorg or Windows), you can use your mouse right from
                        your browser to do anything you want, just like you were in front of a real computer.</p>

                        <p class="subtitle">JavaScript Awesomeness</p>
                        <p>This VNC client uses only Javascript. You don't need any plugin to run it. Archipel was one of the first
                        project using noVNC as a screen viewer. It is now widely used. Try it, you'll see why.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li id="slider-target-definition">

                        <img data-original="Images/zoom-definition.png" src="Images/loading.png" class="image-right thumb lazy"/>

                        <p class="title" >The Retail Store</p>

                        <p class="subtitle">Pick Up</p>
                        <p>In this module, you manually build your virtual machine. Three CPUs, 2Go or RAM, one drives,
                        two network cards etc. you pick up what you need.</p>

                        <p class="subtitle">And plug</p>
                        <p>You can decide what type of media or device you plug in your virtual computer. An install DVD
                        of Linux or Windows, a virtual drive, a network card you plug in a defined hypervisor's network,
                        you decide which device you add.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li id="slider-target-vmcasts">

                        <img data-original="Images/zoom-vmcasts.png" src="Images/loading.png"  class="image-right thumb lazy"/>

                        <p class="title" id="title2">Here are your VMs, sir</p>

                        <p class="subtitle">Register to existing VMCasts</p>
                        <p>VMCast are some RSS feeds containing virtual machines. With Archipel, you can register to these VMCasts,
                        download and use already packaged appliances (including drives and configuration).</p>

                        <p class="subtitle">Package</p>
                        <p>You have made an awesome virtual machine you would like to save or share? That's not a problem. Each
                        hypervisor has its own VMCast feed and can package any of its virtual machines. These packages will then
                        be available for registred user of the VMCast.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li id="slider-target-controls">

                        <img data-original="Images/zoom-controls.png" src="Images/loading.png"  class="image-right thumb lazy"/>

                        <p class="title">Keep Control</p>

                        <p class="subtitle">Play, Pause, Stop</p>
                        <p>Archipel provides you with all controls you can imagine for a particular virtual machine. You can start,
                        stop, shutdown, unplug, pause, resume a virtual machine with a single click. Archipel is also smart enough
                        to take into account all external events. If you stop a VM with virsh, controls will be updated right
                        into Archipel.</p>

                        <p class="subtitle">Migration</p>
                        <p>Maintenance needed on a Hypervisor? No problem, just double click on any available hypervisor to migrate
                        your running VM to a new host without any service interruption.</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>


                    <li id="slider-target-permissions">

                        <img data-original="Images/zoom-permissions.png" src="Images/loading.png"  class="image-right thumb lazy"/>

                        <p class="title">Permissions</p>

                        <p class="subtitle">You, in! You, you're out!</p>
                        <p>Archipel has a very precise permissions management system. From just being allowed to see hypervisors
                        or virtual machines, to total control over them, you can decide what a user can do. You can also create
                        shared groups combining users, virtual machines and hypervisors to build data-center "zones".</p>

                        <p class="subtitle">Roles</p>
                        <p>You can create roles. A role is a template of permissions. You can even apply many roles to a user
                        in a row. A new role is published ona PubSub, and all adminstrators can use it for their data center "zones".</p>

                        <div class="clear"></div>

                        <div class="separator"><a class="top-scroller" title="Go to top"></a></div>
                    </li>

                    <li>
                        <p class="title">You Want More?</p>
                    </li>

                </ul>
                <!-- END: LINES -->


                <?php require("boxes.php"); ?>

            </div>
            <!-- END:  CONTENT -->


    </div>
    <!-- END: MAIN -->


    <?php require("footer.php"); ?>
</body>

</html>