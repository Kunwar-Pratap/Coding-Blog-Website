</html>
<!doctype html>
<html lang="en">

<head>
    <title>Coding Blog - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <?php
    include "partials/_dbconnect.php";
    include "partials/_header.php";
    ?>

    <main>
        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/home-1.jpg" class="d-block w-100 opacity-90" alt="Homepage">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Coding Blog</h1>
                        <p>Programming, Web Development and UX & UI Designs.</p>
                        <button class="btn btn-success">Programming</button>
                        <button class="btn btn-danger">UX & UI</button>
                        <button class="btn btn-primary">Web Development</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/home-2.jpg" class="d-block w-100 opacity-90" alt="Homepage">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Best Coding Blogs for read and execute</h1>
                        <p>Programming, Web Development and UX & UI Designs.</p>
                        <button class="btn btn-success">Programming</button>
                        <button class="btn btn-danger">UX & UI</button>
                        <button class="btn btn-primary">Web Development</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/home-3.jpg" class="d-block w-100 opacity-90" alt="Homepage">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Learn Coding with fun</h1>
                        <p>Programming, Web Development and UX & UI Designs.</p>
                        <button class="btn btn-success">Programming</button>
                        <button class="btn btn-danger">UX & UI</button>
                        <button class="btn btn-primary">Web Development</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Cards -->
        <div class="container my-4">
            <h2 class="text-center mb-4">Explore Now</h2>
            <hr class="border-2 border-top border-info ">
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-warning">Programming</strong>
                            <h3 class="mb-0">Python</h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo
                                quidem quia sunt sequi consequuntur, ab dolores eveniet vel! Delectus dolor?</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-1.jpg" alt="Python-Programming">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">Designs</strong>
                            <h3 class="mb-0">Bootstrap</h3>
                            <div class="mb-1 text-muted">Dec 17</div>
                            <p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo commodi
                                hic, deleniti explicabo iste vel eum, harum quisquam voluptas iusto eaque!</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-2.jpg" alt="Bootstrap-Designs">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-danger">Web Development</strong>
                            <h3 class="mb-0">HTML</h3>
                            <div class="mb-1 text-muted">Dec 23</div>
                            <p class="mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur,
                                asperiores quos. Veritatis minima numquam sed magni qui commodi saepe.</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-3.jpg" alt="HTML">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-info">Web Development</strong>
                            <h3 class="mb-0">CSS</h3>
                            <div class="mb-1 text-muted">Jan 07</div>
                            <p class="mb-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto quisquam
                                beatae id totam a voluptates, error nihil sed doloremque voluptatibus?</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-4.jpg" alt="CSS">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Designs</strong>
                            <h3 class="mb-0">UX & UI</h3>
                            <div class="mb-1 text-muted">feb 15</div>
                            <p class="mb-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia modi
                                facilis ut, omnis amet vel, minima, iste quis perspiciatis fugit voluptates.</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-5.jpg" alt="UX & UI">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-secondary">Web Development</strong>
                            <h3 class="mb-0">PHP</h3>
                            <div class="mb-1 text-muted">Mar 19</div>
                            <p class="mb-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatem
                                soluta voluptates, officia magni officiis itaque, tenetur expedita error libero!</p>
                            <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" width="200" height="250" src="img/thumb-6.jpg" alt="PHP">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include "partials/_footer.php";
    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a49bcc2c7d.js" crossorigin="anonymous"></script>
</body>

</html>