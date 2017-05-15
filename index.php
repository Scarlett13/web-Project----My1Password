<?php
require_once('function/basic.php');
echoheader();
?>
<script type="text/javascript" src="js/crypto/aes.js"></script>
<script type="text/javascript" src="js/crypto/sha512.js"></script>
<script type="text/javascript" src="js/crypto/pbkdf2.js"></script>
<script type="text/javascript" src="js/crypto/password.js"></script>
<script type="text/javascript" src="js/setlocalstorage.js"></script>
<script type="text/javascript" src="js/index.js"></script>
    <div class="container theme-showcase">
        <div class="page-header">
            <h1>My 1Password</h1>
        </div>
<?php
if(isset($_GET["reason"])) {
    echo '<div id="message" class="alert alert-info"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><span id="messageText">'.htmlspecialchars($_GET['reason'], ENT_QUOTES, 'UTF-8').'</span></div>';
}
?>
        <h3>Please Sign in</h3>
        <form id="loginform" method="post">
            <div class="form-group">
                <label for="user" class="control-label sr-only">User Name: </label>
                <input type="text" class="form-control" placeholder="User Name" name="user" id="user" />
                <label for="pwd" class="control-label sr-only">Password: </label>
                <input type="password" autocomplete="off" class="form-control" placeholder="Password" name="pwd" id="pwd" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-success btn-block" id="chk"  value="Login" />
            </div>
        </form>
        <span id="nouser" class="errorhint collapse textred">Username password combination is unknown<br /></span>
        <span id="blockip" class="errorhint collapse textred">Your IP has been blocked due to malicious activity<br /></span>
        <span id="accountban" class="errorhint collapse textred">Your account has been protected due to continuous attack. Try again in <span id="banTime"></span> seconds<br /></span>
        <span id="othererror" class="errorhint collapse textred">Oops, our server run into some problems. Please refresh this page and try again.<br /></span>
        <hr />
        <button id="signup" class="btn btn-sm btn-default collapse" type="button">Sign Up</button>&nbsp; <button id="recover" class="btn btn-sm btn-warning" type="button">Password Recovery</button>
    <hr />
    </div>
<?php echofooter();?>
