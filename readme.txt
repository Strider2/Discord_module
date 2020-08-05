Discord 1.0

This module will let you place Discord server widget on your site. 

If you have installed my codeshare module all you have to do is import the update_strider.sql file

If not, please import the phpvms_strider and edit the DiscordData.class.php file on line 64 and change the 4 to a 1.


To use this, you will need to get the Discord Server ID by going to your server going to server settings, then going to Widget. There you will find a few items, you need the Server ID click on the copy button, and paste it into the correct field in the add Widget form

Please use:
<?php $discord = DiscordData::get_chat();
if(!discord)
{
  echo '<span style="color:red;">No Discord Widget added</span>';
}
else {
  foreach($discord as $chat)
  {
    echo   '<iframe src="https://discordapp.com/widget?id='.$chat->discordid.'&theme='.$chat->theme.'"
      width="'.$chat->width.'" height="'.$chat->height.'" allowtransparency="'.$chat->transparency.'" frameborder="'.$chat->border.'"
      sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>';
  }
}
  ?>
That code for it to show on a page of your choice.


Released under the following license:
Creative Commons Attribution-Noncommercial-Share Alike 3.0 Unported License