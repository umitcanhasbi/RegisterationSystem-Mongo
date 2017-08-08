<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Departments</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body>
  <div class="container">
    <h2><strong>Departments</strong></h2>
    <iframe style="text-align:center" src="https://ghbtns.com/github-btn.html?user=umitcanhasbi&repo=LaravelCourseRegistiration&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
    
    <hr>

    <form style="text-align:center" method="POST" action="/addDepartment" class="form-inline">

      {{ csrf_field() }}
      <h4>Department:</h4>
       <h5>
      <label for="name">Department Name:</label>
      <input style="width:245px" type="text" class="form-control" id="name" name="name" placeholder="Enter a department name :)">

      <label for="info">Department Info:</label>
      <input style="width:245px" type="text" class="form-control" id="info" name="info" placeholder="Enter info:)">
      </h5>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <hr>
    
    <table class="table">
      <thead>
        <tr>
          <th style="text-align:center">Department</th>
          <th style="text-align:center">Remove</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($departments as $department)
        <tr>
          <td style="text-align:center">
            <form method="POST" action="/editDepartment/{{$department->id}}" class="form-inline">
              {{ csrf_field() }}
              <label for="name"></label>
              <input type="text" class="form-control" id="name" name="name" value="{{$department->name}}">

              <label for="info"></label>
              <input type="text" class="form-control" id="info" name="info" value="{{$department->info}}">


              <button type="submit" class="btn btn-info">Edit</button>

            </form>
          <td style="text-align:center"><a href="/deleteDepartment/{{$department->id}}"><button type="button" name="edit" class="btn btn-danger">Delete</button></a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  </body>
</html>
