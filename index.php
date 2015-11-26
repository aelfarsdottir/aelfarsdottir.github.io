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



<!DOCTYPE html>
<html>
  <body>
    Hello, Haiku!
    <p></p><img src="http://img11.deviantart.net/8f9c/i/2009/101/d/3/fuji_cherry_blossoms__by_zeroai.jpg" alt="Cherry Blossoms" height="42" width="42"></p>
  </body>
  <form>
  <input type="button" value="Generate!" onclick="window.location.href='http://aelfarsdottir.github.io/haiku.php'" />
  </form>
</html>