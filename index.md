<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./main.css">
    <title>Form</title>
</head>

<body>


    <h3>USER INFORMATION</h3>

    <div>
        <form id="form-id">
            <label for="Name">NAME :</label>
            <input type="text" name="Name" id="Name">
            <br>
            <label for="Phone Number">PHONE NUMBER :</label>
            <input type="tel" name="PhoneNumber" id="Phone" maxlength="10">
            <br>
            <label for="Email">EMAIL :</label>
            <input type="email" name="Email" id="Email" >
            <input type="submit" id="submit" value="Submit">
        </form>
        <table>

        </table>
    </div>
    <script src="./index.js"></script>
</body>

</html>