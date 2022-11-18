<div class="row">
    <div class="row">
        <h2 class="text-center" id="title">Account</h2>
        <p class="text-center">
            <small id="passwordHelpInline" class="text-muted"> Login if already have account OR Register Now .</small>
        </p>
    </div>
    <div class="row bg-white">
        <div class="col">
            <!-- login form -->
            <form role="form">
                <fieldset>
                    <p class="text-uppercase"> Login using your account: </p>

                    <div class="form-group m-2">
                        <input type="email" name="username" id="username" class="form-control input-lg" placeholder="username">
                    </div>
                    <div class="form-group m-2">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-md btn-primary" value="Sign In">
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="col">
            <!-- register form -->
            <form role="form" method="post" action="register.php">
                <fieldset>
                    <p class="text-uppercase pull-center"> Register.</p>
                    <div class="form-group m-2">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username">
                    </div>

                    <div class="form-group m-2">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                    </div>
                    <div class="form-group m-2">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group m-2">
                        <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Password2">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label m-2">
                            <input type="checkbox" class="form-check-input">
                            By Clicking register you're agree to our policy & terms
                        </label>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-lg btn-primary p-1" value="Register">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>