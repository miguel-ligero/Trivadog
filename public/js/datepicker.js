$(document).ready(function () {
  $(function () {
    var dateFormat = "dd/mm/yy",
      from = $("#inputfrom").datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          dateFormat: dateFormat,
          minDate: 0
        })
        .on("change", function () {
          to.datepicker("option", "minDate", getDate(this));
        }),
      to = $("#inputto").datepicker({
         // defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1,
          dateFormat: dateFormat,
          minDate: +1
        })
        .on("change", function () {
          from.datepicker("option", "maxDate", getDate(this));
          console.log(from);
        });

    function getDate(element) {
      var date;
      try {
        date = $.datepicker.parseDate(dateFormat, element.value);
      } catch (error) {
        date = null;
      }
      return date;
    }
  });
});
