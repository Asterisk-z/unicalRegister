<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
    <body>
        

        <div class="container">
            <div class="row">
                <div class="m-5">
                    <div class="jumbotron">
                        <h1 class="display-4">University Of Calabar Departmental And Faculty Dues Data Collection</h1>
                        <p class="lead">This is for faculty registeration alone.</p>
                        <hr class="my-4">
                        <p>Faculty Due.</p>
                        <form>
                            <div class="form-group row">
                                <label for="facultyName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="facultyName" placeholder="Name Of Faculty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Cost" class="col-sm-2 col-form-label">Cost</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Cost" placeholder="Cost Of Faculty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bank" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="bank" placeholder="Bank">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Accountname" class="col-sm-2 col-form-label">Account Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Accountname" placeholder="Account Name ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Accountnumber" class="col-sm-2 col-form-label">Account Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="Accountnumber" placeholder="Account Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success btn-lg float-right" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </row>
        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>