<!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('/js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/bootstrap.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/jquery.slimscroll.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/main-js.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/DataTables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/js/DataTables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
        

</body>

<script>
        $(document).ready(function () {
            $("#report_table").DataTable();
        });
    </script>

</html>