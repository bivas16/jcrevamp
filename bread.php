<div class="" style="text-align: center; margin-top: -60px" itemscope="" itemtype="https://schema.org/BreadcrumbList"> 

<?php

  
 for($i=0;$i<sizeof($breadcrumb)-1;$i++){ 

   echo $str = '<span class="breadcrumb-link-wrap" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="'.$breadcrumb[$i]['link'].'" itemprop="item" ><span itemprop="name"></span>'.$breadcrumb[$i]["name"].'</a> 
    </span> 
    <span aria-label="breadcrumb separator"> / </span>'; 

}   


?>

<span aria-label="breadcrumb separator"></span> <?php echo $headline ?> </div>

