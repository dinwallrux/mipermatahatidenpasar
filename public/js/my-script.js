$(document).ready(function() {
    // Init Datatable
    $('#dataTable').DataTable();

    // Init TinyMCE
    tinymce.init({
        selector: 'textarea',
        plugins: 'pagebreak',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | pagebreak',
        menubar: false,
        pagebreak_split_block: true
    });
});