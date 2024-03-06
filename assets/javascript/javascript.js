document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });

  var to, from;
to = $(".range-to-example").persianDatepicker({
    inline: true,
    altField: '.range-to-example-alt',
    altFormat: 'LLLL',
    initialValue: false,
    onSelect: function (unix) {
        to.touched = true;
        if (from && from.options && from.options.maxDate != unix) {
            var cachedValue = from.getState().selected.unixDate;
            from.options = {maxDate: unix};
            if (from.touched) {
                from.setDate(cachedValue);
            }
        }
    }
});
from = $(".range-from-example").persianDatepicker({
    inline: true,
    altField: '.range-from-example-alt',
    altFormat: 'LLLL',
    initialValue: false,
    onSelect: function (unix) {
        from.touched = true;
        if (to && to.options && to.options.minDate != unix) {
            var cachedValue = to.getState().selected.unixDate;
            to.options = {minDate: unix};
            if (to.touched) {
                to.setDate(cachedValue);
            }
        }
    }
});
