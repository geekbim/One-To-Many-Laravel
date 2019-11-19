<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One To Many Laravel</title>
    <link rel="stylesheet" href={{asset('/assets/css/bootstrap.css')}}>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3>One To Many Laravel</h3>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Tag</th>
                            <th>Jumah Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($article as $a)
                            <tr>
                                <td>{{$a->judul}}</td>
                                <td>
                                    @foreach ($a->tags as $t)
                                        {{$t->tag}}
                                    @endforeach
                                </td>
                                <td class="text-center">{{$a->tags->count()}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>