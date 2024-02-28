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
          </ul>
    </div>
<form id="editRecordForm" action="/viewEditRequest/{{$request->request_id}}" method="POST">
      @csrf
      @method('PUT')
<h2>Edit a record</h2>
<div class="input-container">
  <i class="fa fa-user icon"></i>
  <input class="input-field" type="text" placeholder="Name" name="name" value="{{$request->name}}">
</div>

<div class="input-container">
  <i class="fa fa-envelope icon"></i>
  <input class="input-field" type="text" placeholder="Component" name="component" value="{{$request->component}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Campus" name="campus" value="{{$request->campus}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Course" name="course" value="{{$request->course}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Year Graduated" name="graduation_year" value="{{$request->graduation_year}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Serial Number" name="serial_no" value="{{$request->serial_no}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Remarks" name="remarks" value="{{$request->remarks}}">
</div>

<button type="submit">Save</button>
</form>
</body>
</html>