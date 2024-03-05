<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <p>
  <form id="addRecordForm" action="/addRequest" method="POST">
    @csrf
    <h2>Add a record</h2>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="Name" name="name">
    </div>

    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" placeholder="Component" name="component">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Campus" name="campus">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Course" name="course">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Year Graduated" name="graduation_year">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Serial Number" name="serial_no">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <select class="input-field" name="remarks">
        <option value="approved" class="text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Approved</option>
        <option value="pending" class="text-yellow-700 bg-yellow-100">Pending</option>
        <option value="expired" class="text-gray-700 bg-gray-100 dark:bg-gray-700 dark:text-gray-100">Expired</option>
        <option value="denied" class="text-red-700 bg-red-100 dark:bg-red-700 dark:text-red-100">Denied</option>
      </select>
    </div>

    <button type="submit">Add</button>
    <button type="submit">Edit</button>
  </form>
  </p>
</body>

</html>