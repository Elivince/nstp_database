<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="bg-gray-200 dark:bg-gray-900 w-1/4 p-6">
        <ul>
          <li><a href="{{ url('dashboard') }}" class="text-white hover:text-red-700">Button 1</a></li>
          <li><a href="{{ url('tracker') }}" class="text-white hover:text-red-700">Button 2</a></li>
          <li><a href="{{ url('addRecord') }}" class="text-white hover:text-red-700">Button 3</a></li>
        </ul>
    </div>
  <p><form id="addRecordForm" action="/addRequest" method="POST">
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
  <input class="input-field" type="text" placeholder="Remarks" name="marks">
</div>

<button type="submit">Add</button>
<button type="submit">Edit</button>
</form></p>
</body>
</html>