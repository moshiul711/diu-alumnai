
<!--END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="footer">
    <p>&copy;  Daffodil Alumni Association 2019 &nbsp;</p>
</div>
<!--END FOOTER -->


<!-- GLOBAL SCRIPTS -->
<script src="{{ asset('alumniAdmin/') }}/plugins/jquery-2.0.3.min.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!-- END GLOBAL SCRIPTS -->
<script src="{{ asset('alumniAdmin/') }}/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>


<!-- PAGE LEVEL SCRIPTS -->
<script src="{{ asset('alumniAdmin/') }}/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/bootstrap-wysihtml5-hack.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/flot/jquery.flot.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/flot/jquery.flot.resize.js"></script>
<script src="{{ asset('alumniAdmin/') }}/plugins/flot/jquery.flot.time.js"></script>
<script  src="{{ asset('alumniAdmin/') }}/plugins/flot/jquery.flot.stack.js"></script>
<script src="{{ asset('alumniAdmin/') }}/js/for_index.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    $(function () { formWysiwyg(); });
</script>

</body>

<!-- END BODY -->
</html>
