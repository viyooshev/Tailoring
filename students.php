<!DOCTYPE html>
<html>
    <head>
        <title>Students</title>
        <link rel="stylesheet" href="students.css">
        <script src="register.js"></script>
    </head>
    <body>
        <table class="table">
            <tr>
                <th id ="id">ID</th>
                <th id="name">Name</th>
                <th id="address">Address</th>
                <th id="email">Email</th>
                <th id="phone" >Phone</th>
                <th id="gender" >Gender</th>
                <th id="course" >Course</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","tailoring");
            if($conn->connect_error){
                die("Connection Failed:" . $conn-> connect_error);
            }
            $sql="SELECT id, name, address, email, phone, gender, course from register_student";
            $result = $conn-> query($sql);
            if($result-> num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>". $row["id"] ."</td><td>" . $row["name"] ."</td><td>" . $row["address"] ."</td><td>" . $row["email"] ."</td><td>" . $row["phone"] ."</td><td>" . $row["gender"] ."</td><td>" . $row["course"]. "</td></tr>";   
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }
            $conn->close();
            ?>
        </table>

        <div>
        <tr>
            <td>
                <button id="home" onclick="home()">Home</button>
            </td>
        </tr>
    </div>
    </body>
</html>