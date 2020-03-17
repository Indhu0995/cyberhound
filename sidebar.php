<?php
//Including DB Connection File
include "connect.php";
//displaying menu options based on user roles being user/ admin
if($getu['utype']=='User'){
?>
<li class=" nav-item"><a href="dashboard.php"><i class="la la-home"></i><span class="menu-title">Registered Devices</a></li>
<li class=" nav-item"><a href="new-device.php"><i class="la la-plus"></i><span class="menu-title">Add New Device</a></li>
<li class=" nav-item"><a href="settings.php"><i class="la la-gear"></i><span class="menu-title">Settings</span></a></li>
<li class=" nav-item"><a href="logout.php"><i class="la la-sign-out"></i><span class="menu-title">Logout</span></a></li>
<?php
}else{
?>
<li class=" nav-item"><a href="dashboard.php"><i class="la la-home"></i><span class="menu-title">Registered Devices</a></li>
<li class=" nav-item"><a href="dashboard2.php"><i class="la la-shield"></i><span class="menu-title">Unregistered Devices</a></li>
<li class=" nav-item"><a href="internal.php"><i class="la la-arrows-h"></i><span class="menu-title">Internal Database</a></li>
<li class=" nav-item"><a href="useraccess.php"><i class="la la-users"></i><span class="menu-title">User Access</a></li>
<li class=" nav-item"><a href="settings.php"><i class="la la-gear"></i><span class="menu-title">Settings</span></a></li>
<li class=" nav-item"><a href="logout.php"><i class="la la-sign-out"></i><span class="menu-title">Logout</span></a></li>
<?php
} ?>
