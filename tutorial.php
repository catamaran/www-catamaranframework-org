<?php include_once "markdown/markdown.php"; ?>
<html>
<head>
    
    <link type="text/css" rel="stylesheet" href="css/site.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="css/top.css" media="screen, projection">
    <link type="text/css" rel="stylesheet" href="css/wordpress.css" media="screen, projection">
    
</head>
<body>
    
    <div id="outerContent">
        <div id="content">
            <?php include("include/top.php"); ?>
            <?php include("include/nav.php"); ?>
            
            <h1>Catamaran Tutorial</h1>
            <p>
                <?php
                    $tutorial = file_get_contents('tutorial.md');                    
                    echo Markdown($tutorial); 
                ?>


                Still working on this, check back soon!<br/><br/><br/>
                
                <img src="img/Under-Construction.gif"/>
                
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