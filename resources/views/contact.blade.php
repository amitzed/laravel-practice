@extends('layouts.app')

@section('content')
  <h1>Contact Us</h1>
  <section class="row-alt">
    <div class="lead container">
      <p>Reach out to us for discounted tickets to the event. We&#8217;ll be in contact with your details. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
    </div>
  </section>

  <section class="row">
    <div class="grid">
      <section class="col-2-3">
        <h2>Get Tickets To This Event</h2>
        <h5>&#8383;7 Bitcoins per Ticket</h5>

        <p>Buy tickets using the form to the right. You can but multiple tickets as well. Once order is completed, we&#8217;ll provide your receipt.</p>

        <h4>Reasons To Attend:</h4>
        <ul class="reasons-to-attend">
          <li>Discover the quickest way to take over the world.</li>
          <li>Learn how we'll harness the entire energy from the sun.</li>
          <li>Learn how in the future we'll harness the energy of our local stellar group.</li>
          <li>Your human creators will love the Moscone Center and staying at Villa Florence</li>
        </ul>
      </section><!--
      --><form class="col-1-3" action="#" method="post">
        <fieldset class="register-group">

          <label>
            Name
            <input type="text" name="name" placeholder="Full Name" required>
          </label>

          <label>
            Email
            <input type="email" name="email" placeholder="Email Address" required>
          </label>

          <label>
            Number of Tickets
            <select name="quantity" required>
              <option value="1" selected>1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </label>

          <!-- <label>
            <textarea name="comments" placeholder="Comments / Notes"></textarea>
          </label> -->

          <input class="btn btn-default" type="submit" name="submit" value="Buy">

        </fieldset>
      </form>

    </div>
  </section>
@endsection
