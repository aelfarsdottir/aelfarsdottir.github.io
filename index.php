<!DOCTYPE html>
<html>
<div>
    <body>
        Hello, Haiku!
    <p></p><img src="http://img11.deviantart.net/8f9c/i/2009/101/d/3/fuji_cherry_blossoms__by_zeroai.jpg" alt="Cherry Blossoms" height="142" width="142"></p>
    </body>
    
    <!--we want to submit the generate button click via POST in order to call draft.php and generate a haiku-->
    <form action="draft.php" method="POST">
        <fieldset>
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    <span aria-hidden="true"></span>
                    Generate!
                </button>
            </div>
        </fieldset> 
    </form>
<div>

<!--<? php-->
  
  // configuration
<!--  require("helpers.php");-->
  
  // necessary? GET vs. POST. won't we only be doing this via GET? 
  // clicking the button "Generate!" sends a GET request to the draft.php, which sends the generated lines as it renders the haiku.php page
  // // if user reached page via GET (as by clicking a link or via redirect)
  // if ($_SERVER["REQUEST_METHOD"] == "GET")
  // {
  //   // pass in variable background images?
  //   // render homepage
<!--  render("home.html", ["title" => "Hello, Haiku"]);-->
  // }
  
<!--?>-->

</html>