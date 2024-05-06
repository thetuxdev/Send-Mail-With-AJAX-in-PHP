<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Contact Us Ajax</h1>
                <form method="post" action="send.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="object" class="form-label">Object</label>
                        <input type="text" class="form-control" id="object" name="object" placeholder="Object">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Send</button>
                    </div>
                </form>

                <div class="alert alert-success d-none" role="alert">
                    Email inviata con successo
                </div>

                <div class="alert alert-danger d-none" role="alert">
                    Si è verificato un errore...
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script>
        $('form').submit(function(event) {
            var formData = {
                email: $('#email').val(),
                object: $('#object').val(),
                message: $('#message').val(),
            }

            $.ajax({
                type: 'post',
                url: 'send.php',
                data: formData,
                dataType: 'json',
                encode: true
            }).done(function(data) {
                if (data.success == true) {
                    $('.alert-success').toggleClass('d-none');
                } else {
                    $('.alert-danger').toggleClass('d-none');
                }
            });

            event.preventDefault();
        });
    </script>
</body>

</html>