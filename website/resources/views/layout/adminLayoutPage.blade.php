<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XRay - BookReview - Admin</title>
    @include("partial.head")
    @vite(['resources/js/app.js'])
</head>
<body class="sidebar-main-menu">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">

    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include("partial.sidebar")
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
    @include("partial.navbar")
        @yield("content")
    @include("partial.footer")
    </div>
</div>
<!-- Wrapper END -->
@include("partial.bodyJs")
</body>
</html>
