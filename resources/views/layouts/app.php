
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Head Configuration -->
    <?php
    require_once $root . '/resources/views/layouts/head.php';
    ?>

</head>

<body>

    <!-- Navbar Component -->
    <?php
    require_once $root . '/resources/views/components/navbar.php';
    ?>

    <!-- Main Content -->
    <main>

        <?php
        require $contentView;
        ?>

    </main>

</body>
</html>
