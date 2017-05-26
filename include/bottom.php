<?php
/**
 * simple-mailing - A simple email manager
 *
 * @package  simple-mailing
 * @author   Luc Gerrits <luc.gerrits@orange.fr>
 */
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/jquery.dataTables.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/static/js/ie10-viewport-bug-workaround.js"></script>

<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#search-table').DataTable( {
        "ajax": 'api_search.php',
        "columns": [
            { "data": "name" },
            { "data": "email" },
            { "data": "social" },
            { "data": "lang" },
            { "data": "del_id" }
            ]
    });

    $('#templates-table').DataTable( {
        "ajax": 'api_templates.php',
        "columns": [
            { "data": "name" },
            { "data": "mod_id" },
            { "data": "del_id" }
            ]
    });

    $('#hist-table').DataTable( {
        "ajax": 'api_email_sended.php',
        "columns": [
            { "data": "date" },
            { "data": "name" },
            { "data": "to" },
            { "data": "total_sended" }
            ]
    });

    if ($("#editor1").length)
    {
        CKEDITOR.replace('editor1',
        {
            toolbar : [
            { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
            { name: 'editing', items : [ 'Find','SelectAll' ] },
            { name: 'insert', items : [ 'Image','Table','HorizontalRule','Smiley','SpecialChar'
                    ] },
            { name: 'basicstyles', items : ["CreateDiv","JustifyLeft","JustifyCenter","JustifyRight","JustifyBlock",'Bold','Italic','Strike','-','RemoveFormat' ] },
            { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
            { name: 'links', items : [ 'Link','Unlink' ] },
            { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
            { name: 'tools', items : [ 'Maximize',"Source" ] }
            ]
        });
    }
});

</script>

  </body>
</html>
