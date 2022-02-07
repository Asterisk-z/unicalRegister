<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unical Dues</title>

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
                        <h1 class="display-4">University Of Calabar Departmental And Faculty Dues Data Collection</h1>
                        <p class="lead"></p>
                        <hr class="my-4">
                        <p></p>

                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="card py-3">
                                   <table class="table table-responsive">
                                       <thead>
                                            <tr>
                                                <th>Faculty name</th>
                                                <th>Due name</th>
                                                <th>Bank</th>
                                                <th>Amount</th>
                                                <th>Account Name</th>
                                                <th>Account Number</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                            @foreach ($faculties as $faculty)
                                                {{-- @foreach ($faculty->name as $indexer) --}}
                                                    <tr>
                                                        <td>{{ $faculty->name }}</td>
                                                        <td>{{ $faculty->dueName }}</td>
                                                        <td>{{ $faculty->bankName }}</td>
                                                        <td>{{ $faculty->amount }}</td>
                                                        <td>{{ $faculty->accountName }}</td>
                                                        <td>{{ $faculty->accountNumber }}</td>
                                                        <td>{{ $faculty->contactPersonName }}</td>
                                                        <td>{{ $faculty->contactPersonNumber }}</td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            @endforeach
                                           
                                       </tbody>
                                   </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card py-3">
                                   <table class="table table-responsive">
                                       <thead>
                                            <tr>
                                                <th>Faculty name</th>
                                                <th>Due name</th>
                                                <th>Bank</th>
                                                <th>Amount</th>
                                                <th>Account Name</th>
                                                <th>Account Number</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                            @foreach ($departments as $department)
                                                {{-- @foreach ($department->dueName as $indexer) --}}
                                                    <tr>
                                                        <td>{{ $department->name }}</td>
                                                        <td>{{ $department->facultyName }}</td>
                                                        <td>{{ $department->dueName }}</td>
                                                        <td>{{ $department->bankName }}</td>
                                                        <td>{{ $department->amount }}</td>
                                                        <td>{{ $department->accountName }}</td>
                                                        <td>{{ $department->accountNumber }}</td>
                                                        <td>{{ $department->contactPersonName }}</td>
                                                        <td>{{ $department->contactPersonNumber }}</td>
                                                    </tr>
                                                {{-- @endforeach --}}
                                            @endforeach
                                           
                                       </tbody>
                                   </table>
                                </div>
                            </div>
                        </div>

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

    </body>
</html>
