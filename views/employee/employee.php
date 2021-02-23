<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="containter">
        <h1>Employee's page!</h1>
        </br>

        <?php if ($action == "getEmployee" && (!isset($employee) || sizeof($employee) == 0)) {
            echo "<p>The employee does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=employee&action=<?php echo isset($employee['emp_no']) ? "updateEmployee" : "createEmployee" ?>" method="post">
            <input type="hidden" name="emp_no" value="<?php echo isset($employee['emp_no']) ? $employee['emp_no'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="birth_date">birth_date</label>
                        <input required type="text" value="<?php echo isset($employee['birth_date']) ? $employee['birth_date'] : null ?>" class="form-control" id="birth_date" name="birth_date" aria-describedby="birth_date" placeholder="Enter birth_date">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input required type="text" value="<?php echo isset($employee['first_name']) ? $employee['first_name'] : null ?>" class="form-control" id="firstName" name="first_name" aria-describedby="firstHelp" placeholder="Enter first name">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input required type="text" value="<?php echo isset($employee['last_name']) ? $employee['last_name'] : null ?>" class="form-control" id="last_name" name="last_name" aria-describedby="emailHelp" placeholder="Enter last name">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender_id" class="form-control" id="gender" required>
                            <option value="">Please Select</option>
                            <option value="1" <?php echo isset($employee['gender']) && $employee['gender']  == 1 ? 'selected' : null; ?>>Male</option>
                            <option value="2" <?php echo isset($employee['gender']) && $employee['gender']  == 2 ? 'selected' : null; ?>>Female</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="city">Hire date </label>
                        <input type="text" value="<?php echo isset($employee['hire_date']) ? $employee['hire_date'] : null ?>" class="form-control" id="hire_date" name="hire_date" aria-describedby="CityHelp" placeholder="hire date">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="streetAddress">Street Address</label>
                        <input type="text" value="<?php echo isset($employee['street_address']) ? $employee['street_address'] : null ?>" class="form-control" id="streetAddress" name="street_address" aria-describedby="streetAddressHelp" placeholder="Enter streetAddress">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=employee&action=getAllEmployees&action=getAllEmployees"; ?>">Return</a>
        </form>
    </div>
</body>

</html>