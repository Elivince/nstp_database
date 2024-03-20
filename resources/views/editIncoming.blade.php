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
  <form id="editRecordForm" action="/viewEditIncoming/{{$incoming->incoming_no}}" method="POST">
    @csrf
    @method('PUT')
    <h2>Edit a record</h2>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" placeholder="From what office" name="from_office" value="{{$incoming->from_office}}">
    </div>

    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input class="input-field" type="text" placeholder="Subject" name="subject" value="{{$incoming->subject}}">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Remarks" name="remarks" value="{{$incoming->remarks}}">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Action" name="action" value="{{$incoming->action}}">
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input class="input-field" type="text" placeholder="Action_date" name="action_date" value="{{$incoming->action_date}}">
    </div>

    <button type="submit">Save</button>
  </form>
</body>

</html>