<?php

if($location = substr(dirname($_SERVER['PHP_SELF']), 1))
	$dirlist = explode('/', $location);
else
	$dirlist = array();

$count = array_push($dirlist, basename($_SERVER['PHP_SELF']));

$address = 'http://'.$_SERVER['HTTP_HOST'];

echo '<a href="'.$address.'">Home</a>';

for($i = 0; $i < $count; $i++)
	echo '&nbsp;&raquo;&nbsp;<a href="'.($address .= '/'.$dirlist[$i]).'">'.$dirlist[$i].'</a>';
?>







      <div class="breadcrumb" vocab="https://schema.org/" typeof="BreadcrumbList">
  <div property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage"
        href="https://example.com/books">
      <span property="name"></span></a>
    <meta property="position" content="1">
  </div>
  ›
  <div property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage"
        href="https://example.com/books/sciencefiction">
      <span property="name"></span></a>
    <meta property="position" content="2">
  </div>
  ›
  <div property="itemListElement" typeof="ListItem">
    <a property="item" typeof="WebPage"
        href="https://example.com/books/sciencefiction/awardwinnders">
      <span property="name"></span></a>
    <meta property="position" content="3">
  </div>
</div>


(function(){
var metaElem = document.createElement('meta');
metaElem.setAttribute('property','');
metaElem.setAttribute('content','Nothing/');
$('head').append(metaElem);
})();




<?php 
  	
  	$location = substr(dirname($_SERVER['PHP_SELF']), 1)
  	$dirlist = explode('/', $location);
    $count = array_push($dirlist, basename($_SERVER['PHP_SELF']));
  	
  	 for($i=0;$i<sizeof($breadcrumb)-1;$i++){ 
  
       echo $breadcrumb[i];

  }
 
?>





function breadcrumb($var) {
  $breadcrumb = $var['breadcrumb'];

  if ($breadcrumb[1] == 'breadcrumb_id') {
    $links[0] = (('Home'), '<front>');
    $links[1] = ('your desired breadcrumb');
    set_breadcrumb($links);
  }
}