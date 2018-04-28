<?php 
    include("database.php");
    include("function.php");
    if(isset($_POST["operation"])){
        if($_POST["operation"] == "Add"){
            $image = '';
            if($_FILES["user_image"]["name"] != '') {
                $image = upload_image();
            }
            $statement = $connection->prepare('
                INSERT INTO users (first_name, last_name, image)
                VALUES (:first_name, :last_name, :image)
            ');
            $result = $statement->execute(
                array(
                    ':first_name' => $_POST["first_name"],
                    ':last_name' => $_POST["last_name"],
                    ':image' => $image
                )
            );

            if (!empty($result)) {
                echo 'Dados cadastrados';
            }
        }
    }
?>