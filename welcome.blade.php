<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
    <div class="contaier mt-5">
        <form method="post" action="{{route('req')}}">
            <div class="form-group">
                <label>Adınız Ve Soyadınız</label>
                <input type="text" class="form-control" name="rr">
              </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
</body>
</html>
