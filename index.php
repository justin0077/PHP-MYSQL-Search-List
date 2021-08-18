<div class="container" style="width:50%; margin: 0 auto;">
    <form method="post">
        <input name="search" placeholder="Use specific words..." />
        <button type="submit" name="submit">Search</button>
    </form>
</div>

<?php 
    //Make connection with database
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "php_mysql_search";
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);

    //If database doesn't exist or no internetconnection you get error
    if($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    //Check if there is any input
    if(!empty($_POST)) {

        $keyWord = explode(" ", $_POST['search']);
        $query = "SELECT * FROM ";

        for($i = 1; $i < count($keyWord); $i++) {
            if(!empty($keyWord[$i])) {
                $query .= "";
            } 
        }
        $result = $db->query($query);

        if(empty($_POST['search'])) { 

            foreach()

        }
    } 
?>