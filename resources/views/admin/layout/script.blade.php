

<!-- Mainly scripts -->
<script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Flot -->
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ URL::asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>

<!-- Peity -->
<script src="{{ URL::asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('js/demo/peity-demo.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ URL::asset('js/inspinia.js') }}"></script>
<script src="{{ URL::asset('js/plugins/pace/pace.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ URL::asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- GITTER -->
<script src="{{ URL::asset('js/plugins/gritter/jquery.gritter.min.js') }}"></script>

<!-- Sparkline -->
<script src="{{ URL::asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Sparkline demo data  -->
<script src="{{ URL::asset('js/demo/sparkline-demo.js') }}"></script>
<!-- data table -->
<script src="{{ URL::asset('js/plugins/dataTables/datatables.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ URL::asset('js/plugins/toastr/toastr.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('js/plugins/summernote/summernote.min.js') }}"></script>
<!-- select multiple -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- FooTable -->
<script src="{{ URL::asset('js/plugins/footable/footable.all.min.js') }}"></script>
<!-- Data picker -->
<script src="{{ URL::asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
<!-- Demo Chart -->
<script src="{{ URL::asset('js/demo/chartjs-demo.js') }}"></script>
<!-- Date range use moment.js same as full calendar plugin -->
<script src="{{ URL::asset('js/plugins/fullcalendar/moment.min.js') }}"></script>
<!-- Date range picker -->
<script src="{{ URL::asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- jquery -->
<script src="{{ URL::asset('js/plugins/jqGrid/i18n/grid.locale-en.js') }}"></script>

<script src="{{ URL::asset('js/plugins/jqGrid/jquery.jqGrid.min.js') }}"></script>
<!-- Tags Input -->
<script src="{{ URL::asset('js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- TouchSpin -->
<script src="{{ URL::asset('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- icheck -->
<script src="{{ URL::asset('js/plugins/iCheck/icheck.min.js') }}"></script>

<script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
        
<script type="text/javascript">
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>


<script>
$(document).ready(function(){

    $('.summernote').summernote();

});
</script>

<script>

$(function(){

    $('#toggleSpinners').on('click', function(){

        $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
        $('#ibox2').children('.ibox-content').toggleClass('sk-loading');

    })

})

</script>

<script>
$(document).ready(function() {

    $('.footable').footable();
    $('.footable2').footable();

});

</script>
<script>
            $("input[name='quantity']").TouchSpin();
</script>
<script>
$('#data_5 .input-daterange').datepicker({
keyboardNavigation: false,
forceParse: false,
autoclose: true
});
</script>

<script>
$(document).ready(function(){

$('.tagsinput').tagsinput({
    tagClass: 'label label-primary'
});

var $image = $(".image-crop > img")
$($image).cropper({
    aspectRatio: 1.618,
    preview: ".img-preview",
    done: function(data) {
        // Output the result data for cropping image.
    }
});

var $inputImage = $("#inputImage");
if (window.FileReader) {
    $inputImage.change(function() {
        var fileReader = new FileReader(),
                files = this.files,
                file;

        if (!files.length) {
            return;
        }

        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
            fileReader.readAsDataURL(file);
            fileReader.onload = function () {
                $inputImage.val("");
                $image.cropper("reset", true).cropper("replace", this.result);
            };
        } else {
            showMessage("Please choose an image file.");
        }
    });
} else {
    $inputImage.addClass("hide");
}

$("#download").click(function() {
    window.open($image.cropper("getDataURL"));
});

$("#zoomIn").click(function() {
    $image.cropper("zoom", 0.1);
});

$("#zoomOut").click(function() {
    $image.cropper("zoom", -0.1);
});

$("#rotateLeft").click(function() {
    $image.cropper("rotate", 45);
});

$("#rotateRight").click(function() {
    $image.cropper("rotate", -45);
});

$("#setDrag").click(function() {
    $image.cropper("setDragMode", "crop");
});

$('#data_1 .input-group.date').datepicker({
    todayBtn: "linked",
    keyboardNavigation: false,
    forceParse: false,
    calendarWeeks: true,
    autoclose: true
});

$('#data_2 .input-group.date').datepicker({
    startView: 1,
    todayBtn: "linked",
    keyboardNavigation: false,
    forceParse: false,
    autoclose: true,
    format: "dd/mm/yyyy"
});

$('#data_3 .input-group.date').datepicker({
    startView: 2,
    todayBtn: "linked",
    keyboardNavigation: false,
    forceParse: false,
    autoclose: true
});

$('#data_4 .input-group.date').datepicker({
    minViewMode: 1,
    keyboardNavigation: false,
    forceParse: false,
    forceParse: false,
    autoclose: true,
    todayHighlight: true
});

$('#data_5 .input-daterange').datepicker({
    keyboardNavigation: false,
    forceParse: false,
    autoclose: true
});

var elem = document.querySelector('.js-switch');
var switchery = new Switchery(elem, { color: '#1AB394' });

var elem_2 = document.querySelector('.js-switch_2');
var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

var elem_3 = document.querySelector('.js-switch_3');
var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

var elem_4 = document.querySelector('.js-switch_4');
var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
    switchery_4.disable();

$('.i-checks').iCheck({
    checkboxClass: 'icheckbox_square-green',
    radioClass: 'iradio_square-green'
});

$('.demo1').colorpicker();

var divStyle = $('.back-change')[0].style;
$('#demo_apidemo').colorpicker({
    color: divStyle.backgroundColor
}).on('changeColor', function(ev) {
            divStyle.backgroundColor = ev.color.toHex();
        });

$('.clockpicker').clockpicker();

$('input[name="daterange"]').daterangepicker();

$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

$('#reportrange').daterangepicker({
    format: 'MM/DD/YYYY',
    startDate: moment().subtract(29, 'days'),
    endDate: moment(),
    minDate: '01/01/2012',
    maxDate: '12/31/2015',
    dateLimit: { days: 60 },
    showDropdowns: true,
    showWeekNumbers: true,
    timePicker: false,
    timePickerIncrement: 1,
    timePicker12Hour: true,
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    opens: 'right',
    drops: 'down',
    buttonClasses: ['btn', 'btn-sm'],
    applyClass: 'btn-primary',
    cancelClass: 'btn-default',
    separator: ' to ',
    locale: {
        applyLabel: 'Submit',
        cancelLabel: 'Cancel',
        fromLabel: 'From',
        toLabel: 'To',
        customRangeLabel: 'Custom',
        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        firstDay: 1
    }
}, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
});

