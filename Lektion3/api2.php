<?php
   if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] ==='toshiko' && $_POST['password']=== 'to'){
            $user_data = [
                $_POST['username'],
                $_POST['password']
            ];
            echo json_encode($user_data);
        }
        else{
            http_response_code(403);
        }
    }
    if(isset($_GET['messages'])){
        $messages =[
            'hej',
            'hooo',
            'huuuuuu',
            'heeeeee'
        ];
        echo json_encode(['messages' => $messages]);
    }
        

?>