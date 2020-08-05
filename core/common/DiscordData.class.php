<?php

class DiscordData extends CodonData
{
    public static function get_chat()
    {
		return DB::get_results("SELECT * FROM ".TABLE_PREFIX."discord WHERE id = 1");

    }
 	public static function get_upcoming_chat()
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."discord
                ORDER BY id ASC";

        return DB::get_results($query);
    }
    public static function get_chats($id)
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."discord WHERE id='$id'";

        return DB::get_row($query);
    }

   public static function get_past_chat()
    {
        $query = "SELECT * FROM ".TABLE_PREFIX."discord
                ORDER BY id DESC";

        return DB::get_results($query);
    }

    public static function save_new_chat($name, $discordid, $theme, $width, $height, $transparency, $border)
    {
      $query = "INSERT IGNORE INTO ".TABLE_PREFIX."discord (name, discordid, theme, width, height, transparency, border)
              VALUES ('$name', '$discordid', '$theme', '$width', '$height', '$transparency', '$border')";

      DB::query($query);
    }
     public static function save_edit_chat($name, $discordid, $theme, $width, $height, $transparency, $border)
    {
        $query = "UPDATE ".TABLE_PREFIX."discord SET
         name='$name',
         discordid='$discordid',
         theme='$theme',
         width='$width',
         height='$height',
         transparency='$transparency',
         border='$border'
         WHERE id='$id'";

        DB::query($query);
    }
    public static function delete_chat($id)
    {
        $query = "DELETE FROM ".TABLE_PREFIX."discord
                    WHERE id='$id'";

        DB::query($query);
    }
       /////////////////////////////////
       // Do not remove this code!   //
       ///////////////////////////////
       public static function getVersion()
       {
        return DB::get_results("SELECT * FROM ".TABLE_PREFIX."strider WHERE id = 4");
       }
}
