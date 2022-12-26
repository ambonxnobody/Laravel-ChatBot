 <!doctype html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>ChatBot AKNPSF Blitar (Akademi Komunitas Negeri Putra Sang Fajar Blitar)</title>
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 </head>

 <body>
 </body>

 <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.min.css') }}">
 <script>
     var botmanWidget = {
         aboutText: 'AKN Putra Sang Fajar Blitar',
         introMessage: "{{ $introMessage }}",
         title: 'CS AKNPSF Blitar',
         placeholderText: 'Kirim pesan...',
     };
 </script>

 <script src='{{ asset('js/widget.js') }}'></script>

 </html>
