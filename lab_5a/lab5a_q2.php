<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    // Associative array of students
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>

    <h2>Student's Information</h2>
    <table border="1" cellpadding="5" cellspacing="2">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>

        <?php
        // Use foreach loop through each student and display their information in the table
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['program'] . "</td>";
            echo "<td>" . $student['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
