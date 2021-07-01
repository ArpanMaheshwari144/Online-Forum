<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcone to iDiscuss - Coding Forums</title>
    <style>
    body {
        background-image: url("img/contact1.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        min-height: 100vh;
    }
    </style>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <div class="container my-3">
        <h1 class="text-center">Contact Us</h1>
        <form>
            <div class="form-group">
                <label for="fname">Enter Your First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name">
            </div>
            <div class="form-group">
                <label for="lname">Enter Your Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Your Last Name">
            </div>
            <div class="form-group">
                <label for="email">Enter Your Email Address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="phone">Enter Your Phone Number:</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                <label for="detail">Enter Your Additional Details:</label>
                <input type="text" class="form-control" id="detail" placeholder="Enter Your Additional Details">
            </div>
            <div class="form-group">
                <label for="content">Elaborate YourSelf:</label>
                <textarea class="form-control" id="content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <?php include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>