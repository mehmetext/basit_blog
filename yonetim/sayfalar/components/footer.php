</div>
</div>
</div>

<!-- jquery vendor -->
<script src="<?= URL ?>/yonetim/assets/js/lib/jquery.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="<?= URL ?>/yonetim/assets/js/lib/menubar/sidebar.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->

<script src="<?= URL ?>/yonetim/assets/js/lib/bootstrap.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/scripts.js"></script>
<!-- bootstrap -->

<script src="<?= URL ?>/yonetim/assets/js/lib/calendar-2/moment.latest.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/calendar-2/pignose.init.js"></script>


<script src="<?= URL ?>/yonetim/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/weather/weather-init.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/circle-progress/circle-progress.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/circle-progress/circle-progress-init.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/chartist/chartist.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/sparklinechart/sparkline.init.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= URL ?>/yonetim/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
<!-- scripit init-->
<script src="<?= URL ?>/yonetim/assets/js/dashboard2.js"></script>

<script src="<?= URL ?>/inc/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[data-ckeditor]'), {

        })
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>

</html>