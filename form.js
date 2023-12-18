const form = document.getElementById('form');
const name = document.getElementById('name');
const jenis_kendaraan = document.getElementById('jenis_kendaraan');
const cc = document.getElementById('cc');
const warna = document.getElementById('warna');
const tanggal_produksi = document.getElementById('tanggal_produksi');

form.addEventListener('submit', e => {
    e.preventDefault();
    if (checkFormValidity()) {
        form.submit();
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const checkFormValidity = () => {
    let isValid = true;

    const nameValue = name.value.trim();
    const jenis_kendaraanValue = jenis_kendaraan.value.trim();
    const ccValue = cc.value.trim();
    const warnaValue = warna.value.trim();
    const tanggal_produksiValue = tanggal_produksi.value.trim();

    if (nameValue === '') {
        setError(name, 'Nama Kendaraan is required');
        isValid = false;
    } else {
        setSuccess(name);
    }

    if (jenis_kendaraanValue === '') {
        setError(jenis_kendaraan, 'Jenis Kendaraan is required');
        isValid = false;
    } else {
        setSuccess(jenis_kendaraan);
    }

    if (ccValue === '') {
        setError(cc, 'CC is required');
        isValid = false;
    } else {
        setSuccess(cc);
    }

    if (warnaValue === '') {
        setError(warna, 'Warna is required');
        isValid = false;
    } else {
        setSuccess(warna);
    }

    if (tanggal_produksiValue === '') {
        setError(tanggal_produksi, 'Tanggal Produksi is required');
        isValid = false;
    } else {
        setSuccess(tanggal_produksi);
    }

    return isValid;
};