$(".select2_demo_1").select2();
$(".select2_demo_2").select2();
$(".select2_demo_3").select2({
    placeholder: "Select a state",
    allowClear: true
});


$(".touchspin1").TouchSpin({
    buttondown_class: 'btn btn-white',
    buttonup_class: 'btn btn-white'
});

$(".touchspin2").TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%',
    buttondown_class: 'btn btn-white',
    buttonup_class: 'btn btn-white'
});

$(".touchspin3").TouchSpin({
    verticalbuttons: true,
    buttondown_class: 'btn btn-white',
    buttonup_class: 'btn btn-white'
});

$('.dual_select').bootstrapDualListbox({
    selectorMinimalHeight: 160
});


});

$('.chosen-select').chosen({width: "100%"});

$("#ionrange_1").ionRangeSlider({
min: 0,
max: 5000,
type: 'double',
prefix: "$",
maxPostfix: "+",
prettify: false,
hasGrid: true
});

$("#ionrange_2").ionRangeSlider({
min: 0,
max: 10,
type: 'single',
step: 0.1,
postfix: " carats",
prettify: false,
hasGrid: true
});

$("#ionrange_3").ionRangeSlider({
min: -50,
max: 50,
from: 0,
postfix: "°",
prettify: false,
hasGrid: true
});

$("#ionrange_4").ionRangeSlider({
values: [
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
],
type: 'single',
hasGrid: true
});

$("#ionrange_5").ionRangeSlider({
min: 10000,
max: 100000,
step: 100,
postfix: " km",
from: 55000,
hideMinMax: true,
hideFromTo: false
});

$(".dial").knob();

var basic_slider = document.getElementById('basic_slider');

noUiSlider.create(basic_slider, {
start: 40,
behaviour: 'tap',
connect: 'upper',
range: {
    'min':  20,
    'max':  80
}
});

var range_slider = document.getElementById('range_slider');

noUiSlider.create(range_slider, {
start: [ 40, 60 ],
behaviour: 'drag',
connect: true,
range: {
    'min':  20,
    'max':  80
}
});

var drag_fixed = document.getElementById('drag-fixed');

noUiSlider.create(drag_fixed, {
start: [ 40, 60 ],
behaviour: 'drag-fixed',
connect: true,
range: {
    'min':  20,
    'max':  80
}
});


</script>
<script>

$('.money > div').click(function() {
$('.money > input:eq('+$('.money > div').index(this)+')').focus();
});

