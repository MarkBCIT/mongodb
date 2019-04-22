<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = [
    // 'index' => ['$gte' => 2],
    // 'name' => 'cry',

];
$options = [
    // 'projection' => ['_id' => 0],
    'sort' => ['index' => 1],

];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('todo.list', $query);

foreach ($cursor as $document) {
    print_r(' ' . $document->index . ' ' . $document->name . ' ' . '</br>');
}

?>
<!-- ================================================= -->
<html>



<head>

    <title>Todo list</title>
    <!-- <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="33684460113-m13qp21l4hbk28k1vl9b1fl043mmn7n1.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script> -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>
    <a href="add.php">
        add
    </a>
    <a href="update.php">
        update
    </a>
    <a href="del.php">
        del
    </a>
    <!-- <div class="welcome-page">
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <button onclick="signOut()" style=" height:39px;width:121px;">Sign out</button>
    </div>


    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            localStorage.setItem("u", " " + profile.getName());
        }
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                localStorage.removeItem("u");;
            });
        }
    </script> -->
</body>

</html>
