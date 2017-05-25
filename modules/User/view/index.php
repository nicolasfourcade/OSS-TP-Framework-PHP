
    <?php


    include_once 'header.php';

    $model = $this->getModel()->allUsers();
    ?>
    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->

    <!-- CSS -->
</head>
<body>
<!-- logo -->
<div class="logo">
    MON LOGO
</div>

<div id="container">
    <div id="header"><h1>Les utilisateurs OSS</h1></div>
    <div id="wrapper">
        <div id="content">
            <table>
                <?php

                foreach ($model as $value) {
                    echo "<tr><td>" . $value['firstname'] . "</td><td>" . $value['lastname'] . "</td><tr>";
                }
                ?>
            </table>

    <div id="extra">
    </div>
    <div id="footer">
        <p>Footer</p>
    </div>
</div>
</body>




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