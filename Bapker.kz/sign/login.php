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
    <title>Login</title>
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

<div class="login_block col-12 col-lg-4 mx-auto mt-5 bg-primary rounded-3 p-3" style="">
    <div class="login_inner_block w-100 h-100">
        <h1 class="ff-palatino fw-bold text-light text-center text-uppercase pt-4">Bapker.kz</h1>
        <form action="" class="d-flex flex-column justify-content-center py-2 gap-3">
            <input type="email" class="form-control w-75 mx-auto" placeholder="E-Mail">
            <input type="password" class="form-control w-75 mx-auto" placeholder="Password">
            <input type="submit" class="btn btn-success mx-auto" name="Submit" placeholder="Submit" value="SignIn">
        </form>
        <div class="d-flex flex-column py-2">
            <a href="/reset" class="text-center text-light">Forgot password?</a>
            <a href="/register" class="text-center text-light">Don't have an account? Register here</a>
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

