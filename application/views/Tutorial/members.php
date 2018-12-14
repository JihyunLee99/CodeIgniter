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
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($members as $member) :?>
                    <tr>
                        <td><?=$member->id?></td>    
                        <td><?=$member->name?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </body>
</html>