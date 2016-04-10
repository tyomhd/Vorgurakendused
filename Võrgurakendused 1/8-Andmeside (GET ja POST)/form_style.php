<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homework №8</title>
</head>

<body>

<?php
$text_area = "Enter your text here";
$bg_color = "#fff";
$txt_color = "#fff";
$brd_width = 0;
$brd_style = "solid";
$brd_color = "#fff";
$brd_radius = 0;
if (isset($_POST['txtarea']) && $_POST['txtarea']!="Enter your text here" && $_POST['txtarea']!="") {
    $text_area=htmlspecialchars($_POST['txtarea']);
}
if (isset($_POST['bg_col']) && $_POST['bg_col']!="") {
    $bg_color=htmlspecialchars($_POST['bg_col']);
}
if (isset($_POST['txt_col']) && $_POST['txt_col']!="") {
    $txt_color=htmlspecialchars($_POST['txt_col']);
}
if (isset($_POST['width']) && $_POST['width']!="") {
    $brd_width=htmlspecialchars($_POST['width']);
}
if (isset($_POST['style']) && $_POST['style']!="") {
    $brd_style=htmlspecialchars($_POST['style']);
}
if (isset($_POST['bcolor']) && $_POST['bcolor']!="") {
    $brd_color=htmlspecialchars($_POST['bcolor']);
}
if (isset($_POST['radius']) && $_POST['radius']!="") {
    $brd_radius=htmlspecialchars($_POST['radius']);
}

?>
<style type="text/css">
    .result {
        width: 400px;
        height: 100px;
        background-color: <?php echo $bg_color; ?>;
        color: <?php echo $txt_color; ?>;
        border-style: <?php echo $brd_style; ?>;
        border-color: <?php echo $brd_color; ?>;
        border-width: <?php echo $brd_width; ?>px;
        border-radius: <?php echo $brd_radius; ?>px;
        text-align: center;
        font-size: 32px;
        font-family: "Verdana";
        padding-left: 15px;
        padding-bottom: 15px;
        padding-right: 15px;
        padding-top: 15px;
        margin-left: 15px;
        margin-top: 15px;
    }
</style>

<p class="result">
    <?php if ($_POST['txtarea']!="Enter your text here")  echo $text_area; ?>
    <br>
</p>

<form method="post" action="form_style.php">

    <div class="textStyle">
        <textarea name="txtarea" cols="30" rows="3" ><?php echo $text_area; ?></textarea><br>

        <input type="color" name="bg_col" value= "<?php echo $bg_color; ?>"> Background color<br>

        <input type="color" name="txt_col" value= "<?php echo $txt_color; ?>"> Text color<br><br>

    </div>

    <div class="borderSettings">
        <input type="number" name="width" value="<?php echo $brd_width; ?>" min="0" max="20" step="1"> Border width (0-20px)<br>

        <select name="style">
            <option value="select"></option>
            <option value="solid">solid</option>
            <option value="dotted">dotted</option>
            <option value="dashed">dashed</option>
            <option value="outset">outset</option>
            <option value="double">double</option>
            <option value="inset">inset</option>
            <option value="groove">groove</option>
            <option value="ridge">ridge</option>

        </select> Border style<br>

        <input type="color" name="bcolor" value="<?php echo $brd_color; ?>"> Border color<br>

        <input type="number" name="radius" value="<?php echo $brd_radius; ?>" min="0" max="100" step="1"> Border radius (0-100px)<br><br>

    </div>
    <button type="submit">Show it</button>
</form>

</body>
</html>