<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitteur</title>
    </head>
    <body>

        <?php
        include_once('Tweet.php');

        $tweets = new Tweet('@kadiatou', 'Hello, nature is beautiful', '10',  '5', '12-06-2017', 'avatar.jpg');
//                ['pseudo' => '@kadiatou',
//            'message' => 'Hello, nature is beautiful',
//            'retweets' => 10,
//            'likes' => 5, 
//            'date' => '12-06-2017'];

        foreach ($tweets as $key => $value) {
            echo "$key => $value";
        }
        ?>

    </body>
</html>