import './bootstrap';

import Alpine from 'alpinejs'
import mask from '@alpinejs/mask'
import flatpickr from "flatpickr";
import {Russian} from "flatpickr/dist/l10n/ru.js";

window.Alpine = Alpine

Alpine.plugin(mask)

Alpine.start()

document.addEventListener('DOMContentLoaded', () => {
    flatpickr("#birthday", {
        enableTime: false,
        dateFormat: "Y-m-d",
        locale: Russian
    });
})
