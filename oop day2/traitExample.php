<?php

trait mediaV2 {
    public function uploadMedia()
    {
        echo "upload media from mediav2 <br>";
    }
}

trait media {
    public function uploadMedia()
    {
        echo "upload media from media<br>";
    }
}


class user {
    use mediaV2,media{
        media::uploadMedia AS uploadMediaV1;
        mediaV2::uploadMedia insteadOf media;
    }

    public function register()
    {
        $this->uploadMedia();
    }
}

$user = new user;

$user->register();