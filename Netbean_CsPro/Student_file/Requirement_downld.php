<!DOCTYPE html>
<html>
    <head>
        
        <title></title>    
        <link rel="stylesheet" type="text/css" href="HomePage.css">
        <link rel="stylesheet" type="text/css" href="downloads.css">
        <script type="text/javascript" src="download.js"></script>
            
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
            <div class="body_wrap2">
                <div class="tabs">
                    <button onclick="openMe('results')" class="tab">Results</button>
                    <button onclick="openMe('instructions')" class="tab tab_two">Instructions</button>
                    <button onclick="openMe('enrolment')" class="tab">Enroll Now</button>
                </div>
                <div id="results" class="content">
                    <section id="std_res">
                        <form action="" method="">
                            <div id="res_head">
                                <h2>Student's Selected School</h2></div><br>
                                <div id="res_error"></div><br>
                            <label>Student Name :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="stdname" id="s_name"><br><br>
                            <label>Index Number :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="indexnum" id="index_num"><br><br>
                            <label>Primary School :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="prmskul" id="pry_skul"><br><br>
                            <label>Selected school :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="selskul" id="selc_skul"><br><br>
                            <input type="submit" name="download" id="req_dnd" value="Download requirements"><br>
                        </form> 
                    </section>                    
                </div>
                <div id="instructions" class="content content_tow">
                    <section id="instruc">
                        <article>
                            <h2>Download Requirements</h2><br>
                            <ol type="1">
                                <li>Student is expected to download <br>the requirements for the
                                selected school.</li>
                                <li>Student should ensure he/she has all the documents<br>
                                and the information stated before proceeding to enrollment (Tab)</li>
                                <li>In the enrollment section, student is expected to enter<br>
                                Valid information as used during Kenya Certificate of <br>
                                Primary Education(K.C.P.E) or WILL BE REJECTED.</li>
                                <li>Then the student should submit the information within the <br>
                                the stated period of of enrollment.</li>                                
                            </ol>
                        </article>
                    </section>
                    
                </div>
                <div id="enrolment" class="content">
                    <section id="enrol">
                        <form action="" method="">
                        <div id="enr_head">
                            <h2>PHP Code for name of school*possible</h2>
                        </div><br>
                            First Name :<input required autocomplete autofocus="false" type="text" name="firstname" id="f_name" placeholder="First Name">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Middle Name :<input required autocomplete autofocus="false" type="text" name="middlename" id="m_name" placeholder="Middle Name">
                            <br><br>
                            Sir Name :<input required autocomplete autofocus="false" type="text" name="sirname" id="s_name" placeholder="Sir Name">
                            
                        </form>
                    </section>
                    
                </div>              
                
            </div>
            <footer id="foot">
                <section id="copyright">
                    <h4>Copyright 2017 Strathmore.edu</h4>
                </section>
            </footer>
        </div>
    </body>
    
</html>

