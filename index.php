<!DOCTYPE html>
<?php include 'db.php';
    $sql = "select * from TASKS";
    $rows = $db->query($sql);
?>
<html>
    <head>
        <title>Crud App with DB</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1 class="mx-auto">Todo List</h1>
                <button type="button" class="btn btn-success">Add task</button>
                <button type="button" class="btn btn-default pull-right">Print</button>
                <div class="col-md-10 col-md-offset-1">
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Task</th>                            
                        </thead>
                        <tbody>
                            <tr>
                            <?php while($row = $rows->fetch_assoc()): ?>
                                <?php var_dump($row); ?>
                            <?php endwhile; ?>
                                <th>1</th>
                                <td>Mark</td>
                                <td><a href="" class="btn btn-success" data-target="#myModal" data-toggle="modal">Edit</a></td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit task</h4>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Task name</label>
                                    <input type="text" required name="task">
                                </div>
                                <input type="submit" name="send" value="Send" class="btn btn-success">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>    

    </body>
</html>