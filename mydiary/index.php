<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Diary</title>
</head>
<body>
    <h1>My Diary</h1>

    <h2>Create New Diary Entry</h2>
    <form action="?" method="post">
        <table border="1" cellpadding="4" cellspacing="0">
            <tr>
                <td>Title:</td>
                <td>
                    <input type="text" name="title" value="Today">
                </td>
            </tr>
            <tr>
                <td>Content:</td>
                <td>
                    <textarea name="body" cols="30" rows="10">Message</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="save">Save</button>
                    <button type="reset">Clear</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <br>

    <?php
    if ( isset($_POST['title']) ) {
        echo "FORM SUBMITTED<br>";
        echo "Title = " . $_POST['title'] . '<br>';
        echo "Content = " . $_POST['body'] . '<br>';

        $diaryEntry = fopen("entries/" . $_POST['title'] . ".txt", 'w');
        fwrite($diaryEntry, $_POST['body']);
        echo "File written.";
    }
    ?>


    <h2>LIST</h2>
    <ol>
        <?php
        $entries = scandir('entries/');
        for ($i = 0; $i < count($entries); $i++) {
            if ($entries[$i] != '.' && $entries[$i] != '..'){ ?>
                <li>
                    <a href="entries/<?= $entries[$i] ?>"><?= $entries[$i] ?></a>
                </li> <?php
            }
        } ?>
    </ol>
</body>
</html>