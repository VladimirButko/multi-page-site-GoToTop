<?php 
    $title = 'Обработчик формы';
    include("header.php"); 
?>
<?php 
    d( $_GET );
    d( $_POST );


    if(isset($_POST['fio'])){
        if( isset($_POST['fio']))

        $sql = "INSERT INTO `question`(`id`, `fio`, `email`, `phone`, `comment`) 
        VALUES (NULL,'{$_POST['fio']}','{$_POST['email']}','{$_POST['phone']}','{$_POST['comment']}')";

        echo $sql;

         $result = mysqli_query($db, $sql);

        if( $result ){
        echo "<div>Спасибо, {$_POST['fio']} за вашу заявку.</div>";
        }else{
        echo "Введенные вами данные не корректны";
        }
    }

?>
<?php include("footer.php"); ?>