<?php 
	$pageTitle = "Portfolio"; /*$pageTitle is a variable declared and given the string value of "Portfolio" , which will be output as title in the browser tab on the specific page.
	*/
    include 'includes/header.php'; //header.php contains the html doctype to end head tag.
?>
    <body>
        <nav>
            <?php include 'includes/menu.php'; ?>
        <!-- This code includes the menu into the page. include take the specified filename and includes it 
        on the page.
        The include expression includes the file where the code(<?php// include 'includes/menu.php'; ?>) is placed in the code -->
        </nav>
        <div class="wrapper">
        <div id="content">
        <h1>Portfolio</h1>
        
        <h2>Video projects</h2>
        <h2>graphic work</h2>
        <h2>web work</h2>	
        
        
        
        </div>	
            <?php include 'includes/footer.php'; ?>
        
        </div><!--wrapper-->
    </body>
</html>