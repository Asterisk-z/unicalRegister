<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unical Faculty</title>

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
                        <p class="lead text-danger">This form is for collection of <span class="font-bolder">ONLY</span> faculty dues and faculty dues related charges information.</p>
                        <hr class="my-4">
                        <p>Faculty Dues</p>
                        <form method="POST" action="{{ route('storeFaculty') }}">
                             @csrf
                            <div class="extradues" id="extra">
                                <div class="form-group row">
                                    <label for="facultyName" class="col-sm-2 col-form-label">Faculty Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="facultyName"  name="name[]" placeholder="Name Of Faculty">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dueName" class="col-sm-2 col-form-label">Dues Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="dueName"  name="dueName[]" placeholder="Name Of Dues">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Cost" class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Cost" name="amount[]" placeholder="Cost of Dues">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bank" class="col-sm-2 col-form-label">Bank Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="bank" name="bankName[]" placeholder="Bank">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Accountname" class="col-sm-2 col-form-label">Account Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Accountname" name="accountName[]" placeholder="Account Name ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Accountnumber" class="col-sm-2 col-form-label">Account Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Accountnumber" name="accountNumber[]" placeholder="Account Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contactPersonName" class="col-sm-2 col-form-label">Contact Person Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="contactPersonName" name="contactPersonName[]" placeholder="Contact Person Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="contactPersonNumber" class="col-sm-2 col-form-label">Contact Person Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="contactPersonNumber" name="contactPersonNumber[]" placeholder="Contact Person Number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success  btn-sm" value="Submit">
                                    <a class="btn btn-primary btn-sm float-right" href="javascript:void()" role="button" id="add">Add more dues</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


            <footer class="footer mt-auto py-3 fixed-bottom bg-white">
                <div class="container ">
                    <span class="text-center">For Enquiries Call 08103539959, 09038509510</span>
                </div>
            </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
        <script>

            $(document).ready(function (e) {
                var i = 1

                var html =
                    '<div class="extradues" id="extra"><hr class="my-4"><a class="btn btn-danger btn-sm col-md-2 mb-4" href="javascript:void()" id="remove">Remove</a><div class="form-group row"><label for="facultyName" class="col-sm-2 col-form-label">Faculty Name</label><div class="col-sm-10"><input type="text" class="form-control" id="facultyName"  name="name[]" placeholder="Name Of Faculty"></div></div><div class="form-group row"><label for="dueName" class="col-sm-2 col-form-label">Dues Name</label><div class="col-sm-10"><input type="text" class="form-control" id="dueName"  name="dueName[]" placeholder="Name Of Dues"></div></div><div class="form-group row"><label for="Cost" class="col-sm-2 col-form-label">Amount</label><div class="col-sm-10"><input type="text" class="form-control" id="Cost" name="amount[]" placeholder="Cost of Dues"></div></div><div class="form-group row"><label for="bank" class="col-sm-2 col-form-label">Bank Name</label><div class="col-sm-10"><input type="text" class="form-control" id="bank" name="bankName[]" placeholder="Bank"></div></div><div class="form-group row"><label for="Accountname" class="col-sm-2 col-form-label">Account Name</label><div class="col-sm-10"><input type="text" class="form-control" id="Accountname" name="accountName[]" placeholder="Account Name "></div></div><div class="form-group row"><label for="Accountnumber" class="col-sm-2 col-form-label">Account Number</label><div class="col-sm-10"><input type="text" class="form-control" id="Accountnumber" name="accountNumber[]" placeholder="Account Number"></div></div><div class="form-group row"><label for="contactPersonName" class="col-sm-2 col-form-label">Contact Person Name</label><div class="col-sm-10"><input type="text" class="form-control" id="contactPersonName" name="contactPersonName[]" placeholder="Contact Person Name"></div></div><div class="form-group row"><label for="contactPersonNumber" class="col-sm-2 col-form-label">Contact Person Number</label><div class="col-sm-10"><input type="text" class="form-control" id="contactPersonNumber" name="contactPersonNumber[]" placeholder="Contact Person Number"></div></div></div>'

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
