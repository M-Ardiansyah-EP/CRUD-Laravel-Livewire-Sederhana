<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>
        .table-sortable>thead>tr>th.sort {
            cursor: pointer;
            position: relative;
        }

        .table-sortable>thead>tr>th.sort:after,
        .table-sortable>thead>tr>th.sort:after,
        .table-sortable>thead>tr>th.sort:after {
            content: ' ';
            position: absolute;
            height: 0;
            width: 0;
            right: 10px;
            top: 16px;
        }

        .table-sortable>thead>tr>th.sort:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #ccc;
            border-bottom: 0px solid transparent;
        }

        .table-sortable>thead>tr>th:hover:after {
            border-top: 5px solid #888;
        }

        .table-sortable>thead>tr>th.sort.asc:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 0px solid transparent;
            border-bottom: 5px solid #333;
        }

        .table-sortable>thead>tr>th.sort.asc:hover:after {
            border-bottom: 5px solid #888;
        }

        .table-sortable>thead>tr>th.sort.desc:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #333;
            border-bottom: 5px solid transparent;
        }
        
        .modern-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .modern-card-header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            padding: 1rem 1.5rem;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .modern-card-body {
            padding: 1.5rem;
            background: #fff;
        }

        .modern-alert {
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .table-modern thead {
            background: #f7f7f7;
        }
        
        .table-modern tbody tr:hover {
            background: #f1f1f1;
        }
    </style>

</head>

<body class="bg-secondary">
    @livewire('employee')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</body>

</html>