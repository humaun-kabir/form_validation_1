<?php
    $name = '';
    $city = '';
    $educationStr = '';
    $gender = '';
    $maleChecked = '';
    $femaleChecked = '';

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $city = $_POST['city'];

        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
                if($gender=='male'){
                    $maleChecked = "checked= 'checked'";
                }if($gender=='female'){
                    $femaleChecked = "checked= 'checked'";
                }
        }else{
            $gender='';
        }

        if(isset($_POST['education'])){
            $educationStr = $_POST['education'];
            $educationStr = implode(",",$educationStr);
        }


        echo "Name:- $name<br>";
        echo "Password:- $password<br>";
        echo "City:- $city <br>";
        echo "Gender:- $gender <br>";
        echo "Education:- $educationStr <br>";


        echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form action="" method="post">
        Name :- <input type="text" name="name" value="<?php echo $name ?>"><br><br>
        Password:- <input type="password" name="password"><br><br>
        Gender:- 
        Female <input type="radio" name="gender" value="female" <?php echo $femaleChecked ?>>
        Male <input type="radio" name="gender" value="male" <?php echo $femaleChecked ?>><br><br>
        City:- 
        <?php
            $cityArray = array('dhaka','rajshahi','chitagong');        
        ?>
        <select name="city" >
            <option>Select city</option>
                <?php 
                    foreach($cityArray as $list){ 
                        $isSelected="";
                        if($city==$list){
                            $isSelected = "selected";
                        }else{
                            echo "<option $isSelected>".$list."</option>";
                        }

                    }
                ?>
        </select>
        <br><br>
        Education:- 
        <?php
            $educationArr = array('Bsc','bba','msc','mba');

            foreach($educationArr as $list){
                echo "$list <input type='checkbox' name='education[]' value='$list'>";
            }

        ?>
        
        <br><br>
        <input type="submit">
    </form>
</body>
</html>