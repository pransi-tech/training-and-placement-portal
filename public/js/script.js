const checkboxes = document.querySelectorAll('.skill-checkbox');
const hiddenInput = document.getElementById('area_of_expertise');

checkboxes.forEach((checkbox) => {
    checkbox.addEventListener('change', function () {
        let selected = [];

        checkboxes.forEach((cb) => {
            if (cb.checked) {
                selected.push(cb.value);
            }
        });

        hiddenInput.value = selected.join(', ');
    });
});