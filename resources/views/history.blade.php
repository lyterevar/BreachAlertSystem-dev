@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Past Notifications:') }}</div>
        
                            <!-- Bootstrap table -->
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Email affected:</th>
                                            <th scope="col">Breached website</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Leaked information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">-</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">-</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">-</th>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
@endsection
