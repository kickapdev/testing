<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="max-width:600px;margin:60px auto;">
        <div class="form-check">
            <label id="radio">Kapan Nikah Ni Gan ?</label>
            <br>
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Nunggu ada yang mau
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Nunggu dapet endorse
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                Nunggu dikatain
            </label>
        </div>

        <h1>Custom Radio Buttons</h1>
        <label class="container">One
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="container">Two
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="container">Three
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="container">Four
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>
</body>

</html>