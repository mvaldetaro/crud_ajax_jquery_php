<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crud Ajax com jQuery usando PHP PDO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>

    <div class="container box">
        <h1>CRUD Ajax com jQuery usando PHP PDO</h1>
        <div class="row">
            <div class="col-md-12">
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-primary">Adicionar usuário</button>
            </div>
        </div>
        <br>
        <div class="table-responsive">
           <table id="user_data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="10%">Image</th>
                        <th width="35%">Nome</th>
                        <th width="35%">Sobrenome</th>
                        <th width="10%">Edit</th>
                        <th width="10%">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
           </table> 
        </div>
    </div>

    <div id="userModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="user_form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 class="modal-title">Adicionar usuário</h4>
                    </div>
                    <div class="modal-body">
                        <label for="first_name">Nome:</label>
                        <input type="text" name="first_name" id="first_name" class="form-control">
                        <br>
                        <label for="last_name">Sobrenome:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control">
                        <br>
                        <label for="user_image">Selecione a imagem do usuário:</label>
                        <input type="file" name="user_image" id="user_image">
                        <span id="user_upload_image"></span>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_id" id="user_id" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="action" class="btn btn-success" value="Add" /> </div>
                </div>    
            </form>
        </div>
    </div>
    
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>