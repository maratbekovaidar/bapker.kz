<!--  Code and design created by Aidar Maratbekov 10.08.2021  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/chief-slider.css">
    <script defer src="/js/chief-slider.js"></script>
    <script src="/js/stickjaw.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Register</title>
    <script>
        // после готовности DOM
        document.addEventListener('DOMContentLoaded', function() {
            var elms = document.querySelectorAll('.slider_partner');
            for (var i = 0, len = elms.length; i < len; i++) {
                // инициализация elms[i] в качестве слайдера
                new ChiefSlider(elms[i]);
            }
            const slider = new ChiefSlider('.slider_partner', {
                loop: true,
                autoplay: true,
                interval: 3000,
                swipe: true
            });

            var elms2 = document.querySelectorAll('.slider_trainers');
            for (var i = 0, len = elms2.length; i < len; i++) {
                // инициализация elms[i] в качестве слайдера
                new ChiefSlider(elms2[i]);
            }
            const slider2 = new ChiefSlider('.slider_trainers', {
                loop: true,
                autoplay: true,
                interval: 3000,
                swipe: true
            });
        });
    </script>
</head>
<body class="px-0 mx-0">

<!-- Register -->

<div class="login_block col-12 col-lg-6 mx-auto mt-5 rounded-3 p-3" style="">
    <div class="login_inner_block bg-primary p-3 w-100 h-100">
        <h1 class="ff-palatino fw-bold text-light text-center text-uppercase pt-4">Bapker.kz</h1>
        <form action="/register" method="get" class="d-flex flex-column justify-content-center py-2 gap-3">
            <div class="w-75 mx-auto">
                <label for="name" class="form-label text-light fw-bold ff-palatino">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="w-75 mx-auto">
                <label for="surname" class="form-label text-light fw-bold ff-palatino">Surname</label>
                <input type="text" id="surname" class="form-control" placeholder="Surname">
            </div>
            <div class="w-75 mx-auto">
                <label for="email" class="form-label text-light fw-bold ff-palatino">E-Mail</label>
                <input type="email" id="email" class="form-control" placeholder="E-Mail">
            </div>
            <div class="w-75 mx-auto">
                <label for="phone" class="form-label text-light fw-bold ff-palatino">Phone Number</label>
                <input type="number" id="phone" class="form-control" placeholder="Number">
            </div>
            <div class="w-75 mx-auto">
                <label for="sport_type" class="form-label text-light fw-bold ff-palatino">Sport Type</label>
                <select id="sport_type" class="form-select">
                    <option value="0" selected>Другое</option>
                    <option value="1">Football</option>
                    <option value="2">Volleyball</option>
                    <option value="3">Basketball</option>
                    <option value="4">Judo</option>
                    <option value="5">Box</option>
                    <option value="6">Hockey</option>
                    <option value="7">Swimming</option>
                </select>
            </div>
            <div class="w-75 mx-auto">
                <label for="date" class="form-label text-light fw-bold ff-palatino">Birthday</label>
                <input type="date" id="date" class="form-control" placeholder="Date">
            </div>
            <div class="w-75 mx-auto">
                <label for="password" class="form-label text-light fw-bold ff-palatino">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="w-75 mx-auto">
                <label for="repassword" class="form-label text-light fw-bold ff-palatino">Confirm Password</label>
                <input type="repassword" id="password" class="form-control" placeholder="Confirm Password">
            </div>
            <input type="submit" class="btn btn-success w-75 mx-auto fw-bold mt-3" name="register" value="Register">
        </form>
        <div class="d-flex flex-column py-2">
            <a href="/login" class="text-center text-light">Have an account? Sign In here.</a>
        </div>
    </div>
</div>

<script>
    var SJ_setiings = {
        options: {
            hlw: true, // Height as width
            wlh: true, // Width as height
            hlt: true, // Width of the target element (target id is the same as for height)
            wlt: true, // Height of the target element (target id is the same as for width)
            alo: true, // All elements as one (height)
        },
        settings: {
            windowResize: true,
            writeHystory: true
        }
    }
    var sj = new SJ({
        settings: {
            windowResize: true
        }
    });
</script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.esm.js"></script>
</body>
</html>

