<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="card" style="width:24rem;">
                    <div class="card-header" >
                        <h5 class="card-title">User Profile</h5>
                    </div>
                    <div class="card-body">

                        <button class="btn btn-info"><a href="{{ route('dashboard') }}">Back</a></button><br/>
                        <br/>
                        <table class="table table-dark table-striped-columns table-hover">
                            {{-- <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col"><input type="text" name="name" id="" value="Name"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col"><input type="text" name="name" id="" value="Email"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Age</th>
                                    <th scope="col"><input type="text" name="name" id="" value="Age"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Role</th>
                                    <th scope="col"><input type="text" name="name" id="" value="Role"></th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <th><input type="text" name="name" id="" value="{{ $user->name }}" class="form-control bg-secondary border-secondary text-light"></th>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <th><input type="text" name="name" id="" value="{{ $user->email }}" class="form-control bg-secondary border-secondary text-light"></th>
                                </tr>
                                <tr>
                                    <th scope="row">Age</th>
                                    <th><input type="text" name="name" id="" value="{{ $user->age }}" class="form-control bg-secondary border-secondary text-light"></th>
                                </tr>
                                <tr>
                                    <th scope="row">Role</th>
                                    <th><input type="text" name="name" id="" value="{{ Str::ucfirst($user->role) }}" class="form-control bg-secondary border-secondary text-light"></th>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
