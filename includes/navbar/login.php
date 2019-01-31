<!-- Login  -->
<div class="ui small modal" id="loginModal">
    <div class="content">

        <!-- Login form -->
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui image header">
                    <div class="content">
                        Login to your account
                    </div>
                </h2>

                <!-- <form method="POST" action="includes/handlers/login-handler.php" class="ui large form"> -->
                <form class="ui large form" id="loginForm">
                    <div class="ui stacked secondary  segment">
                    
                        <!-- Username -->
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" id="loginUsername" placeholder="Username">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" id="loginPassword" placeholder="Password" required>
                            </div>
                        </div>
                            <Button class="ui fluid large teal submit button" type="submit" name="loginButton">Login</Button>
                    </div>


                </form>

                    <div  class="ui error message" id="loginError" style="display:none;"></div>
                <div class="ui message">
                    Don't have an account? <a href="#" id="noAccount">&nbsp;Sign up</a>
                </div>
                    </div>
        </div>
    </div>
</div>
