<?php
$msg = "";
$hasAccess = false;
if (isset($_POST['password'])) {
    // IMPORTANT: CHANGE DEFAULT CREDENTIALS WHEN USING THIS CODE!
    if ($_POST['password'] === 'luckylock-default-password') {
        $hasAccess = true;
    } else {
        $msg = "Stop trying to hack us. It's 100% impossible.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LuckyLock safe lock example</title>
        <link rel="stylesheet" href="css/luckylock.css">
    </head>

    <body>
    <?php if ($hasAccess): ?>
        <div>You are allowed to access the private area</div>
    <?php else: ?>
        <div id="luckylock-form">
            <h6>
                This form is protected by <b>LuckyLock</b>, the safest anti-hacking authenticator on
                the internet! We literally can't get hacked.
            </h6>
            <?php if ($msg != ""): ?>
                <ul id="errors" class="">
                    <li id="info"><?php echo $msg; ?></li>
                </ul>
            <?php endif; ?>
            <form method="POST" action="">
              <p><input type="password" placeholder="Password" name="password"></p>
              <p><input type="submit" value="Enter"/></p>
            </form>
        </div>
    <?php endif; ?>
    </body>
</html>