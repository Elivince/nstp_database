<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 text-center dark:text-gray-200 leading-tight">
            {{ __('Serial Number Request Tracker') }}
        </h2>
        <style>/* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }
            
            /* Modal Content/Box */
            .modal-content {
              background-color: #fefefe;
              margin: 15% auto; /* 15% from the top and centered */
              padding: 20px;
              border: 1px solid #888;
              width: 80%; /* Could be more or less, depending on screen size */
            }
            
            /* The Close Button */
            .close {
              color: #aaa;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }
            
            .close:hover,
            .close:focus {
              color: black;
              text-decoration: none;
              cursor: pointer;
            }</style>
        <button id="myBtn">Open Modal</button>
    </x-slot>

    <div class="flex">
        <div class="bg-gray-200 dark:bg-gray-900 w-1/4 p-6">
            <ul>
                <li><a href="{{ url('dashboard') }}" class="text-white hover:text-red-700">Button 1</a></li>
                <li><a href="#" class="text-white hover:text-red-700">Button 2</a></li>
                <li><a href="{{ url('tracker') }}" class="text-white hover:text-red-700">Button 3</a></li>

            </ul>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Component</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Campus</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Year Graduated</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Serial Number</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Remarks</th>
                                <th class="px-6 py-3 bg-gray-50 dark:bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Issued by</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                            <!-- Add your data here -->
                            <tr>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->date }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->name }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->component }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->campus }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->course }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->gradyear }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->serialno }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->remarks }}</td>
                                <td class="px-6 py-2 text-center whitespace-no-wrap border-b border-gray-200 dark:border-gray-600">{{ $request->issuedby }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><form action="/action_page.php">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Register</button>
</form></p>
  </div>

</div>
<script>
// Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }</script>
</x-app-layout>