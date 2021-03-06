<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Mehedi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">OOP CRUD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="datalist.php">Display</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Sign Up</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <section class="h-100 bg-dark">
        <form method="post" action="">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="images/signup-img.jpg" alt="Sample photo" class="img-fluid m-4"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" name="first_name" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" name="last_name" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m1"
                                                        class="form-control form-control-lg" name="mother_name" />
                                                    <label class="form-label" for="form3Example1m1">Mother's
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n1" name="father_name"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n1">Father's
                                                        name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="address"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="femaleGender" value="Female" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="maleGender" value="Male" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="otherGender" value="Other" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select class="select form-select">
                                                    <option value="State" name="state">State</option>
                                                    <option value="Dhaka" name="state">Dhaka</option>
                                                    <option value="Khulna" name="state">Khulna</option>
                                                    <option value="Other" name="state">Other</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <select class="select form-select">
                                                    <option value="City" name="city">City</option>
                                                    <option value="Dhaka" name="city">Dhaka</option>
                                                    <option value="Khulna" name="city">Khulna</option>
                                                    <option value="Other" name="city">Other</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-outline  mb-4">
                                            <input type="date" id="form3Example9 " name="dob"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example9">DOB</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example90" name="pincode"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example90">Pincode</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example99" name="course"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example99">Course</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" name="email_id"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <button type="button" name="submit"
                                                class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>