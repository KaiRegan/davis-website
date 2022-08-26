<html>

<head>
    <?php include 'private/resources/bootstrap.php'; ?>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="body-contact">
        <div class="container-fluid p-0">
            <section class="contact">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="head text-center text-white">
                                                <h1>Contact Me</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form py-3">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col mt-5">
                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col mt-5">
                                                <textarea class="form-control" placeholder="Write message here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <button class="button btn btn-info col-12">Send Message</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <p class="text-center"> To contact me via Instagram and Facebook click the links below</p>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col">
                                                <a href="https://www.instagram.com/is_art00/" target="_blank"> <i class="fa-brands fa-instagram" id="contact-icon-ins"></i></a>
                                            </div>
                                            <div class="col">
                                                <a href="https://www.facebook.com/isaac.davis.9809" target="_blank"> <i class="fa-brands fa-facebook" id="contact-icon-fac"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>

        </div>
    </div>
    <?php include "footer.php" ?>

    <?php include "private/resources/scripts.php" ?>
</body>

</html>