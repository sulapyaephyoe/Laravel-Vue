<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>k blog</title>     
    </head>
    <body>
       <div id="app">
          <example-component>hello componenet</example-component>
       </div>
    </body>
    <script src="{{mix('/js/app.js')}}"></script>
</html>
