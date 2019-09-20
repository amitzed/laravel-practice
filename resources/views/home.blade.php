@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @section('content')
      <h1>Home Page</h1>
    @endsection

    @section('sidebar')
    @parent
      <p>This is the Home Page sidebar</p>
    @endsection

  </body>
</html>
