</div>
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="<?= base_url() ?>assets/backend/assets/js/jquery-1.10.2.js"></script>

<!-- Bootstrap Js -->
<script src="<?= base_url() ?>assets/backend/assets/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>assets/backend/assets/materialize/js/materialize.min.js"></script>




<!-- Metis Menu Js -->
<script src="<?= base_url() ?>assets/backend/assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="<?= base_url() ?>assets/backend/assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?= base_url() ?>assets/backend/assets/js/morris/morris.js"></script>

<script src="<?= base_url() ?>assets/backend/assets/js/easypiechart.js"></script>
<script src="<?= base_url() ?>assets/backend/assets/js/easypiechart-data.js"></script>

<script src="<?= base_url() ?>assets/backend/assets/js/Lightweight-Chart/jquery.chart.js"></script>

<!-- Custom Js -->
<script src="<?= base_url() ?>assets/backend/assets/js/custom-scripts.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('.ckeditor'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });
</script>
</body>

</html>