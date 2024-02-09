<?php
$Fname = $_POST['Fname'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Gender = $_POST['gender'];
$DOB = $_POST['dob'];
$MathsRating = $_POST['Maths_rating'];
$EnglishRating = $_POST['English_rating'];
$CodingClubRating = $_POST['CodingClub_rating'];
$MusicClubRating = $_POST['MusicClub_rating'];
$DanceClubRating = $_POST['DanceClub_rating'];
$Suggestion = $_POST['Suggest'];

$conn = mysqli_connect("localhost","root","","form_backendphp");
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
else{
    $stmt = $conn->prepare("insert into feedback(Fname, Phone,Email,Gender, DOB, MathsRating, EnglishRating, CodingClubRating, MusicClubRating, DanceClubRating, Suggestion) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssssssss", $Fname, $Phone, $Email, $Gender, $DOB, $MathsRating, $EnglishRating, $CodingClubRating, $MusicClubRating, $DanceClubRating, $Suggestion);
    $stmt->execute();
    echo "Feedback noted successfully";
    echo "<br><br>";
    $email = $_POST['email'];
    $sql = "SELECT * FROM feedback WHERE Email = '$email'";
    $result = mysqli_query($conn, $sql);
    
    echo "DETAILS ENTERED BY THE USER ARE";
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'><tr><th>Name  </th><th>Phone  </th><th>Email  </th><th>Gender  </th><th>DOB  </th><th>Maths_Rating  </th><th>English_Rating  </th><th>CodingClub_Rating  </th><th>MusicClub_Rating  </th><th>DanceClub_Rating  </th><th>Suggestion  </th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["Fname"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Gender"]."</td><td>".$row["DOB"]."</td><td>".$row["MathsRating"]."</td><td>".$row["EnglishRating"]."</td><td>".$row["CodingClubRating"]."</td><td>".$row["MusicClubRating"]."</td><td>".$row["DanceClubRating"]."</td><td>".$row["Suggestion"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    mysqli_close($conn);

    $stmt->close();

}