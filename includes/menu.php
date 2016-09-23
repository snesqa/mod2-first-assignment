<!--This is an include page and since it's purpose is to be included on other pages
and therefore does not need to have all the default html page structure code, such as doctype etc.
The smart things about include pages is that changes only need to be made in one place and is 'updated' 
or rather shown on all pages where the include page is included. That makes coding alot faster and efficient,
since the workload of making a change to a menu f.ex adding a new page link to the menu, has been minimized.
 -->
<?PHP  $current = basename($_SERVER['PHP_SELF']); ?>
<!-- 
$current referes to the current active link in the menu, showing which page you are located on.
basename() show filename with file extension(filename.php), which we use to identify which page we are currently visiting on the site. 
We can then use a condictional to ask which page we are on and give that page link a style to
make it differ from the others to easy identify or highlight current page visited.
 
The menu concists of an unordered list with list tags to contain the page links for the site 
inside the list tags. 
Every list tag contains an anchor tag with links to all the site pages, and inside is added
a php conditional statment checking which site is active currently, and highlights it with the 
style class="active". The style rules are defined in style.css located in the css folder on root level.

-->
<ul>
	<li><a href="index.php" <?php if($current == 'index.php'){ echo 'class="active"';} ?>>Home</a></li>
    <li><a href="me.php" <?php if($current == 'me.php'){ echo 'class="active"';} ?>>About</a></li>
    <li><a href="project.php" <?php if($current == 'project.php'){ echo 'class="active"';} ?>>Projects</a></li>
    <li><a href="contact.php" <?php if($current == 'contact.php'){ echo 'class="active"';} ?>>Contact</a></li>
</ul>