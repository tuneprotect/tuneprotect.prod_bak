require('./main');
import {$, $$,getPortalReport} from "./helper"

document.addEventListener("DOMContentLoaded", async () => {

    const $btnMore = $('#btn-more');

    const zipcode_data = await getPortalReport();

    console.log(zipcode_data);

    // const data = JSON.parse($('#div_result').innerHTML);
    // $('#div_result').remove();

    // const $postalCode = '37000';
    // if ($postalCode) {
    //     const zipcode_data = await getZipcodeData();

    //     console(zipcode_data);
    //     // $postalCode.addEventListener("change", function (e) {
    //     //     const value = $postalCode.value;
    //     //     if (value.length === 5) {
    //     //         const location_data = zipcode_data[value];
    //     //         if (location_data !== undefined) {
    //     //             let items = ['<option value="">' + $('#ctrl_province').getAttribute('data-please-select') + '</option>'];
    //     //             location_data.map(v => {
    //     //                 items.push(`<option value="${v.district.code}">${v.district.locales[locale]}, ${v.province.locales[locale]}</option>`);
    //     //             });

    //     //             $('#ctrl_province').innerHTML = items.join('');
    //     //         }
    //     //     }

    //     // });
    // }
  
});



