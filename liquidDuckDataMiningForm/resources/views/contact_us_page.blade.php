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
            <div class="form-wrapper">
                <form id="contact" method='post' action="{{ route('contactus.store') }}" novalidate>
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
                        <div class="input-container">
                            <input type="text" class="@error('name') is-invalid @enderror" name='name' required>
                            <span id="namelabel" class="floating-label">name</span>
                        </div>
                        <div class="input-container">
                            <input type="email" class="@error('email') is-invalid @enderror" name='email' required>
                            <span id="emaillabel" class="floating-label">email</span>
                        </div>
                        <div class="input-container">
                            <input type="text" class="@error('company') is-invalid @enderror" name='company' required>
                            <span id="companylabel" class="floating-label">company</span>
                        </div>
                        <div class="input-container">
                            <input type="text" class="@error('phone') is-invalid @enderror" name='phone' required>
                            <span id="phonelabel" class="floating-label">phone number</span>
                        </div>
                        
                    </div>
                    <div class="container-2">
                        <div class="input-container">
                            <input type="text" class="@error('subject') is-invalid @enderror" name='subject' required>
                            <span id="subjectlabel" class="floating-label">subject</span>
                        </div>
                        <div class="input-container">
                            <textarea rows="5" class="@error('message') is-invalid @enderror" name='message' required></textarea>
                            <span id="messagelabel" class="floating-label">message</span>
                        </div>
                    </div>
                    <div class="container-3">
                        <input id="submit" type="submit" value="Send">
                    </div>
                </form> 
                <div class="thankyou">
                    <div>
                        <img id="svg" src="{{ asset('liquidfishairplane.svg') }}">
                        <div id="text-wrapper">
                            <h1>Thank you for getting in touch!</h1>
                            <h3>we will get back to you soon!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/form_handling.js') }}"></script>

  </body>
</html>
