<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <style>
      html,body { height: 100vh;}
      .container { height: 100%;display: flex;justify-content: center; align-items: center;}
      label { text-align: center;display: block;}
      @media (max-width: 600px){.container { padding: 10%;} section { padding: 15% !important;} h1{ font-size: 1.6rem;}}
    </style>
    <title>DK-GROUP</title>
</head>
<body>
    <div class="container">
    <section style="padding: 10%;" class="border shadow align-middle">
    <H1 align="center">DK-GROUP</H1>
    <form method="POST" action="/contact">
     @csrf

  <div class="mb-1">
    <label  class="form-label" for="message">Sujet</label>
    <input type="text" class="form-control @error('sujet') is-invalid @enderror" name="sujet" id="sujet">
    @error('sujet')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

    <div class="mb-1">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
       @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
   </div>

  <div class="mb-1">
     <label for="description" class="form-label">Description</label>
     <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5"></textarea>
     @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>

  <div style="display:flex" class="mx-auto mb-3">
     <button type="submit" class="btn btn-primary mx-auto">Envoyer</button>
  </div>

</form>
@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible mb-1">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Votre message a été enregistré avec succée!</strong>
  un émail est envoyé à l'addresse suivante : olivia.declerck@dkgroup.fr
</div>
 @endif
    </section>
</div>
</body>
</html>