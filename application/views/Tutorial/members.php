<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Member</title>
    </head>
        <body>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                </thead>
                <tbody>
                    <?php foreach($members as $id => $name) :?>
                    <tr>
                    <td><?=$id?></td>    
                    <td><?=$name?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </body>
</html>