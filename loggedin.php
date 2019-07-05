<!doctypehtml>
<html>
    <link href="style.css"  rel="stylesheet" type="text/css">
    <script src="java.js"></script>
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <body>
        <div class="container">
            <nav class="navbar">
                <div class="navbar-menu">
                    <div class=right>
                        <ul>
                            <li><a href="./tech.html">TECH</a></li>
                            <li><a href="./places.html">PLACES</a></li>
                            <li><a href="./home.html">HOME</a></li>
                        </ul>
                    </div>    
                    <div class="left">
                        <ul>
                            <li id="loginform" onclick="changeclass_login()">LOGIN</li>
                            <li id="signinform" onclick="changeclass_signin()">SIGNUP</li>
                        </ul>
                    </div>

                </div>
            </nav>
            
            <div class="mid">    
                <h1>LETS GET GOING...</h1>
                
                <div class="modalbox" id="loginmodal">
                    <fieldset>
                        <form  action="/loggedin.html" method="get">
                            <div class="imgcontainer">
                                
                                
                                <span onclick="document.getElementById('loginmodal').style.display='none'" class="close"> &times;</span>
                            </div></br>
                            <div class="data">
                                <label><b>USERNAME</b></label></br>
                                <input type="text" placeholder="ENTER  USERNAME" name="uname" required></br>
                                <label><b>PASSWORD</b></label></br>
                                <input type="password" placeholder="ENTER PASSWORD" name="password" required></br>
                                <button type="submit">LOGIN</button></br></br>
                                <label>
                                    <input type="checkbox" checked="unchecked" name="remember" style="margin-left:5px;">REMEMBER ME</input>
                                </label></br>
                                <span class="forgot" >forgot<a href="forgotpassword">PASSWORD?</a></span>
                            </div>
                        </form> 
                    </fieldset>    
                </div>  
                <div class="modalbox" id="signinmodal">
                    <fieldset>
                        <form  action="/loggedin.html" method="get">
                            <div class="imgcontainer">
                                
                                
                                <span onclick="document.getElementById('signinmodal').style.display='none'" class="close"> &times;</span>
                            </div></br>
                            <div class="data">
                                <label><b>NAME</b></label></br>
                                <input type="text" placeholder="ENTER  NAME" name="name" required></br>
                                <label><b>EMAIL</b></label></br>
                                <input type="text" placeholder="ENTER  EMAIL" name="email" required></br>
                                <label><b>USERNAME</b></label></br>
                                <input type="text" placeholder="ENTER  USERNAME" name="uname" required></br>
                                <label><b>PASSWORD</b></label></br>
                                <input type="password" placeholder="ENTER PASSWORD" name="password" required></br>
                                <button type="submit">LOGIN</button></br></br>
                                <label>
                                    <input type="checkbox" checked="unchecked" name="remember" style="margin-left:5px;">REMEMBER ME</input>
                                </label></br>
                                <span class="forgot" >forgot<a href="forgotpassword">PASSWORD?</a></span>
                            </div>
                        </form> 
                    </fieldset>    
                </div>  
            
            </div>
            
            <div class="footer">
                <footer>
                    <div>
                       <h2>NAME IS THE ANKUSH_PANDEY</h2>
                       <h2>TOTAL VISITORS</h2>
                       <p class="counter"></p>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a>MY FACEBOK</a></li>
                            <li><a>MY GIT</a></li>
                            <li><a>MY MEDIUM</a></li>
                        </ul>
                    </div>    
                </footer>
            </div>
        </div>
        
        
    </body>
    
    
</html