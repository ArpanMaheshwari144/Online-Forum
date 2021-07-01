<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">LOGIN TO iDISCUSS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleLogin.php" method="post">
                    <div class="form-group">
                        <label for="loginEmail">Username:</label>
                        <input type="text" class="form-control" name="loginEmail" id="loginEmail"
                            aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="loginPass">Password:</label>
                        <input type="password" class="form-control" name="loginPass" id="loginPass"
                            placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">LogIn</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>