<?php

$this->show('discord/discord_header.php');
if(isset($discord))
{echo '<div id="error">All fields must be filled out</div>'; }
?>

<h4>Discord Widget</h4>
<span style="color:red;">Note: All fields must be filled in.</span>
<table width="80%">
  <form name="eventform" action="<?php echo SITE_URL; ?>/admin/index.php/Discord_admin" method="post">
  <table width="100%" class="tablesorter">
  <tr>
    <td valign="top"><strong>Name: </strong></td>
    <td>
      <input type="text" name="name"
      <?php
      if(isset($event))
      {
        echo 'value="'.$event['name'].'"';
      } ?>/>
    </td>
  </tr>
  <tr>
    <td align="top"><strong>Discord Server ID: </strong></td>
    <td>
      <input type="text" name="discordid"
      <?php if(isset($event))
      {
        echo 'value"'.$event['discordid'].'"';
      } ?>/>
      <p><span style="color:red;">Please enter the server id like: 239778210823274496.</span></p>
    </td>
  </tr>
  <tr>
    <td align="top"><strong>Theme: </strong></td>
    <td>
      <input type="text" name="theme"
      <?php
      if(isset($event))
      {
        echo 'value="'.$event['theme'].'"';
      } ?>/>
      <p><span style="color:red;">You can choose either dark or light.</span></p>
    </td>
  </tr>
  <tr>
    <td><strong>width:</strong></td>
    <td>
      <input type="text" name="width"
      <?php
      if(isset($event))
      {
          echo 'value="'.$event['width'].'"';
      }
       ?>/>
       <p><span style="color:red;">Default 350.</span></p>

    </td>
  </tr>
  <tr>
    <td width="3%" nowrap><strong>Height:</strong></td>
    <td><input  name="height"
        <?php
        if(isset($event))
        {
          echo 'value="'.$event['height'].'"';
        }
        ?>/>
        <p><span style="color:red;">Default 500.</span></p>
    </td>
  </tr>
  <tr>
    <td width="3%" nowrap><strong>Allow Transparency:</strong></td>
    <td><input  name="transparency"
        <?php
        if(isset($event))
        {
          echo 'value="'.$event['transparency'].'"';
        }
        ?>/>
        <p><span style="color:red;">Default True.</span></p>
    </td>
  </tr>
  <tr>
    <td><strong>border:</strong></td>
    <td><input name="border"
      <?php
        if(isset($event))
        {
          echo 'value="'.$event['border'].'"';
        }
       ?>/>
       <p><span style="color:red;">Default 0.</span></p>
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input type="hidden" name="action" value="<?php echo $action;?>" />
      <input type="hidden" name="id" value="<?php echo $discord->id;?>" />
      <input type="submit" name="submit" value="<?php echo $title;?>" />
    </td>
  </tr>
  </table>
  </form>
  </div>
