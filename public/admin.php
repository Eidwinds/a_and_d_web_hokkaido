<?php
$flag = 0;

$string = "";

if(isset($_POST['title']))
{
    $data = "";

    foreach (file($_POST['path']) as $line)
    {
        if($line == "		</table>\r\n")
        {
            $data .= "<tr><th>{$_POST['title']}</th></tr><tr><td>{$_POST['body']}</td></tr>\r\n";
        }
        $data .= $line;
    }

    file_put_contents($_POST['path'], $data);
}

if(isset($_POST['id']))
{
    $string = $_POST['id'] . ":" . md5($_POST['pass']);
}

foreach(file('data') as $user)
{
    if($user == $string)
    {
        $flag = 1;
    }
}
if($flag == 0)
{
    ?>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="" method="post">
        <input type="text" name="id"><input type="text" name="pass"><input type="submit">
    </form>
    </body>
    </html>
    <?php
}else{
    ?>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="" method="post">
        <input type="hidden" name="path" value="pages/topics">
        title:<input type="text" name="title"><br>
        body:<textarea name="body"></textarea><br>
        <input type="submit">
    </form>
    </body>
    </html>
<?php } ?>
