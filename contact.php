</html>
<!doctype html>
<html lang="en">

<head>
    <title>Coding Blog - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    body {
        background-color: rgb(250, 244, 236);
    }
    </style>
</head>

<body>

    <main>
        <?php
        include "partials/_dbconnect.php";
        include "partials/_header.php";
        ?>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include "partials/_dbconnect.php";
                $name = $_POST['name'];
                $email = $_POST['email'];
                $desc = $_POST['desc'];
                $querySelect = $_POST['querySelect'];

                if ($conn) {
                    $sql = "INSERT INTO `contactus` ( `name`, `email`, `query`, `concern`, `current_time_stamp`) VALUES ('$name', '$email', '$querySelect', '$desc', current_timestamp())";
                    $result = mysqli_query($conn, $sql);
                }
                    if ($result) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your concern has been successfully saved to the database.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    } 
                    else {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> Sorry, we could not be saved your data to the database due to some technical issue. Please try again after some time.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                            }
            }
        ?>

        <div class="container my-5">
            <h1 class="text-center">Contact Us</h1>
            <form action="/codingblogwebsite/contact.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                        placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter your valid email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="querySelect" class="form-label">Query</label>
                    <select class="form-select form-select-sm" id="querySelect" name="querySelect"
                        aria-label=".form-select-sm example">
                        <option value="Programming" selected>Programming</option>
                        <option value="Web Development">Web Development</option>
                        <option value="UX & UI Designs">UX & UI Designs</option>
                        <option value="Cyber Security">Cyber Security</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Your concern</label>
                    <textarea class="form-control" id="desc" name="desc" cols="30" rows="10"
                        placeholder="Enter your concern"></textarea>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <button type="submit" class="btn btn-info fs-5">Submit</button>
                </div>
            </form>
        </div>
    </main>

    <?php
    include "partials/_footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a49bcc2c7d.js" crossorigin="anonymous"></script>
</body>

</html>