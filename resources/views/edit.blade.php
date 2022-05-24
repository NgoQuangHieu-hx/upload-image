<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            font-family: sans-serif;
        }

        #avatar {
            height: 200px;
            width: 200px;
        }

        
    </style>
</head>

<body>
    <div class="container w-100 pt-5">
        <div class="row">
            <div class="col">
                <h2>Edit Profile</h2>
                <div>
                    <img src="https://znews-photo.zingcdn.me/w660/Uploaded/aeixrdbkxq/2021_02_22/a5.jpg" class="rounded-circle" alt="" id="avatar">
                </div>
                <span class="pl-4">Upload your photo ...</span>
                <div>
                    <input type="file">
                </div>
            </div>
            <div class="col">
                <form action="">
                    <table>
                        <th>
                            <H3>Personal Info</H3>
                        </th>
                        <tr>
                            <td>
                                <b>
                                    First Name:
                                </b>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="First name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Last Name:
                                </b>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="Last name">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Staff ID:
                                </b>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="Staff ID">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Email:
                                </b>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="Email">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Department:
                                </b>
                            </td>
                            <td>
                                <input class="form-control" type="text" placeholder="Department">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>
                                    Position:
                                </b>
                            </td>
                            <td>
                                {{-- <input class="form-control" type="text" placeholder="Position"> --}}
                                <select name="position" id="position" class="form-control">
                                    <option value="Manager">Manager</option>
                                    <option value="Manager_2">Manager_2</option>
                                    <option value="Manager_3">Manager_3</option>
                                    <option value="Manager_4">Manager_4</option>
                                  </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-primary" type="submit">Save changes</button>
                                <button type="button" class="btn btn-light">Cancel</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>