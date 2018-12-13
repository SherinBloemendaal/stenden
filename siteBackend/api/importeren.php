
<?php
$con = mysqli_connect("localhost", 'stenden', 'Welkom10', 'stenden');
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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
@keyframes color-animation {
    0% {
        background: #ad1457;
    }
    50% {
        background: #6a1b9a;
    }
    100% {
        background: #0f9d58;
    }
}

body {
    animation: color-animation 10s infinite linear alternate;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: white;
    width: 100%;
}

</style>

<br/>
<br/>
<div class='container'>
<form method="post">
<select class='form-control' name="selector">
    <option value="1">verdrietig</option>
    <option value="2">depresief</option>
    <option value="3">boos</option>
    <option value="4">verward</option>
    <option value="5">angst</option>
    <option value="6">bedroefd</option>
    <option value="7">jaloers</option>
    <option value="8">eenzaam</option>
    <option value="9">schaamte</option>
</select><br>
<textarea style='width: 100%' cols="60" rows="8" name="textfield"></textarea><br>
<br>
<input style='width: 100%' type="submit" class='btn btn-primary' value="Zinnen importeren via het geavanceerde zinnen importeer systeem versie 1.0.0.0.0.0.0.0.0.0.1" name="submit">
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
        $sql = "INSERT INTO `zinnen` (Zin, emotionid) VALUES ('$textarea[$x]', '$select');";
        $result = mysqli_query($con, $sql);
    }
}
?>
</div>
