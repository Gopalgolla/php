<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  ARRAYAS 
     $names = ['gopal','c','c++'];
    

        echo '<pre>';
        print_r($names);
        echo '</pre>';
        

        echo count($names);
        echo '<br/>';

        array_push($names,'java','python','devops','SAP');
        $names[]='azure';
        echo '<pre>';
        print_r($names);
        echo '</pre>';
        echo count($names);

       

     ?>
</body>
</html>