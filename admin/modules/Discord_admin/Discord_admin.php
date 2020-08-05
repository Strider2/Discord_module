<?php


class Discord_admin extends CodonModule
{
    public function HTMLHead()
    {
        $this->set('sidebar', 'discord/sidebar_discord.php');
    }

    public function NavBar()
    {
        echo '<li><a href="'.SITE_URL.'/admin/index.php/Discord_admin">Discord</a></li>';
    }

    public function index()
    {
        if($this->post->action == 'save_new_chat')
        {
            $this->save_new_chat();
        }
        elseif($this->post->action == 'save_edit_chat')
        {
            $this->save_edit_chat();
        }
        else
        {
            $this->set('discord', DiscordData::get_chat());
			      $this->set('history', DiscordData::get_past_chat());
            $this->set('copyright', DiscordData::getVersion());
            $this->show('discord/discord_index.php');
        }
    }
    public function get_chat()
    {
        $id = $_GET[id];
        $this->set('discord', DiscordData::get_chats($id));
        $this->set('copyright', DiscordData::getVersion());
        $this->show('discord/discord_details.php');
    }
    public function new_widget()
    {
        $discord = DiscordData::get_chat();
        $this->set('copyright', DiscordData::getVersion());
        $this->set('title', 'Add Widget');
        $this->set('action', 'save_new_chat');
        $this->set('discord', $discord);


        $this->render('discord/discord_new_form.php');
        /*$this->set('codeshares', $codeshares);
        $this->show('codeshare/codeshare_new_form.php');*/
    }
    protected function save_new_chat()
    {
      $discord = array();

      $discord['name'] = DB::escape($this->post->name);
      $discord['discordid'] = DB::escape($this->post->discordid);
      $discord['theme'] = DB::escape($this->post->theme);
      $discord['width'] = DB::escape($this->post->width);
      $discord['height'] = DB::escape($this->post->height);
      $discord['transparency'] = DB::escape($this->post->transparency);
      $discord['border'] = DB::escape($this->post->border);



      /*foreach($discord as $test)
      {
          if(empty($test))
          {
              $this->set('spotify', $discord);
              $this->show('youtube/spotify_new_form.php');
              return;
          }
      }*/


      # Add it in
      DiscordData::save_new_chat($discord['name'], $discord['discordid'],
                            $discord['theme'],
                            $discord['width'],
                            $discord['height'],
                            $discord['transparency'],
                            $discord['border']);


      $this->set('message', 'The widget "' . $this->post->name .'" has been added');
      $this->render('core_success.php');
      $this->set('discord', DiscordData::get_chat());
      $this->show('discord/discord_index');
      LogData::addLog(Auth::$userinfo->pilotid, 'Added Discord Widget "' . $this->post->name . '"');
    }
    public function edit_widget() {
            $id = $_GET[id];
            $discord = array();
            $discord = DiscordData::get_chats($id);
            $this->set('copyright', DiscordData::getVersion());
            $this->set('discord', $discord);
            $this->show('discord/discord_edit_form.php');
    }
    protected function save_edit_chat()
    {
      $discord = array();

      $discord['name'] = DB::escape($this->post->name);
      $discord['discordid'] = DB::escape($this->post->discordid);
      $discord['theme'] = DB::escape($this->post->theme);
      $discord['width'] = DB::escape($this->post->width);
      $discord['height'] = DB::escape($this->post->height);
      $discord['transparency'] = DB::escape($this->post->transparency);
      $discord['border'] = DB::escape($this->post->border);


        $ret=DiscordData::save_edit_chat($discord['name'], $discord['discordid'],
                              $discord['theme'],
                              $discord['width'],
                              $discord['height'],
                              $discord['transparency'],
                              $discord['border']);

        if (DB::errno() != 0 && $ret == false) {
            $this->set('message',
                       'There was an error adding the Discord widget,
                       already exists DB error: ' . DB::error());
            $this->render('core_error.php');
            return;
        }

        $this->set('message', 'The Discord widget "' . $this->post->name .
                   '" has been added');
        $this->render('core_success.php');

        LogData::addLog(Auth::$userinfo->pilotid, 'Edited Discord Widget "' . $this->post->name . '"');

        $id = $discord['id'];
        $this->set('discord', DiscordData::get_chats($id));

        $this->show('discord/discord_details.php');
    }

    public function delete_widget()
    {
        $id = $_GET[id];
        DiscordData::delete_chat($id);
        LogData::addLog(Auth::$userinfo->pilotid, 'Deleted Discord Widget "' . $this->post->name . '"');
        $this->set('discord', DiscordData::get_upcoming_chat());
        $this->show('discord/discord_index.php');
    }
}
