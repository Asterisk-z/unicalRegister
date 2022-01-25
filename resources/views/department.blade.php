<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Department Unical</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    </head>
    <body>
    @include('sweetalert::alert')
        <div class="container">
            <div class="row">
                <div class="m-5">
                    <div class="jumbotron">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-sm m-3">Back</a>
                        <h1 class="display-4">University Of Calabar Departmental And Faculty Dues Data Collection</h1>
                        <p class="lead">This is for department registeration alone.</p>
                        <hr class="my-4">
                        <p>Department Due.</p>
                        <form  method="POST" action="{{ route('storeDepartment') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="facultyName" class="col-sm-2 col-form-label">Faculty</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="facultyName"  name="facultyName" placeholder="Name Of Faculty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="department" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="department"  name="name" placeholder="Cost Of Faculty">
                                </div>
                            </div>


                            <div class="extradues border p-5" id="extra">
                                <div class="form-group row">
                                    <label for="NameofDue" class="col-sm-2 col-form-label">Name Of Due</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="NameofDue" name="dueName[]" placeholder="Name Of Due">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-2 col-form-label">Bank Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bank" name="bankName[]" placeholder="Bank Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="accountname" class="col-sm-2 col-form-label">Account Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="accountname" name="accountName[]" placeholder="Account Name ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Accountnumber" class="col-sm-2 col-form-label">Account Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Accountnumber" name="accountNumber[]" placeholder="Account Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success btn-lg" value="Submit">
                                    <a class="btn btn-primary btn-lg float-right" href="javascript:void()" role="button" id="add">Add more dues</a>
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

        <script>

            $(document).ready(function (e) {
                var i = 1

                var html =
                    ' <div class="extradues" id="extra"><hr class="my-4"><a class="btn btn-danger col-md-2 mb-4" href="javascript:void()" id="remove">Remove</a><div class="form-group row"><label for="NameofDue" class="col-sm-2 col-form-label">Name Of Due</label><div class="col-sm-10"><input type="text" class="form-control" id="NameofDue" name="dueName[]" placeholder="Name Of Due"></div></div><div class="form-group row"><label for="bank" class="col-sm-2 col-form-label">Bank Name</label><div class="col-sm-10"><input type="text" class="form-control" id="bank" name="bankName[]" placeholder="Bank Name"></div></div><div class="form-group row"><label for="accountname" class="col-sm-2 col-form-label">Account Name</label><div class="col-sm-10"><input type="text" class="form-control" id="accountname" name="accountName[]" placeholder="Account Name "></div></div><div class="form-group row"><label for="Accountnumber" class="col-sm-2 col-form-label">Account Name</label><div class="col-sm-10"><input type="text" class="form-control" id="Accountnumber" name="accountNumber[]" placeholder="Account Number"></div></div></div><div class="form-group row"><label for="amount" class="col-sm-2 col-form-label">Amount</label><div class="col-sm-10"><input type="text" class="form-control" id="amount" name="amount[]" placeholder="Amount"></div></div></div>'

                $("#add").on('click', function (e) {

                    $("#extra").append(html);

                });

                //Remove Row
                $("#extra").on('click', '#remove', function (e) {
                    
                    $(this).parent('div').remove();

                });

            });
        </script>
    </body>
</html>
