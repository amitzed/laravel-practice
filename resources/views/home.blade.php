@extends('layouts.app')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @section('content')
      <h1>Meeting Of The Robots</h1>
      <section class="row-alt">
        <div class="lead container">
          <h1> <strong>The Venue</strong> </h1>
          <p>We&#8217;ll be anywhere and everywhere but your human counterparts can attend at the Moscone Center and stay at the Villa Florence. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
        </div>
      </section>

      <section class="row">
        <div class="grid">

          <section class="venue-moscone">
            <div class="col-1-3">
              <h2>Moscone Center</h2>
              <p>800 Howard Street <br> San Francisco, CA 94103</p>
              <p><a href="http://www.moscone.com/site/do/index">moscone.com</a> <br> (555) 555-5555 </p>
            </div><!--
            --><iframe class="venue-map col-2-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.291781879087!2d-122.40563368410821!3d37.78320121944639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858087173fb3dd%3A0x2dfbb138bb88150a!2s800%20Howard%20St%2C%20San%20Francisco%2C%20CA%2094103!5e0!3m2!1sen!2sus!4v1568334487388!5m2!1sen!2sus"></iframe>
          </section>

          <section class="venue-florence">
            <div class="col-1-3">
              <h2>Villa Florence</h2>
              <p>225 Powell Street <br> San Francisco, CA 94102</p>
              <p><a href="https://www.villaflorence.com/">villaflorence.com</a> <br> (888) 838-8701 </p>
            </div><!--
            --><iframe class="venue-map col-2-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1347123716637!2d-122.41054718410808!3d37.78688261923464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808f3cc7bbdb%3A0x5f41fbbc4053cced!2s225%20Powell%20St%2C%20San%20Francisco%2C%20CA%2094102!5e0!3m2!1sen!2sus!4v1568334360621!5m2!1sen!2sus"></iframe>
          </section>

        </div>
      </section>
    @endsection

    @section('sidebar')
    @parent
      <p>This is the Home Page sidebar</p>
    @endsection

  </body>
</html>
