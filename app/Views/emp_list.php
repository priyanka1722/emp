<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    
        <title>Employees</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">List of Employees</h3>

                <div class="card">
                    <div class="card-body">
                        <form action="" method="get" id="search_form">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="search_text" class="col-form-label">Search</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" placeholder="Search here" value="" id="search_text"
                                        name="search_text" class="form-control" aria-describedby="">
                                </div>
                                <div class="col-auto">
                                    <input  type="submit" class="btn btn-primary" value="Search">
                                </div>
                                <div class="col-auto">
                                    <a >
                                    <button id="addemp" type="button" class="btn btn-primary float-end" onclick="location.href='<?php echo base_url();?>emp/public/add'"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        Add Employee
                                    </button>
                                    </a>
                                </div>
                            </div>
                            </form>
                             
                        
                            
                        <table class="table table-striped table-bordered" style="margin-top: 20px">
                            <thead>
                                <tr>
                                    <th scope="col">First</th>
                                    <th scope="col">Middle</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row): ?>
                                    <tr>
                                        <td>
                                            <?= $row['fname'] ?>
                                        </td>
                                        <td>
                                            <?= $row['mname'] ?>
                                        </td>
                                        <td>
                                            <?= $row['lname'] ?>
                                        </td>
                                        <td>
                                            <?= $row['gender'] ?>
                                        </td>
                                        <td>
                                            <?= $row['mail'] ?>
                                        </td>
                                        <td>
                                            <?= $row['mobile_no'] ?>
                                        </td>
                                        <td>
                                            <?= $row['date_of_birth'] ?>
                                        </td>
                                        <td>
                                            <?= $row['photograph'] ?>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <?php $pager->setPath('emp/public'); ?>
                            <?php echo $pager->links('default', 'full_pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>