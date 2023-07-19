<?php  
  if ( Request::search() ) {
   $searchTerms = Request::search();
 }
  else{
    $searchTerms = "";
  }

// The navbar below uses bootstrap's bg-transparent class for style.
// Note that the method on the form is "post". 
// Posted data becomes available to PHP  (see /classes/Request.php)
// Note that the placeholder text can be made to tell a story. 
echo <<<HTML

  <nav class="navbar bg-transparent">
    <div class="container-fluid">
      <form class="d-flex" method="post">
        <input name="q" class="form-control me-2" type="search" placeholder="Find a Movie" value="$searchTerms" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </nav>
HTML;

?>
