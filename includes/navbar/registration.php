<!-- Sign up -->
<div class="ui small modal" id="registerModal">
    <div class="ui middle aligned center aligned grid">
        <div class="column">
            <h2 class="ui image header">
                <div class="content">
                    Create account
                </div>
            </h2>
            <form class="ui large form" id="registerForm">
                <div class="ui stacked secondary  segment">

                <div class="two fields">

                    <!-- First name -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" id="fname" placeholder="First name" required >
                        </div>
                    </div>

                    <!-- Last name -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" id="lname" placeholder="Last name" required>
                        </div>
                    </div>
                
                </div>

                <div class="two fields">
                
                    <!-- Username -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" id="username" placeholder="Username" required >
                        </div>
                    </div>


                    <!-- Date of birth -->
                    <div class="field">
                    
                        <div class="ui calendar" id="date">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="text" placeholder="Date of Birth" id="dob" required>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="two fields">
                    <!-- Mobile No. -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="tel" id="mobile" placeholder="Mobile Number" required >
                        </div>
                    </div>

                    <!-- Email address -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="envelope outline icon"></i>
                            <input type="email" id="email" placeholder="E-mail address" required>
                        </div>
                    </div>
                
                </div>



                    <div class="two fields">

                    <!-- Password -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" id="pwd" placeholder="Password" required>
                        </div>
                    </div>

                    <!-- Confirm password -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" id="pwd2" placeholder="Confirm password" required>
                        </div>
                    </div>
                    </div>

                    <div class="two fields">

                        <!-- Course Enrolled -->
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" id="current" placeholder="Current Course" required >
                            </div>
                        </div>
                    
                        <!-- Course -->
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" id="completed" placeholder="Course Completed" required>
                            </div>
                        </div>
                    </div>

                    <div class="two fields">
                    
                    <!--Institution-->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" id="institution" placeholder="Institution" required >
                        </div>
                    </div>

                    <!-- Field -->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <select class="ui dropdown" id="sector" required>

                                <option value="">Field of Study</option>
                                <option value="it">IT</option>
                                <option value="finance">Finance</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="law">Law</option>
                                <option value="science">Science</option>
                                <option value="engineering">Engineering</option>
                            </select>
                    </div><br><br>

                    <div class="field">
                         <div class="g-recaptcha" data-sitekey="6LeKFY4UAAAAAK_wO_RC5UvJpq2xIYi3kQ7unzkx"></div>
                    </div>

                    
                    </div>
                    <br><br>
                </div>
                    <button class="ui fluid large teal submit button green" type="submit" id="registerButton">Sign up</button>

            </form>
                <div class="ui error message" id="errorBox2" style="display:none;">
                </div>
                <div class="ui blue message" id="errorBox3" style="display:none;">
                </div>

            <div class="ui message">
                Already have an account? <a href="#" id="alreadyLogIn">&nbsp;Log in</a>
            </div>
        </div>
    </div>
</div>

