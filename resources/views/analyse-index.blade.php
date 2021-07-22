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
                            <div class="col-3"></div>
                            <div class="col-6" style="padding-top: 20px;">
                                <div class="card ">
                                    <h4 class="card-header">Wellcome to analyser page</h4>
                                    <div class="card-body">

                                        <form method="post" action="{{ route('analyse-output') }}">
                                          @csrf
                                          <div class="form-group">
                                            <label for="exampleInputEmail1">String</label>
                                            <input type="string" class="form-control" id="string" name="string">
                                            <small id="emailHelp" class="form-text text-muted">Enter a string to anlayse its data</small>
                                            @error('string')
                                                <small id="emailHelp" class="form-text text-danger">
                                                    <br>
                                                    {{ $message }}
                                                </small>
                                            @enderror

                                          </div>
                                          <div class="form-group" style="padding-top: 20px;">
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </body>

</html>
