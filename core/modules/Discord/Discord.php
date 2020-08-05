<?php

class Discord extends CodonModule
{
	public function index()
	{
		$this->set('copyright', DiscordData::getVersion());
		$this->set('discord', DiscordData::get_chat());
		$this->render('discord/Discord.php');
	}
	public function copyright()
	{
		$this->set('copyright', DiscordData::getVersion());
		$this->render('discord/footer.php');
	}
}
