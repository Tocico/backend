<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<script>
  const GetUser = (username) => new Promise((reject, resolve) => {
    // Do something
    if (user) {
        resolve(user);
    } else {
        reject(new Error('User not found'));
    }
});

GetUser('bill')
    .then(user => { console.log("Hitta!") })
    .catch(err => { /* Handle the error */ });

</script>
    
</body>
</html>