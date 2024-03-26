<script src="{{ asset('backend/public') }}/graindashboard/js/graindashboard.js"></script>
<script src="{{ asset('backend/public') }}/graindashboard/js/graindashboard.vendor.js"></script>

<!-- DEMO CHARTS -->
<script src="{{ asset('backend/public') }}/demo/resizeSensor.js"></script>
<script src="{{ asset('backend/public') }}/demo/chartist.js"></script>
<script src="{{ asset('backend/public') }}/demo/chartist-plugin-tooltip.js"></script>
<script src="{{ asset('backend/public') }}/demo/gd.chartist-area.js"></script>
<script src="{{ asset('backend/public') }}/demo/gd.chartist-bar.js"></script>
<script src="{{ asset('backend/public') }}/demo/gd.chartist-donut.js"></script>
<script>
    $.GDCore.components.GDChartistArea.init('.js-area-chart');
    $.GDCore.components.GDChartistBar.init('.js-bar-chart');
    $.GDCore.components.GDChartistDonut.init('.js-donut-chart');
</script>
@stack('scripts')