$('.numberOnly').on('keydown', function(e) {

if (this.selectionStart || this.selectionStart == 0) {
// selectionStart won't work in IE < 9

var key = e.which;
var prevDefault = true;

var thouSep = ",";  // your seperator for thousands
var deciSep = ".";  // your seperator for decimals
var deciNumber = 3; // how many numbers after the comma

var thouReg = new RegExp(thouSep,"g");
var deciReg = new RegExp(deciSep,"g");

function spaceCaretPos(val, cPos) {
/// get the right caret position without the spaces

if (cPos > 0 && val.substring((cPos-1),cPos) == thouSep)
cPos = cPos-1;

if (val.substring(0,cPos).indexOf(thouSep) >= 0) {
cPos = cPos - val.substring(0,cPos).match(thouReg).length;
}

return cPos;
}

function spaceFormat(val, pos) {
/// add spaces for thousands

if (val.indexOf(deciSep) >= 0) {
var comPos = val.indexOf(deciSep);
var int = val.substring(0,comPos);
var dec = val.substring(comPos);
} else{
var int = val;
var dec = "";
}
var ret = [val, pos];

if (int.length > 3) {

var newInt = "";
var spaceIndex = int.length;

while (spaceIndex > 3) {
spaceIndex = spaceIndex - 3;
newInt = thouSep+int.substring(spaceIndex,spaceIndex+3)+newInt;
if (pos > spaceIndex) pos++;
}
ret = [int.substring(0,spaceIndex) + newInt + dec, pos];
}
return ret;
}

$(this).on('keyup', function(ev) {

if (ev.which == 8) {
// reformat the thousands after backspace keyup

var value = this.value;
var caretPos = this.selectionStart;

caretPos = spaceCaretPos(value, caretPos);
value = value.replace(thouReg, '');

var newValues = spaceFormat(value, caretPos);
this.value = newValues[0];
this.selectionStart = newValues[1];
this.selectionEnd   = newValues[1];
}
});

if ((e.ctrlKey && (key == 65 || key == 67 || key == 86 || key == 88 || key == 89 || key == 90)) ||
(e.shiftKey && key == 9)) // You don't want to disable your shortcuts!
prevDefault = false;

if ((key < 37 || key > 40) && key != 8 && key != 9 && prevDefault) {
e.preventDefault();

if (!e.altKey && !e.shiftKey && !e.ctrlKey) {

var value = this.value;
if ((key > 95 && key < 106)||(key > 47 && key < 58) ||
(deciNumber > 0 && (key == 110 || key == 188 || key == 190))) {

var keys = { // reformat the keyCode
  48: 0, 49: 1, 50: 2, 51: 3,  52: 4,  53: 5,  54: 6,  55: 7,  56: 8,  57: 9,
  96: 0, 97: 1, 98: 2, 99: 3, 100: 4, 101: 5, 102: 6, 103: 7, 104: 8, 105: 9,
  110: deciSep, 188: deciSep, 190: deciSep
};

var caretPos = this.selectionStart;
var caretEnd = this.selectionEnd;

if (caretPos != caretEnd) // remove selected text
value = value.substring(0,caretPos) + value.substring(caretEnd);

caretPos = spaceCaretPos(value, caretPos);

value = value.replace(thouReg, '');

var before = value.substring(0,caretPos);
var after = value.substring(caretPos);
var newPos = caretPos+1;

if (keys[key] == deciSep && value.indexOf(deciSep) >= 0) {
  if (before.indexOf(deciSep) >= 0) newPos--;
  before = before.replace(deciReg, '');
  after = after.replace(deciReg, '');
}
var newValue = before + keys[key] + after;

if (newValue.substring(0,1) == deciSep) {
  newValue = "0"+newValue;
  newPos++;
}

while (newValue.length > 1 && newValue.substring(0,1) == "0" && newValue.substring(1,2) != deciSep) {
  newValue = newValue.substring(1);
  newPos--;
}

if (newValue.indexOf(deciSep) >= 0) {
  var newLength = newValue.indexOf(deciSep)+deciNumber+1;
  if (newValue.length > newLength) {
    newValue = newValue.substring(0,newLength);
  }
}

newValues = spaceFormat(newValue, newPos);

this.value = newValues[0];
this.selectionStart = newValues[1];
this.selectionEnd   = newValues[1];
}
}
}

$(this).on('blur', function(e) {

if (deciNumber > 0) {
var value = this.value;

var noDec = "";
for (var i = 0; i < deciNumber; i++) noDec += "0";

if (value == "0" + deciSep + noDec) {
this.value = ""; //<-- put your default value here
} else if(value.length > 0) {
if (value.indexOf(deciSep) >= 0) {
  var newLength = value.indexOf(deciSep) + deciNumber + 1;
  if (value.length < newLength) {
    while (value.length < newLength) value = value + "0";
    this.value = value.substring(0,newLength);
  }
}
else this.value = value + deciSep + noDec;
}
}
});
}
});

$('.price > input:eq(0)').focus();

</script>
<script src="{{ URL::asset('js/plugins/chartJs/Chart.min.js') }}"></script>
<script src="{{ URL::asset('js/demo/flot-demo.js') }}"></script>

<script src="{{ URL::asset('js/plugins/slick/slick.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

<script>
    $(document).ready(function(){


        $('.product-images').slick({
            dots: true
        });

    });

</script>