
<?php

class Tweet{
    private $pseudo;
    private $message;
    private $date;
    private $retweets;
    private $likes;
    private $avatar;
    
    
    function __construct($pseudo, $message, $date, $retweets, $likes, $avatar) {
        $this->pseudo = $pseudo;
        $this->message = $message;
        $this->date = $date;
        $this->retweets = $retweets;
        $this->likes = $likes;
        $this->avatar = $avatar;
    }

}

?>