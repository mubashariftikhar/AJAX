<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax PHP</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <button>Send</button>

</body>

<script>
$(document).ready(function() {
    $("button").click(function() {
        $.post("post.php", {
                name: "Ali",
                lastname: "Raza"
            },
            function(data, status) {
                alert("Data :  " + data + "\nStatus : " + status);
            }
        )
    })

})
</script>

</html>