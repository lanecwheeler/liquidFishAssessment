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
            <form id="contact" method='post' action="{{ route('contactus.store') }}">
                {{ csrf_field() }}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container-1">
                    <input type="text" placeholder="name" class="@error('name') is-invalid @enderror" name='name' required>
                    <input type="text" placeholder="email" class="@error('email') is-invalid @enderror" name='email' required>
                    <input type="text" placeholder="company" class="@error('company') is-invalid @enderror" name='company' required>
                    <input type="text" placeholder="phone number" class="@error('phone') is-invalid @enderror" name='phone' required>
                </div>
                <div class="container-2">
                    <input type="text" placeholder="subject" class="@error('subject') is-invalid @enderror" name='subject' required>
                    <textarea rows="5" placeholder="message" class="@error('message') is-invalid @enderror" name='message' required></textarea>
                </div>
                <div class="container-3">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/form_handling.js') }}"></script>

  </body>
</html>
