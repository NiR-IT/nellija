<?php

$per_page = 5;

$query = "SELECT PaintingID FROM paintings";
$pages_query = mysqli_query($connection, $query);

//get total number of pages to be shown from total result.
$pages = ceil(mysqli_num_rows($pages_query) / $per_page);

//get current page from URL, if not present set it to 1
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

//calculate actual start page with respect to MySQL
$start = ($page - 1) * $per_page;

//if current page is first show first only, else reduce by 1 current page
$Prev_Page = ($page==1)?1:$page - 1;

//if current page is last show last only,  else add 1 to current page
$Next_Page = ($page>=$pages)?$page:$page + 1;

//if user is not in a first page - show first link
if($page!=1) $pagination.='<a class="btn btn-secondary" href="?page=1">First</a>';

//if user is not in a first page - show previous link
if($page!=1) $pagination.='<a class="btn btn-secondary" href="?page='.$Prev_Page.'">Previous</a>';

//we are going to show only 5 links in a pagination bar
$numberoflinks = 5;

//the the number of links to show on the right side of a current page
$upage = ceil(($page)/$numberoflinks)*$numberoflinks;

//the the number of links to show on the left side of a current page
$lpage = floor(($page)/$numberoflinks)*$numberoflinks;

//if number of links on the left equals to 0 we start from 1
$lpage = ($lpage==0)?1:$lpage;

//find the number of links to show on the right of current page and make sure it is less than total number of pages
$upage = ($lpage==$upage)?$upage+$numberoflinks:$upage;
if($upage>$pages)$upage=($pages-1);

//start building links from the left to the right of current page
for($x=$lpage; $x<=$upage; $x++) {
    //if current building link is current page we show link as a text, esle we show a link
    $pagination.=($x == $page) ? '<a class="btn btn-secondary"><strong><u>'.$x.'</u></strong></a>' : '<a class="btn btn-secondary" href="?page='.$x.'">'.$x.'</a>';
}

//if user is not on the last page we shot Last and Next links
if($page!=$pages) $pagination.= '<a class="btn btn-secondary" href="?page='.$Next_Page.'">Next</a>';
if($page!=$pages) $pagination.= '<a class="btn btn-secondary" href="?page='.$pages.'">Last ('.$pages.')</a>';

?>