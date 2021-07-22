<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Analyser</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    	<link rel="icon" href="{{ asset('favicon.png') }}" type="icon/ico" sizes="16x16">
    </head>

    <body class="en-us">
    	<div class="body">
    		<div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8" style="padding-top: 20px;">
                                <div class="card ">
                                    <h4 class="card-header">Result</h4>
                                    <div class="card-body">

                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <th scope="col">symbol</th>
                                              <th scope="col">times</th>
                                              <th scope="col">data</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($results as $result)
                                                <tr>
                                                  <th scope="row">{{ $result['symbol'] }}</th>
                                                  <td>{{ $result['times'] }}</td>
                                                  <td>{{ $result['data'] }}</td>
                                                </tr>
                                            @endforeach
                                          </tbody>
                                        </table>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ route('analyse-index') }}" class="btn btn-secondary">
                                            Analyse another string
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </body>

</html>
