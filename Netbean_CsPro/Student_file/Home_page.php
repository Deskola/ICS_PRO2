<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="HomePage.css">
    </head>
    <body>
        <div id="wrapper">
            <header id="main_head">
                <h1>Logo</h1>
            </header>
            <nav id="navigation">
                <div id="home">
                    <a href="">Home</a>                    
                </div>
                <div id="home">
                    <a href="">About Us</a>                     
                </div>
                <div id="home"> 
                    <a href="">Home</a> 
                </div>
                <div id="home">
                    <a href="">Home</a>                     
                </div>
            </nav>
            <div id="body_wrap">
                <section id="main_sector">
                    <article>
                        <form action="Home_p.php" method="POST">
                            <div id="form_head"><h2>Login Here</h2></div>
                            <br><br>
                            <div id="error_msg">
                            </div>
                            <input required autocomplete autofocus="false" type="text" name="username" id="u_name" placeholder="index number">
                            <br><br>
                            <input required autocomplete autofocus="false" type="password" name="password" id="pass" placeholder="Birth certificate number">
                            <br><br>
                            <input type="submit" name="login" id="logbtn" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="">forgot password</a>
                            <div id="error message">    
                              <?php
                              //echo "<style='color:red'>".$errormsg."</style>";
                              ?>  
                            </div>
                        </form>
                        
                    </article>
                </section>
            </div>
           
            <footer id="foot">
                <section id="copyright">
                    <h4>Copyright 2017 Strathmore.edu</h4>                    
                </section>
                
            </footer>
        </div>
    </body>
</html>
