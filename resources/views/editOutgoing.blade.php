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
<form id="editRecordForm" action="/viewEditOutgoing/{{$outgoing->outgoing_no}}" method="POST">
      @csrf
      @method('PUT')
<h2>Edit a record</h2>
<div class="input-container">
  <i class="fa fa-user icon"></i>
  <input class="input-field" type="text" placeholder="To what Office" name="to_office" value="{{$outgoing->to_office}}">
</div>

<div class="input-container">
  <i class="fa fa-envelope icon"></i>
  <input class="input-field" type="text" placeholder="For" name="for" value="{{$outgoing->for}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Subject" name="subject" value="{{$outgoing->subject}}">
</div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Remarks" name="remarks" value="{{$outgoing->remarks}}">
</div>

<div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="text" placeholder="Action" name="action" value="{{$outgoing->action}}">
  </div>

<div class="input-container">
  <i class="fa fa-key icon"></i>
  <input class="input-field" type="text" placeholder="Date of Action" name="action_date" value="{{$outgoing->action_date}}">
</div>

<button type="submit">Save</button>
</form>
</body>
</html>