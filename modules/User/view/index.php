<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>MVC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once 'header.php';
    ?>
    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->

    <!-- CSS -->
    <link href="<?php echo 'URL'; ?>www/css/style.css" rel="stylesheet">
</head>
<body>
<!-- logo -->
<div class="logo">
    MON LOGO
</div>

<!-- navigation -->
<div class="navigation">
    <a href="#">home</a>
    <a href="#">subpage</a>
    <a href="#">subpage 2</a>
    <a href="#">user</a>
</div>

<h1>Les utilisateurs connus</h1>

<table>
    <?php
    $model = array(0=>array( "idUser"=>  "1" ,"firstName"=> "guillaume", "lastName"=>"briot", "password"=>  "briot" ,"email"=> "guillaume@briot" ));
    $model = $this->getModel()->allUsers();
    var_dump($this->getModel()->allUsers());
    foreach ($model as $value) {
        echo "<tr><td>" . $value['firstName'] . "</td><td>" . $value['lastName'] . "</td><tr>";
    }
    ?>
</table>


<!-- jQuery, loaded in the recommended protocol-less way -->
<!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "<?php echo 'URL'; ?>";
</script>

<!-- our JavaScript -->
<script src="<?php echo 'URL'; ?>www/js/application.js"></script>
<?php
include_once 'footer.php';
?>
</body>
</html>