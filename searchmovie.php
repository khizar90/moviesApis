
<?php
$movie = $_POST["moviename"];

        $ch  = curl_init();
        $url = "https://www.omdbapi.com/?t=$movie&apikey=64a1f54f";
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($res);
        $result1 = $result->Response;
        if($result1 == "True"){
            echo "<img src='$result->Poster' width='200' height='200'>";
            echo "<br>";
            echo "<p>title : ";
            echo '<b>' .$result->Title . '</b><br>';
            echo "<p>year : ";
            echo '<b>' . $result->Year . '</b><br>';
            echo "<p>rated : ";
            echo '<b>' .$result->Rated . '</b><br>';
            echo "<p>released : ";
            echo '<b>' . $result->Released . '</b><br>';
            echo "<p>runtime : ";
            echo '<b>' .$result->Runtime . '</b><br>';
            echo "<p>genre : ";
            echo '<b>' .$result->Genre . '</b><br>';
            echo "<p>director : ";
            echo '<b>' .$result->Director . '</b><br>';
            echo "<p>writer : ";
            echo '<b>' .$result->Writer . '</b><br>';
            echo "<p>language : ";
            echo '<b>' .$result->Language . '</b><br>';
            echo "<p>country : ";
            echo '<b>' .$result->Country . '</b><br>';
        }
        else{
            echo "<p>Movie not found ";
        }

?>

