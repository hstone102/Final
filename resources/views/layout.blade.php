<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>your Chart</title>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
  </head>
  <body class="container">

    @include('indexNavbar')

      <h1 class="mt-3 mb-5">@yield('title')</h1>

        <section class="section">
          <div class="container">
            <h1 class="title">
              your Chart
            </h1>
            <p class="subtitle">
              Your charts... your way!
            </p>
          </div>
        </section>

        @yield('content')
  </body>
</html>
