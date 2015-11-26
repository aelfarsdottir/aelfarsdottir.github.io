<? php
  
  // configuration
  require("helpers.php");
  
  // necessary? GET vs. POST. won't we only be doing this via GET? 
  // clicking the button "Generate!" sends a GET request to the draft.php, which sends the generated lines as it renders the haiku.php page
  // // if user reached page via GET (as by clicking a link or via redirect)
  // if ($_SERVER["REQUEST_METHOD"] == "GET")
  // {
  //   // pass in variable background images?
  //   // render homepage
  render("home.html", ["title" => "Hello, Haiku"]);
  // }
  
?>