<?php

if (isset($_GET['start']))
{
    if ($_GET['start'] == 1)
    {
        echo shell_exec("python /var/www/html/reddefilantropia.site/public_html/Botzilla/StartConversation.py");
    }
    else {
        echo -1;
    }
}
else
{
    if (isset($_GET['id']) &&  isset($_GET['message']) )
    {
        echo shell_exec('python /var/www/html/reddefilantropia.site/public_html/Botzilla/Conversation.py $_GET["id"] $_GET["message"]');
    }
    else
    {
        header("HTTP/1.1 400 Bad Request");
    }
}
?>
