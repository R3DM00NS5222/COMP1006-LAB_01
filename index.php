
<!DOCTYPE html>
<html lang="en">
  <body class="grid">
    <header></header>
    <main class="grid-main">
        <div>
            <h1>Football clubs</h1>
        </div>
        <h1>Data on Relatives</h1>
        <table border="1" width="100%">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Occupation</th>
            </tr>
            </thead>
            <tbody>
            <?php

            //connecting to the db
            $db = new PDO('mysql:host=172.31.22.43;dbname=dbname=Jerry200489053', 'Jerry200489053', 'EUDgE0u-dU');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //fetching the data
            $sql = "SELECT * FROM relatives";
            $cmd = $db->prepare($sql);

            //executing
            $cmd->execute();
            $details = $cmd->fetchAll();

            //displaying details in thetable
            foreach ($details as $detail){
                echo '<tr>
                        <td>' . $detail['name'] . '</td>
                        <td>' . $detail['age'] . '</td>
                        <td>' . $detail['occupation'] . '</td>
                    </tr>';
            }

            //disconnect code block
            $db = null;
            ?>
            </tbody>
        </table>


        <!-- the content for the footer will be added using JS -->
    </main>
    <footer id="footer"></footer>
  </body>
</html>
