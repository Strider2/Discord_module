
<h3>Discord</h3>
<div class="block full">




<?php
if(!$discord)
    {
    	echo '<span style="color:red;">You have not added any Discord widgets yet.</span>';
    }
    else {?>



	<?php

    foreach($discord as $chat){


        ?>
        <div class="block-title">

        <h1><i class="hi hi-map-marker"></i> <?php echo $chat->name;?></h1>
          <iframe src="https://discordapp.com/widget?id=<?php echo $chat->discordid;?>&theme=<?php echo $chat->theme;?>"
          width="<?php echo $chat->width;?>" height="<?php echo $chat->height;?>" allowtransparency="<?php echo $chat->transparency;?>" frameborder="<?php echo $chat->border;?>"
          sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
        <br />
<?php
}
}
?>
<hr />
<?php
if(!$copyright){
echo '<span style="color:red;">Please put the strider table in your database as this is required.</span>';

}

else{
  foreach($copyright as $copy){
echo $copy->copyright .' '.date("Y").' '.$copy->name.' '.$copy->module.' '.$copy->version.'.';
}
}
 ?>
</div>

</div>
