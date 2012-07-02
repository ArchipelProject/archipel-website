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

<!-- BEGIN: BOXES -->
<ul class="boxes">
    <li class="box">
        <p class="title">Snapshots</p>
        <img alt="Snaphots" data-original="Images/more-snapshot.png" src="Images/loading.png" class="thumbnail lazy"/>
        <p>Archipel supports snapshoting. You can freeze the state of a virtual machine and go back to it at any time. See it as a checkpoint. Something goes mad? Just revert the VM to last good snapshot, and it will be like the evil never happens.</p>
        <div class="clear"></div>
    </li>

    <li class="box">
        <p class="title">Scheduler</p>
        <img alt="Scheduler" data-original="Images/more-scheduler.png" src="Images/loading.png"  class="thumbnail lazy"/>
        <p>Archipel embeds a scheduler. You can set ponctual action, like removing a virtual machine at a given date, or recurrent task, like snapshoting virtual machine every week, or giving special roles to a user for a definite period of time.</p>
        <div class="clear"></div>
    </li>

    <li class="box">
        <p class="title">Live Migration</p>
        <img alt="Migration" data-original="Images/more-migration.png" src="Images/loading.png"  class="thumbnail lazy"/>
        <p>Libvirt supports live migration and so Archipel. You can with a single click decide to change the hypervisor of a running virtual machine without having to stop it. People using the machine would never notice this change, this is absolutely transparent.</p>
        <div class="clear"></div>
    </li>
</ul>

<ul class="boxes">

    <li class="box">
        <p class="title">Libvirt Based</p>
        <img alt="Libvirt" data-original="Images/more-libvirt.png" src="Images/loading.png"  class="thumbnail lazy"/>
        <p>Archipel relies on Libvirt. You can reuse some existing platforms without having to install a full custom distribution. This is not a bare-metal solution. See it as a light weight agent installed on physical machines and a web interface you can install anywhere.</p>
        <div class="clear"></div>
    </li>

    <li class="box" id="box3">
        <p class="title">Robust</p>
        <img alt="XMPP" data-original="Images/more-xmpp.png" src="Images/loading.png"  class="thumbnail lazy"/>
        <p>You can use several XMPP servers as replica or as different access points. With the server-to-server feature, you can communicate with entities all over the world. This allows Archipel to be very robust. If a part of your datacenter fails, the rest remains fully operational. Moreover, Archipel is very scalable and makes easy to size your infrastructure in order to fit your needs.</p>
        <div class="clear"></div>
     </li>

    <li class="box">
        <p class="title">Open Source</p>
        <img alt="Open Source" data-original="Images/more-opensource.png" src="Images/loading.png"  class="thumbnail lazy"/>
        <p>And guess what? All this work is released under an open source licence (AGPL). So anybody can participate to improve Archipel's code, features and documentation. If you want to enroll, send us an email to explain what you may be able to bring to the project. We use a lot of Open Source software to build Archipel. It is perfectly normal that Archipel is itself open. For the sake of our users!</p>
        <div class="clear"></div>
     </li>
</ul>
<!-- END: BOXES -->