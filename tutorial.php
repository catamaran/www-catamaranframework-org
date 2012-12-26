<?php include_once "markdown/markdown.php"; ?>
<html>
<head>
    
    <link type="text/css" rel="stylesheet" href="css/site.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="css/top.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="css/wordpress.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="css/tutorial.css" media="screen, projection">
    
</head>
<body>
    
    <div id="outerContent">
        <div id="content">
            <?php include("include/top.php"); ?>
            <?php include("include/nav.php"); ?>
            
            <p>
                <?php
                    $tutorial = file_get_contents('tutorial.md');                    
                    echo Markdown($tutorial); 
                ?>

            </p>
            
            <!-- footer -->
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>                    
                
         </div> <!-- content -->
    </div> <!-- outerContent -->
    

</body>
</html>