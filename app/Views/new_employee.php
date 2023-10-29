<!doctype html>
<html lang="en">

<head>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Employees</title>
</head>

<body>


    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Add Employee</h2>

                                <form action="" id="new_employee_form">

                                    <div class="form-outline mb-4 mt-2">
                                        <label class="form-label" for="form3Example1cg">First Name</label>
                                        <input type="text" class="form-control form-control-sm" name="fname" id="fname"
                                            required>

                                    </div>

                                    <div class="form-outline mb-4 mt-2">
                                        <label class=" form-label" for="form3Example3cg">Middle Name</label>
                                        <input type="text" class="form-control form-control-sm" name="mname" id="mname" ">
                 
                                    </div>

                                    <div class=" form-outline mb-4 mt-2">
                                        <label class="form-label" for="form3Example4cg">Last Name</label>
                                        <input type="text" class="form-control form-control-sm" name="lname" id="lname"
                                            required>

                                    </div>

                                    <div class="form-group  mt-2">
                                        <label for="gender" class="control-label">Gender</label>
                                        <select class="form-select form-select-sm" name="gender" id="gender" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group  mt-2">
                                        <label for="email" class="control-label">Email</label>
                                        <input type="email" class="form-control form-control-sm" name="mail" id="mail"
                                            required>
                                    </div>
                                    <div class="form-group  mt-2">
                                        <label for="contact" class="control-label">Mobile</label>
                                        <input type="text" class="form-control form-control-sm" name="mobile_no"
                                            id="mobile_no" required>
                                    </div>

                                    <div class="form-group  mt-2">
                                        <label for="address" class="control-label">Address</label>
                                        <textarea rows="3" class="form-control form-control-sm" name="address"
                                            id="address" style="resize:none" required></textarea>
                                    </div>
                                    <div class="form-group  mt-2">
                                        <label for="lastname" class="control-label">Date of Birth</label>
                                        <input type="text" class="form-control form-control-sm" name="date_of_birth"
                                            id="date_of_birth" required>
                                    </div>

                                    <div class="mb-3  mt-2">
                                        <label for="formFileSm" class="form-label">Photo</label>
                                        <input class="form-control form-control-sm" id="photograph" name="photograph"
                                            type="file">
                                    </div>
                            </div>


                            <div class="d-flex justify-content-center">
                                <button type="submit"
                                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                            </div>








                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        // $(function(){
        $('#new_employee_form').on('submit', function (e) {
            e.preventDefault();
            var frm = $(this)[0];
            if (!frm.checkValidity()) {
                frm.reportValidity()
                return false;
            }
            $.ajax({
                url: "employees",
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                error: err => {
                    console.error(err)
                    alert('an error occurred')
                },
                success: function (resp) {
                    if (resp.status == 'success') {
                        alert('Success')
                    } else {
                        var el = $('div')
                        el.addClass('alert alert-danger pop-msg')
                        el.hide()
                        el.text(resp.msg)
                        _this.prepend(el)
                        el.show('hide')
                    }
                }
            })
        })

        // })
    </script>
</body>

</html>