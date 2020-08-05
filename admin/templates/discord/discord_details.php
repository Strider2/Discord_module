<?php

$this->show('discord/discord_header.php');



echo '<h4>Discord widget name: '.$discord->name.'</h4><hr />';

echo 'Discord Server ID: <b>'.$discord->discordid.'</b><br />';

echo '</b><hr />';
echo '<a href="'.SITE_URL.'/admin/index.php/Discord_admin/edit_widget?id='.$discord->id.'"><b>Edit Widget</b></a><br /><hr />';
echo '<a href="'.SITE_URL.'/admin/index.php/Discord_admin/delete_widget?id='.$discord->id.'"><span style="color:red;"><b>Delete widget</b></a> - This will delete the Discord Widget from the database permanently!</span><br /><hr />';
?>
