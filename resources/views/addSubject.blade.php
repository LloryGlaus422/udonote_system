<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<body>


<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn">Open Modal</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Add Subject</h2>
    </div>
    <div class="modal-body">
      <form class="form">
          <input type="text" id="addSub" name="add" placeholder="Add Subject.." autocomplete="off">
      </form>
    </div>
    <div class="modal-footer">
      <h3>
          <button class="button3">Add</button>
      </h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
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
}
</script>

</body>