<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><input type="submit">
</form>
<?php
var_dump(move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/" . $_FILES['file']['name']));
?>
</body>
</html>