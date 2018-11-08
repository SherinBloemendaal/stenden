<?php
$con = mysqli_connect("localhost", 'root', '', 'poespoes');
$wachtwoord = $_GET["pass"];
$melding = '';
if(isset($wachtwoord)){
    if($wachtwoord != 'welkom13'){
        header('Location: https://www.google.nl');
    }
}else{
    header('Location: https://www.google.nl');
}

?>
<form method="post">
<select name="selector">
    <option value="1">Verdrietig</option>
    <option value="2">depresief</option>
    <option value="3">boos</option>
    <option value="4">verward</option>
    <option value="5">angst</option>
    <option value="6">bedroefd</option>
    <option value="7">jaloers</option>
    <option value="8">eenzaam</option>
    <option value="9">schaamte</option>
</select><br>
<textarea cols="60" rows="8" name="textfield"></textarea><br>
<input type="submit" value="verzende" name="submit">
</form>
<img src="poes.jpg" width="400px">
<p><?php echo $melding; ?></p>
<?php
if(isset($_POST['submit'])){
    $textfield = $_POST['textfield'];
    $select = $_POST['selector'];
    $textarea = array();

    $lines = explode("\n", $textfield);
    if ( !empty($lines) ) {
        foreach ( $lines as $line ) {
            array_push($textarea, trim( $line ));
        }
    }

    for($x = 0; $x < count($textarea); $x++){
        $sql = "INSERT INTO `zinnen` (ID, Zin, emotionid) VALUES (null, '$textarea[$x]', '$select');";
        $result = mysqli_query($con, $sql);
    }
}
?>