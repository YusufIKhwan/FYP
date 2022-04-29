<?php

/**********************************************************************************
* Help Center Live! � http://www.helpcenterlive.com 				  			  *
* by Digital Frontiers, UTO 							  						  *
***********************************************************************************
* Software Version: Help Center Live! v 2.1.7 					  				  *
* Software by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 		      *
* Copyright 2008 by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 	  *
* Support, News, Updates at: http://www.helpcenterlive.com 			  			  *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Digital Frontiers, UTO. 	  *
* 										  										  *
* This program is distributed in the hope that it is and will be useful, but 	  *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE. 						  					  *
* 										  										  *
* See the "license.txt" file for details of the Help Center Live! license. 	 	  *
* The latest version can always be found at http://www.helpcenterlive.com. 	 	  *
***********************************************************************************
* File Comments:																  *
* This file allows the sending of messages										  *
**********************************************************************************/

    include_once('../../class/include.php');
    $inc = new Includer();
    $inc->template();
    $inc->operator();
    $inc->chat();
    $inc->db();

    if (isset($_GET['admin'])) {
        $GLOBALS['template']->assign('admin', 'true');
    } else {
        $GLOBALS['template']->assign('admin', 'false');
    }

    if (isset($_GET['opchat'])) {
        $GLOBALS['template']->assign('opchat', 'true');
    } else {
        $GLOBALS['template']->assign('opchat', 'false');
    }

    $GLOBALS['chat']->assign(addslashes($_GET['chatid']));
    $GLOBALS['template']->assign('chatid', addslashes($_GET['chatid']));
    $GLOBALS['template']->assign('onload', ' onload="parent.window.Chat.focus_chat();"');

    // Display the output
    $GLOBALS['template']->display('chat_send.tpl');
    
    // do events that need to be done at the end of the file
    $inc->finished();
    
?>