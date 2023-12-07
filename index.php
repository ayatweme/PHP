<?php include('globals.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container mt-5">
        <?php 
        if (isset($_SESSION['success_add']) && $_SESSION['success_add'] == 1) {
            // Display the success message
            echo '<div class="alert alert-success" role="alert">' . success_add . '</div>';
        
            // Reset the session variable to avoid displaying the message again on page refresh
            $_SESSION['success_add'] = 0;
        }
        if (isset($_SESSION['error']) && $_SESSION['error'] == 1) {
            // Display the error message
            echo '<div class="alert alert-warning" role="alert">' . error . '</div>';
        
            // Reset the session variable to avoid displaying the message again on page refresh
            $_SESSION['error'] = 0;
        }
        if (isset($_SESSION['success_edit']) && $_SESSION['success_edit'] == 1) {
            // Display the success message
            echo '<div class="alert alert-success" role="alert">' . success_edit . '</div>';
        
            // Reset the session variable to avoid displaying the message again on page refresh
            $_SESSION['success_edit'] = 0;
        }
        if (isset($_SESSION['success_delete']) && $_SESSION['success_delete'] == 1) {
            // Display the success message
            echo '<div class="alert alert-success" role="alert">' . success_delete . '</div>';
        
            // Reset the session variable to avoid displaying the message again on page refresh
            $_SESSION['success_delete'] = 0;
        }
        ?>
        <h2 class="mb-4">Employee List</h2>
        <button class="add-click btn btn-primary" data-toggle="modal" data-target="#modal-addEmployeeModal">Add
            Employee</button>
        <!-- DataTable -->
        <table id="employeeTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table content will be loaded dynamically using DataTables and Ajax -->
            </tbody>
        </table>
    </div>
    <!-- Add Employee Modal -->
    <div class="modal fade" id="modal-addEmployeeModal" tabindex="-1" role="dialog"
        aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="employee.php" enctype="multipart/form-data" class="modal-form needs-validation"
                    method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="employeeName" name="name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="employeeAddress" name="address"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="salary">Salary:</label>
                                    <input type="number" class="form-control" id="employeeSalary" name="salary"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="primaryId" id="primaryId" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary modal-submit" id="addEmployeeBtn">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-delete" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body"> Are You Sure ? </div>
                <form action="employee.php" method="post">
                    <div class="modal-footer">
                        <input type="hidden" id="table_name" name="table_name">
                        <input type="hidden" id="ids" name="id" value="">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">No</button>
                        <input value="Yes" name="delete" type="submit"
                            class="modal-submit btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, jQuery, DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Your custom script -->
    <script>
        $(document).on('click', '.add-click', function () {
            $('.modal-header').html("Add");
            $('.modal-submit').attr('name', 'add');

            $(".modal-form").trigger("reset");


        });
        $(document).on('click', '.edit-click', function () {
            $('.modal-header').html("Edit");
            $('.modal-submit').attr('name', 'update');

            $(".modal-form").trigger("reset");
        });


        $(document).on('click', '.delete-click', function () {
            var id = $(this).attr('id');
            var tbl = $(this).attr('table');
            $('#ids').val(id);
            $('#table_name').val(tbl);
            $('.modal-header').html("Delete");
            $('.modal-submit').attr('name', 'delete');


        });
    </script>
    <script>
        $(document).ready(function () {
            // Initialize DataTable
            $('#employeeTable').DataTable({
                ajax: {
                    url: 'get_emplyees.php', // Replace with your server-side script to fetch data
                    type: 'GET',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'salary'
                    },

                    {
                        data: null,
                        render: function (data, type, row) {

                            return '<button  id="' + row.id +
                                '" data-toggle="modal"  data-target="#modal-addEmployeeModal" class="edit-click btn btn-info btn-sm">Edit</button>' +

                                '    <button table="employees" id="' + row.id +
                                '" data-toggle="modal"  data-target="#modal-delete" class="delete-click btn btn-danger btn-sm">Delete</button>';
                        }
                    }
                ]
            });


        });
        $(document).on('click', '.edit-click', function () {
            var id = $(this).attr('id');
            // alert(id);
            $.ajax({
                url: "get_emplyees.php",
                method: "POST",
                data: {
                    id: id
                },
                dataType: "json",
                success: function (data) {
                    if (data && data.length > 0) {
                        // Assuming you have an array of employees
                        var employee = data[0];
                        $('#employeeName').val(employee.name);
                        $('#employeeAddress').val(employee.address);
                        $('#employeeSalary').val(employee.salary);
                        $('#primaryId').val(employee.id);
                    } else {
                        console.error("No data received from the server.");
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Ajax request failed:", status, error);
                }
            });
        });
    </script>
</body>

</html>