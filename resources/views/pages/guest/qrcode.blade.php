<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="inset-0 overflow-hidden h-full bg-black flex items-center justify-center">
    <div class="w-full h-[100vh] border">
        <video id="myVideo" class="w-full mx-auto" autoplay muted playsinline>
            <source src="https://bvrbaliholidayrentals.com/videos/qrcode-video.mp4"  type="video/mp4">
        </video>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.getElementById('myVideo');

        video.addEventListener('ended', function () {
            // Redirect to the "/properties" page
            window.location.href = "/";
        });
    });
</script>

</body>
</html>
