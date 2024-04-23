<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>translate</title>
</head>
<body>



<div class="container">
    <div class="row m-4 bg-light">
        <h3 class="text-center p-2">Duẩn translates</h3>
        <div style="border: 1px solid rgb(141, 127, 127)"></div>
        <form action="{{route('translated')}}" class="row" method="post">
            @csrf
            <div class="col-lg-6 col-md-12 text-center">
                <h4>auto</h4>
                @if (isset($item))
                <textarea name="content" id="" cols="50" rows="10">{{$item}}</textarea>
                @else
                <textarea name="content" id="" cols="50" rows="10"></textarea>
                @endif
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <select name="language" class="mb-3 mt-2">
                    @if (isset($language))
                    <option value="en" {{$language === 'en' ? 'selected' : ""}}>en</option>
                    <option value="vi" {{$language === 'vi' ? 'selected' : ""}}>vi</option>
                    @else
                    <option value="en">en</option>
                    <option value="vi">vi</option>
                    @endif
                </select>
                <div class=""></div>
                @if (isset($result))
                <textarea name="output" id="" cols="50" rows="10">{{$result}}</textarea>
                @else
                <textarea name="output" id="" cols="50" rows="10"></textarea>
                @endif
                <input type="submit" class="btn btn-danger" value="Dịch">
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
