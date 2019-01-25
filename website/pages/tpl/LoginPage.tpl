{extends file='../../BaseTemplate.tpl'}
{block name=body}
    <section>
        <div class="container">
            <div class="row justify-content-md-center">
                        
                <div class="col-md-5 panel onecol">
                <h2>Log in</h2>
                <form action="#" method="POST">
                        <div class="container">
                            <div class="div_line">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" >
                            </div>
                            <div class="div_line">
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" >
                            </div>
                            <div class="div_line">
                                <button type="submit" id="login_button" >Login</button>
                            </div>
                                <div class="div_line">
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                        
                            <span class="psw"> <a href="#">Forgot password?</a></span>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </section>

{/block}
