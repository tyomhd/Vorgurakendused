<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homework №8</title>
</head>

<body>

<?php
$bg_color="#fff";
if (isset($_POST['bg_col']) && $_POST['bg_col']!="") {
    $bg_color=htmlspecialchars($_POST['bg_col']);
}

?>
<style type="text/css">
    .result {
        width: 400px;
        height: 100px;
        background-color: <?php echo $bg_color; ?>;
        color: #fff;
        border-style: none;
        border-color: #fff;
        border-width: 0px;
        border-radius: 0px;
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
    <br>
</p>

<form method="post" action="form_style.php">

    <div class="textStyle">
        <textarea name="txtarea" cols="30" rows="3" ></textarea><br>

        <input type="color" name="bg_col" value= "<?php echo $bg_color; ?>"> Background color<br>

        <input type="color" name="txt_col" value= ""> Text color<br><br>

    </div>

    <div class="borderSettings">
        <input type="number" name="weight" value="" min="0" max="20" step="1"> Border width (0-20px)<br>

        <select name="border">
            <option value="select">select</option>
            <option value="solid">solid</option>
            <option value="dotted">dotted</option>
            <option value="dashed">dashed</option>
            <option value="outset">outset</option>
            <option value="double">double</option>
            <option value="inset">inset</option>
            <option value="groove">groove</option>
            <option value="ridge">ridge</option>

        </select> Border style<br>

        <input type="color" name="b_color" value=""> Border color<br>

        <input type="number" name="radius" value="" min="0" max="100" step="1"> Border radius (0-100px)<br><br>

    </div>
    <button type="submit">Show it</button>
</form>

</body>
</html>