
    <title>Problem Statement</title>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="../asset//vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="../asset//vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen" href="../asset//vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <link rel="stylesheet" media="screen" href="../asset//vendor/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" media="screen" href="../asset//css/sweet-alert.css" />
    <link rel="stylesheet" media="screen" href="../asset//vendor/toastr/toastr.min.css" />
    <link rel="stylesheet" media="screen" href="./../asset//css/theme.min.css">
    <link rel="stylesheet" media="screen" href="../asset//css/css/icons/fontawesome-free-5.15.3-web/css/all.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/problem_statement.css">




<body style="background-image: url(image/5804273.jpg) ;">

    <?php include "../includes/Database.php"?>

    
   <?php include '../includes/header.php' ?>



        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-12 col-lg-8">
                    <h1 class="display-4">Problem Statement</h1>
                </div>
            </div>
            <div class="col-12 mt-4">
                <form class="form">
                    <input class="form-control" id="search" type="search" placeholder="Search by Problem Name" aria-label="Search">
                </form>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <table class="table search-table">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Organization</th>
                                <th>Problem Name</th>
                                <th>Description</th>
                                <th>Domain</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql = "select * from problem_statements";

                        $result = $conn->query($sql);
                        
                            while ($row = $result->fetch_assoc()) {

                            echo "<tr>
                            <td>".$row['S.No.']." </td>
                            <td>".$row['Organization']."</td>
                            <td>".$row['PST']." </td>
                            <td>".$row['Domain']." </td>
                            <td>".$row['Description']." </td>
                            <td>".$row['date']." </td>
                            
                            </tr>";
                            }?>

                            
                    </table>
                </div>
            </div>
        </div>











        <footer>
            <div class="innerl">

                <section class="menul">
                    <div class="coll">
                        <h3>Features</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="startup.html">Startup</a></li>
                            <li><a href="investor.html">Investors</a></li>
                            <li><a href="problem_statement.html">Problem Statement</a></li>
                            <li><a href="success_stories.html">Success Stories</a></li>
                            <li><a href="mentor.html">Mentors</a></li>

                        </ul>
                    </div>
                    <div class="coll">
                        <h3>CONTACT</h3>
                        <ul>
                            <li><a href="contact_us.html">Help & Support</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                        </ul>
                    </div>
                    <div class="coll" style="width: 275px;">
                        <div class="feedbackl" style="width: 275px;">
                            <h1 style="color: white; width: 275px;">Feedback Form</h1>
                            <form action="" style="width: 275px;">
                                <div class="rowl" style="width: 275px;">
                                    <input type="text" id="text" class="row_inputl" style="width: 275px;" required>
                                    <label for="text" class="labell" style="width: 275px;">enter you name</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <input type="email" id="email" class="row_inputl" style="width: 275px;" required>
                                    <label for="email" class="labell" style="width: 275px;">your email
  address</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <textarea name="message" id="messagel" class="row_inputl" cols="30" rows="2" style="width: 275px;" required></textarea>
                                    <label for="message" class="labell" style="width: 275px;">message</label>
                                </div>
                                <div class="rowl" style="width: 275px;">
                                    <div class="buttonl" style="width: 275px;">
                                        <button type="submit" style="width: 275px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="special-coll">
                        <a href="https://trioex.000webhostapp.com/trioex_app">
                            <img class="gimg" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/icon-GooglePlay_zvwcqb" />
                        </a>
                    </div>
                </section>

                <section class="creditsl">

                    <div class="cr">© COER TECH WARRIER</div>
                    <div class="social-links">

                        <a href="#">
                            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48,h_48/icon-instagram_b7nubh" alt="" />
                        </a>
                        <a href="#">
                            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_48/icon-twitter_gtq8dv" alt="" />
                        </a>
                    </div>
                </section>


            </div>
        </footer>


        <a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fa fa-arrow-up">   </i></a>
        <script src="../asset//vendor/jquery/dist/jquery.min.js"></script>
        <script src="../asset//vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../asset//vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
        <script src="../asset//vendor/simplebar/dist/simplebar.min.js"></script>
        <script src="../asset//vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="../asset//vendor/tiny-slider/dist/min/tiny-slider.js"></script>
        <script src="../asset//vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="../asset//vendor/shufflejs/dist/shuffle.min.js"></script>
        <script src="../asset//vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
        <script src="../asset//vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
        <script src="../asset//vendor/lg-video.js/dist/lg-video.min.js"></script>
        <script src="../asset//vendor/parallax-js/dist/parallax.min.js"></script>
        <script src="../asset//vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="../asset//vendor/flatpickr/dist/flatpickr.min.js"></script>

        <script src="../asset//js/jquery.waypoints.min.js"></script>
        <script src="../asset//js/jquery.counterup.min.js"></script>
        <script src="../asset//js/sweet-alert.min.js"></script>
        <script src="../asset//vendor/toastr/toastr.min.js"></script>
        <script src="../asset//js/theme.min.js"></script>
        <script src="../asset//js/psnew.js"></script>
        <script>
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 2e3
                });
                $(".grecaptcha-badge").hide();
            });

            $(function() {});
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#subscribe_form").validate({
                    rules: {
                        SUBS_EMAIL: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {

                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        //element.closest('.form-group').append(error);
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass('is-invalid');
                    },
                    submitHandler: function(form) {

                    }
                });
            });

            function insertSubscriptionEmail() {
                var validationResponse = $('#subscribe_form').valid();
                if (validationResponse) {
                    var url = "https://www.startuputtarakhand.com";
                    var _token = $("input[name='_token']").val();
                    $.ajax({
                        type: 'POST',
                        url: "https://www.startuputtarakhand.com/insertSubscriptionEmail/post",
                        data: {
                            _token: _token,
                            emailid: $("#SUBS_EMAIL").val()
                        },
                        success: function(data) {
                            var jsondata = data;
                            var update = jsondata.update;
                            if (update == 1) {
                                toastr.success('Success, Subscribed Successfully.');
                                $("#SUBS_EMAIL").val('');
                            }
                            if (update == 2) {
                                toastr.success('You are already subscribed.');
                                $("#SUBS_EMAIL").val('');
                            }
                            if (update == 3) {
                                toastr.error('!Sorry, Something went wrong while subscribing.');
                            }
                        }
                    });
                }

            }
        </script>
</body>

</html>
<script>
    $(document).ready(function() {

        $("#upcomingeventsbutton").click();


    });
    $(function() {
        var ticker = $("#ticker");
        ticker.children().filter(".media").each(function() {
            var dt = $(this),
                container = $("<div>");
            dt.next().appendTo(container);
            dt.prependTo(container);
            container.appendTo(ticker);
        });
        ticker.css("overflow", "hidden");

        function animator(currentItem) {
            var distance = currentItem.height();
            duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.020;
            currentItem.animate({
                marginTop: -distance
            }, duration, "linear", function() {
                currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
                animator(currentItem.parent().children(":first"));
            });
        };
        animator(ticker.children(":first"));
        ticker.mouseenter(function() {
            ticker.children().stop();
        });
        ticker.mouseleave(function() {
            animator(ticker.children(":first"));
        });
    });
</script>