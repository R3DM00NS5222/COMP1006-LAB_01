
<!DOCTYPE html>
<html lang="en">
  <body class="grid">
    <header><?php include "./inc/header.php"; ?></header>
    <main class="grid-main">
        <div>
            <h1>Data on Relatives</h1>
        </div>
        <table class="table table-dark table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
            </tr>
            </thead>
            <tbody>
            <?php

            //connecting to the db
            $db = new PDO("mysql:host=172.31.22.43; dbname=Jerry200489053", 'Jerry200489053', 'EUDgE0u-dU');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //fetching the data
            $sql = "SELECT * FROM relatives";
            $cmd = $db->prepare($sql);

            //executing
            $cmd->execute();
            $details = $cmd->fetchAll();

            //displaying details in the table
            foreach ($details as $detail){
                echo '<tr>
                        <td>'.$detail['relativeId']. '</td>
                        <td>' . $detail['name'] . '</td>
                        <td>' . $detail['age'] . '</td> 
                        <td>' . $detail['occupation'] . '</td>
                    </tr> ';
            }

            //disconnect code block
            $db = null;
            ?>
            </tbody>
        </table>
        <!--Found out about Card view and it was too fun to pass up-->
        <div class="card-group">
            <div class="card text-white border-light bg-dark mb-3">
                <img src="img/family1.jpeg" class="card-img-top" alt="endo">
                <div class="card-body">
                        <h5 class="card-title"></h5>
                    <p class="card-text">“It didn’t matter how big our house was; it mattered that there was love in it.”
                        </p>
                    <p class="card-text"><small class="text-muted">— Peter Buffett</small></p>
                </div>
            </div>
            <div class="card text-white border-light bg-dark mb-3">
                <img src="img/family2.jpeg" class="card-img-top" alt="endo">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"> “Family means nobody gets left behind or forgotten.” </p>
                    <p class="card-text"><small class="text-muted">— David Ogden Stiers</small></p>
                </div>
            </div>
            <div class="card text-white border-light bg-dark mb-3">
                <img src="img/family3.jpeg" class="card-img-top" alt="endo">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"> “A family is a risky venture, because the greater the love, the greater the loss… That’s the trade-off. But I’ll take it all.”</p>
                    <p class="card-text"><small class="text-muted"> — Brad Pitt.</small></p>
                </div>
            </div>
            <div class="card text-white border-light bg-dark mb-3">
                <img src="img/family4.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"> “When everything goes to hell, the people who stand by you without flinching–they are your family.”</p>
                    <p class="card-text"><small class="text-muted"> – Jim Butcher</small></p>
                </div>
            </div>
        </div>
        <!-- the content for the footer will be added using PHP -->
    </main>
    <footer><?php include "./inc/footer.php"; ?></footer>
  </body>
</html>
