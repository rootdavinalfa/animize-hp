<?php
/*
Copyright 2019,Davin Alfarizky Putra Basudewa <dbasudewa@gmail.com> <moshi2_davin@dvnlabs.ml> <rootdavin@yahoo.co.jp>
Simple Banner Getter,from api.dvnlabs.ml/ with JSON parser
Required PHP7+

======MAPPING======
index.php => (CALL CLASS INVOKE jsonparser()) => jsonparser.php init internet access then get content from api.dvnlabs.ml
=> parsing JSON => wrap HTML => echoing
*/
class jsonparser
{
    public function __construct()
    {
    }
    public function jsonparse($url)
    {
        $html ="";
        //echo $url;
        ini_set("allow_url_fopen", 1);
        //  Initiate curl
        $ch = curl_init();
        // Will return the response, if false it print the response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Set the url
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // Execute
        $result=curl_exec($ch);
        //$json = file_get_contents($url);
        $obj = json_decode($result, true);
        $content = $obj['banner']?$obj['banner']:null;
        if (isset($content)) {
            //echo count($content);
            for ($i=0;$i<count($content);$i++) {
                //Get title
                $title = $content[$i]['banner_title'];
                //Get Image
                $img = $content[$i]['banner_image'];
                //Get url
                $url = $content[$i]['banner_url'];
                if ($i==0) {
                    $html = <<<ht
            <div onClick="document.location.href='https://$url'">
            <a href="https://$url"></a>
      <img class="d-block w-100" src="$img" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 style="background-color:rgba(0, 0, 0, 0.59);color:white;">$title</h5>
  </div>
    </div>
ht;
                } else {
                    $html = <<<ht
            <div onClick="document.location.href='https://$url'">
            <a href="https://$url"></a>
      <img class="d-block w-100" src="$img" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5 style="background-color:rgba(0, 0, 0, 0.59);color:white;">$title</h5>
  </div>
    </div>
ht;
                }
                //$html .= $html;
                echo $html;
            }
            //return $html;
        } 
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            echo $error_msg;
        }
        // Closing
    curl_close($ch);
    }
}
