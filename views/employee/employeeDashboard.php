<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Employee Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">Employee Number</th>
                <th class="tg-0pky">Birth date</th>
                <th class="tg-0lax">First Name</th>
                <th class="tg-0lax">Last Name </th>
                <th class="tg-0lax">Gender</th>
                <th class="tg-0lax">Hire Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($employees as $index => $employee) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $employee[0] . "</td>";
                echo "<td class='tg-0lax'>" . $employee[1] . "</td>";
                echo "<td class='tg-0lax'>" . $employee[2] . "</td>";
                echo "<td class='tg-0lax'>" . $employee[3] . "</td>";
                echo "<td class='tg-0lax'>" . $employee[4] . "</td>";
                echo "<td class='tg-0lax'>" . $employee[5] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=employee&action=getEmployee&emp_no=" . $employee[0] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=employee&action=deleteEmployee&emp_no=" . $employee[0] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=employee&action=createEmployee">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>