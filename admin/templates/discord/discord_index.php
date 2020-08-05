<?php
$this->show('discord/discord_header.php');

echo 'Click On Widget details for editing the widget or viewing the name and Discord ID.<hr />';

echo '<h4>Videos</h4><hr />';
    if(!$discord)
    {
     echo 'No widgets found';

    }
    else
    {

    foreach($discord as $chat)
    {
         echo '<iframe src="https://discordapp.com/widget?id='.$chat->discordid.'&theme='.$chat->theme.'"
         width="'.$chat->width.'" height="'.$chat->height.'" allowtransparency="'.$chat->transparency.'" frameborder="'.$chat->border.'"
         sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></p>';
         echo '<p><a href="'.SITE_URL.'/admin/index.php/Discord_admin/get_chat?id='.$chat->id.'">Widget Details</a></p><br />';
  }

    }

?>
