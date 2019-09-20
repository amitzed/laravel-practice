<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Practice</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body id="top">

    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif

      <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>

        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>

    </div>

    <footer id="footer" class="text-center primary-footer">
      <small>&copy; Meeting of the Robots</small>

      <nav class="nav-footer">
        <ul>
          <li><a href="/">Home</a></li><!--
          --><li><a href="/about">About</a></li><!--
          --><li><a href="/contact">Contact</a></li><!--
          --><li><a href="mailto:amitzmn@gmail.com?subject=Hello%20Amit&body=Requesting%20some%20info%20for...">eMail Us</a></li>
        </ul>
      </nav>
      <a href="#top">Back To Top</a>
    </footer>

  </body>
</html>
