<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title>Ajax Application</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">

                                    <label for="username">Username :</label>
                                    <input type="text" id="username" class="form-control">
                                    <span id="alert-username" class="text-danger" style="font-size:12px;"></span>
                                    <br>
                                    <label for="password">Password :</label>
                                    <input type="password" id="password" class="form-control">
                                    <span id="alert-password" class="text-danger" style="font-size:12px;"></span>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="send-request">Send request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'fetch.php' ?>
                </tbody>
            </table>

        </div>
    </body>

    <script>
        $(document).ready(function (){
            $("#send-request").click(function (){
                var username = $("#username").val();
                var password = $("#password").val();

                // Empty Field validate
                if(username == ''){
                    $("#username").css('border', '2px solid #df4759');
                    $("#alert-username").html("This field is required...")
                }

                if(password == ''){
                    $("#password").css('border', '2px solid #df4759');
                    $("#alert-password").html("This field is required...")
                }


                // Success Validate
                if(username != ''){
                    $("#username").css('border', '2px solid #42ba96');
                    $("#alert-username").html("")
                }

                if(password != ''){
                    if(password.length > 0 && password.length < 8){
                        $("#password").css('border', '2px solid #df4759');
                        $("#alert-password").html("At least 8 charachter")
                    }else{
                        $("#password").css('border', '2px solid #42ba96');
                        $("#alert-password").html("")
                    }
                    
                }
            })
        });
    </script>

</html>
