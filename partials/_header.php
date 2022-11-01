<?php
    session_start();

    echo '
    <nav class="navbar navbar-expand-lg  bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand pt-0" href="/codingblogwebsite">codingBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/codingblogwebsite">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Blogs
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark rounded-3 shadow border-0 pt-0 mx-0 w-280px">
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#"><span
                                        class="d-inline-block bg-success rounded-circle p-1"></span>Programming</a></li>
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#"><span
                                        class="d-inline-block bg-primary rounded-circle p-1"></span>Web Development</a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#"><span
                                        class="d-inline-block bg-info rounded-circle p-1"></span>UX & UI Designs</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#"><span
                                        class="d-inline-block bg-danger rounded-circle p-1"></span>Cyber Security</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>';
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo '<form class="d-flex my-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
                <p class="text-light my-0 mx-1">Welcome ' . $_SESSION['username'] . '</p>
                <a href="partials/_logout.php" class="btn btn-outline-danger ml-2">Logout</a> 
                </div>';
        } else {
                echo '<form class="d-flex my-0" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
                <div class="mx-2 my-2">
                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button class="btn btn-info mx-1" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Signup</button>
                </div>';
            }

            echo    '</div>
                </div>
            </nav>';

    include "partials/_loginmodal.php";
    include "partials/_signupmodal.php";
    if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                    <strong>Success!</strong> You can now login
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
?>