<?php
$dsn = 'mysql:dbname=sample_db;host=localshot;';
$user = 'hashimoto';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    

    $sql = "select * from user";
    $result = $dbn->query($sql);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lamp Sample Page</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="cibtainar-fluir">
            <div class="navbar-header">
                <a href="demo.html" class="navbar-brand">LAMP SANPLE</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotoron-fluid">
        <div class="containar">
            <h1 class="display-4">DB manager</h1>
            <p class="lead">
                LAMP感興を構築し、DBを構築するアプリケーションです。<br>
                デザインはBootstrapを使用しています。
            </p>
        </div>
    </div>

    <div class="containar">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active"  href="#tab1" data-togle="nav-tabs">Select</a>
            </li>
            <li class="nav-item">
                <a class="nave-link" href="#tab2" data-togle="nav-tabs">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab3" data-togle="tab">Update</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab4" data-togle="tab">Delet</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab-pane active">
                <table class="table table-hover mt-2">
                    <caption>show user table</caption>
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($result as $value) {?>
                            <tr>
                               <th><?php echo "$value[id]" ?></th>
                               <td><?php echo "$value[name]" ?></td>
                               <td><?php echo "$value[age]" ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </teble>
            </div>
            <div id="tab2" class="tab-pane">sample2</div>
            <div id="tab3" class="tab-pane">sample3</div>
            <div id="tab4" class="tab-pane">sample4</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>