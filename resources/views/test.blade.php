
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="plugins/intl-tel-input-master/build/css/intlTelInput.css">
</head>


<body>

    <input type="tel" id="phone" placeholder="" value="+92" id="telephone">






<!-- Use as a jQuery plugin -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="plugins/intl-tel-input-master/build/js/intlTelInput-jquery.min.js"></script> 

    <script>
        $( document ).ready(function() {
    
            $("#phone").intlTelInput({
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/14.0.6/js/intlTelInput-jquery.js"
    });
});
        
      
    </script>
</body>
</html>