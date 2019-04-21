<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
  </head>
  <body>
    <section>
        <div>
            <h1 id="intro">
                How can we help you?
            </h1>
            <form method='post' action="{{ route('contactus.store') }}">
                {{ csrf_field() }}
                <div class="container-1">
                    <input type="text" placeholder="name" name='name'>
                    <input type="text" placeholder="email" name='email'>
                    <input type="text" placeholder="company" name='company'>
                    <input type="text" placeholder="phone number" name='phone'>
                </div>
                <div class="container-2">
                    <input type="text" placeholder="subject" name='subject'>
                    <textarea placeholder="message" name='message'></textarea>
                </div>
                <div class="container-3">
                    <input type="submit">
                </div>
            </form>
        </div>
    </section>
  </body>
</html>
