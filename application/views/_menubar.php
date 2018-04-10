<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="nav">
    {menudata}
    <li class="topMenu"><a href="{link}">{name}</a></li>
    {/menudata}
    <li class="dropdown">
      <a class="topMenu" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="/roles/actor/Guest">Guest</a></li>
                  <li><a href="/roles/actor/User">User</a></li>
                  <li><a href="/roles/actor/Admin">Admin</a></li>
      </ul>
    </li>   
</ul>
