<?php


$this->show('discord/discord_header.php');

?>


<h4>Edit Widget</h4>
<hr />
<form name="eventform" action="<?php echo SITE_URL; ?>/admin/index.php/Discord_admin" method="post" >
<table width="80%">

            <tr>
                <td>Name</td>
                <td>
                  <input type="text" name="name"
                  <?php echo 'value="'.$discord->name.'"';?>/></td>

            </tr>
            <tr>
                <td>Discord Server ID</td>
                <td>
                  <input type="text" name="discordid"
                  <?php echo 'value="'.$discord->discordid.'"';?>/></td>

            </tr>
            <tr>
                <td>Theme</td>
                <td>
                  <input type="text" name="theme"
                  <?php echo 'value="'.$discord->theme.'"';?>/></td>

            </tr>
            <tr>
                <td>Width</td>
                <td><input type="text"  name="width"
                           <?php echo 'value="'.$discord->width.'"'; ?>
                           /></td>
            </tr>
            <tr>
                <td>Height</td>
                <td><input type="text" name="height"
                            <?php

                                  echo 'value="'.$discord->height.'"';
                                ?>/></td>
                              </tr>
                              <tr>
                                  <td>Allow Transparency</td>
                                  <td><input type="text" name="transparency"
                                              <?php

                                                    echo 'value="'.$discord->transparency.'"';
                                                  ?>/></td>
                                                </tr>
            <tr>
                <td>border</td>
                <td><input type="text" name="border"
                           <?php echo 'value="'.$discord->border.'"'; ?>
                          /></td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="hidden" name="id" value="<?php echo $discord->id; ?>" />
                    <input type="hidden" name="action" value="save_edit_chat" />
                    <input type="submit" value="Edit Discord Widget"></td>
            </tr>

    </table>     </form>
