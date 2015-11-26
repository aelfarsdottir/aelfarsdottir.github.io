<? php
  
  // configuration
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
      require("../views/header.php");
      require("../views/{$view}");
      require("../views/footer.php");
      exit;
    }

    // else err
    else
    {
      trigger_error("Invalid view: {$view}", E_USER_ERROR);
    }
  }
  
  // if user reached page via GET (as by clicking a link or via redirect)
  if ($_SERVER["REQUEST_METHOD"] == "GET")
  {
    // pass in variable background images?
    // render homepage
    render("home.php", ["title" => "Hello, Haiku"]);    
  }
?>