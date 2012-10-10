<?php

    $user = $vars['user'];
    if (!$user) $user = elgg_get_logged_in_user_entity();
    
    $complete = profilecomplete_calculate($user);
?>
<div class="profilecomplete">
    <p><a href="<?php echo $user->getUrl();?>"><?php echo elgg_echo('profilecomplete', array($complete)); ?></a></p>
</div>
