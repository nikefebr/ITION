<!-- Page Script -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/datatables.js') }}"></script>

<!-- script tambahan -->
   <script>
       $(document).ready(function () {
      $("#example1").DataTable({
       "aLengthMenu": [[5, 10, 25, 50, 75, -1], [5, 10, 25, 50, 75, "All"]],
       "iDisplayLength": 5
     });
      });
   
</script>