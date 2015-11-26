<?php

/**
 * Renders view, passing in values.
*/
function render($view, $values = [])
{
    // if view exists, render it
    if (file_exists("../views/{$view}"))
    {
      // extract variables into local scope
      extract($values);

      // render view (between header and footer)
      require("../views/header.html");
      require("../views/{$view}");
      require("../views/footer.html");
      exit;
    }

    // else err
    else
    {
      trigger_error("Invalid view: {$view}", E_USER_ERROR);
    }
}

?>