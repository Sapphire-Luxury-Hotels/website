<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>SLH Clock In System</title>
  </head>

  <body>

    <div class="container col-md-5">
        <h1 class="text-center">Clock In</h1>
        <form action="clockIn();">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="employeeNumber" placeholder="123-456">
                <label for="employeeNumber">Employee Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="employeePin" placeholder="Password">
                <label for="employeePin">Employee PIN</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="employeeDate" placeholder="Date">
                <label for="employeeDate">Date</label>
            </div>
            <div class="form-floating mb-3">
                <input type="time" class="form-control" id="employeeTime" placeholder="Time">
                <label for="employeeTime">Time (GMT, 24hr)</label>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>