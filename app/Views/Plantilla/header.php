<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/b-3.0.2/datatables.min.css" rel="stylesheet">
 


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/85tcq3ma5zt98il1fzi3rwupq5jfvyfn4s6yjil56imnxray/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#descripcion_e',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        menubar: false, // Deshabilita el menú completo
        plugins: 'lists', // Solo incluye el plugin de listas, puedes agregar más si es necesario
        branding: false // Quita la marca TinyMCE del editor
      });

      tinymce.init({
        selector: '#descripcion',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
        menubar: false, // Deshabilita el menú completo
        plugins: 'lists', // Solo incluye el plugin de listas, puedes agregar más si es necesario
        branding: false // Quita la marca TinyMCE del editor
      });
    </script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->

    <link rel="stylesheet" type="text/css" href="css/template.css">

</head>
<body>