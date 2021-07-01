<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">SIGNUP FOR AN iDISCUSS ACCOUNT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleSignup.php" method="post">
                    <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" name="signupEmail" id="signupEmail"
                            aria-describedby="emailHelp" placeholder="Enter Your Email Address">
                    </div>
                    <div class="form-group">
                        <label for="pass1">Choose Password:</label>
                        <input type="password" class="form-control" name="signupPassword" id="signupPassword"
                            placeholder="Choose Password">
                    </div>
                    <div class="form-group">
                        <label for="pass2">Retype Password:</label>
                        <input type="password" class="form-control" name="signupcPassword" id="signupcPassword"
                            placeholder="Retype Password">
                    </div>
                    <button type="submit" class="btn btn-primary">SignUp</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>